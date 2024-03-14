<?php

namespace App\Http\Controllers;

use App\Mail\EmailConfirm;
use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Orders;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
class StripeController extends Controller
{
    function payment_cart(Request $request){
        $paymentItems = $request->input('paymentItems');
        session()->put('payment',$paymentItems);
        return response('thanh cong');
    }

    public function session(Request $request)
    {
        session()->put('shipping_name',$request->input('name'));
        session()->put('shipping_mail',$request->input('email'));
        session()->put('shipping_phone',$request->input('phoneNumber'));
        session()->put('shipping_address',$request->input('address'));
        session()->save();
        // dd(session('payment'));
        $productItems = [];
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        foreach (session('payment') as $item) {
            $product_name = $item[1]['product_name'];
            $total = $item[1]['price'];
            $quantity = $item[1]['quantity'];

            $two0 = "500000000";
            $unit_amount = $total;

            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $product_name,
                    ],
                    'currency'     => 'usd',
                    'unit_amount'  => $unit_amount*100,
                ],
                'quantity' => $quantity
            ];
        }

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$productItems],
            'mode'                  => 'payment',
            'payment_method_types' => ['card'],
            'allow_promotion_codes' => true,
            'metadata'              => [
                'user_id' => "1"
            ],
            'customer_email' => session('shipping_mail'), //$user->email,
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);
        return redirect()->away($checkoutSession->url);
    }

    public function success(Request $request)
    {
        $product_name='';
        $price_total=0;
        $ma_bill = Str::random(15);
        $TotalItem = [];
       session()->put('ma_bill',$ma_bill);
        foreach(session('payment') as $item){

            $data = DB::table('productflower')->where('product_id',$item[1]['product_id'])->first();
            $item_array= $item[1]['product_id'] ;
            $item_array = [
                $image = $data->image,
                $product_name_email = $data->product_name,
            ];
           array_push($TotalItem,  $item_array);

            DB::table('cart')->insert([
                'product_id' => $item[1]['product_id'],
                'bill_id'=> $ma_bill,
                'quantity' => $item[1]['quantity'],
                'price' => $item[1]['price'],
                'user_id' => $item[1]['user_id'],
                'user_phone' => session('shipping_phone'),
                'user_name' => session('shipping_name'),
                'user_email' => session('shipping_mail'),
                'user_address' => session('shipping_address')
            ]);
            $user_id = $item[1]['user_id'];
            $product_name =  $product_name .', ' .$data->product_name;
            $price_total = $price_total + $item[1]['price']*$item[1]['quantity'];

        }

        $product_name = ltrim( $product_name," ,");
        DB::table('cartdetail')->insert([
            'bill_id'=>$ma_bill,'product'=> $product_name,'user_id'=> $user_id,'price'=> $price_total,'user_name'=>session('shipping_name'),'user_email'=>session('shipping_mail'),'user_address'=>session('shipping_address'),'user_phone'=>session('shipping_phone')
        ]);

        $date = Carbon::now();
        $date= $date->addHours(7);
        session()->put('date', $date);
        session()->put('order_no', $ma_bill);

        session()->put('total_price', $price_total);

        session()->put('TotalItem', $TotalItem);
       session()->save();

        Mail::mailer('confirm_order')->to(session('shipping_mail'))->send(new EmailConfirm());
        session()->forget('cart');
        session()->forget('payment');
        session()->forget('date');
        session()->forget('order_no');
        session()->forget('image');
        session()->forget('total_price');
        // return redirect('/')->with('success', "Thanks for you order. You have just completed your payment. The seeler will reach out to you as soon as possible!");
        // return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
        return redirect('/order-confirm');
    }

    public function cancel()
    {
        return view('cancel');
    }
}
