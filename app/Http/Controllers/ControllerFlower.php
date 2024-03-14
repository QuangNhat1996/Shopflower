<?php

namespace App\Http\Controllers;

use App\Mail\EmailCancel;
use App\Models\cartDetail;
use App\Models\Categories;
use App\Models\fatherCart;
use App\Models\feedback;
use App\Models\FeedbackForm;
use App\Models\Formfeed;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ControllerFlower extends Controller
{
    // public function index()
    // {
    //     // session()->forget('cart');
    //     $categories = Categories::where('category_status', '1')->get();
    //     return view('index', compact('categories'));
    // }

    public function product()
    {
        // session()->forget('cart');
        // if (session()->has('cart')) {
        //     session()->forget('cart');
        // }
        $category = Categories::where('category_status', '1')->get();
        return view('product', compact('category'));
    }

    public function blog()
    {
        $category = Categories::where('category_status', '1')->get();
        $blog = DB::table('blogs')->orderByDesc('created_at')->paginate(6);
        return view('blog', compact('category', 'blog'));
    }

    public function blogdetail($id)
    {
        $data = DB::table('blogs')->where('id', $id)->first();

        return view('blogdetail', ['data' => $data]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function card()
    {
        session()->get('payment', []);
        return view('card');
    }
    public function addToCart($id)
    {
        // session()->regenerate();
        $product = DB::table('productflower')->where('product_id', $id)->first();
        if ($product) {
            $cart = session('cart', []);
            // echo "<pre>";
            // var_dump($cart);
            // var_dump (isset($cart[$id]));
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "product_id" => $product->product_id,
                    "product_name" => $product->product_name,
                    "photo" => $product->image,
                    "price" => $product->product_price,
                    "quantity" => 1,
                    'user_id' => session('user_id')
                ];
            }
            // var_dump($cart);
            // session()->put('cart', $cart);
            session(['cart' => $cart]);
            session()->save();
            return redirect()->back()->with('success', 'Product add to cart successfully!');
        }
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
    public function login()
    {
        return view('login');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function categories()
    {
        // $category = Categories::where('category_status','1')->get();
        return view('categories');
    }

    // public function viewcategories($category_id)
    // {
    //     if (Categories::where('category_id', $category_id)->exists()) {
    //         $category = Categories::get();
    //         // dd( $category->category_id);
    //         $category_name = Categories::where('category_id', $category_id)->first();
    //         $product = Product::join('categories', 'categories.category_id', '=', 'productflower.category_id')
    //         ->where('productflower.category_id', $category_id)
    //         ->paginate(8);
    //         return view('categories', compact('category', 'product', 'category_name'));
    //     } else {
    //         return redirect('/')->with('status', "category does not exists");
    //     }
    // }

    function search_product(Request $request)
    {
        $search = $request->input('search');
        $type_product = $request->input('type_product');
        $search_giangsinh = $request->input('search_giangsinh');
        $sort_by = $request->input('sort_by');
        $search_wedding = $request->input('search_wedding');
        $search_special = $request->input('search_special');
        $search_sinhnhat = $request->input('search_sinhnhat');
        $data = DB::table('productflower');
        if ($type_product != '') {
            $data->where('category_id', $type_product);
        }
        if ($search_giangsinh != '') {
            $data->where('product_name', 'like', '%' . $search_giangsinh . '%');
        }
        if ($sort_by == 'asc') {
            $data->orderBy('product_price', 'asc');
        }
        if ($sort_by == 'desc') {
            $data->orderBy('product_price', 'desc');
        }
        if ($sort_by == 'new') {
            $data->orderBy('created_at', 'desc');
        }
        if ($sort_by == 'old') {
            $data->orderBy('created_at', 'asc');
        }
        if ($search_wedding != '') {
            $data->where('product_name', 'like', '%' . $search_wedding . '%');
        }

        if ($search_special != '') {
            $data->where('product_name', 'like', '%' . $search_special . '%');
        }

        if ($search_sinhnhat != '') {
            $data->where('product_name', 'like', '%' . $search_sinhnhat . '%');
        }
        if ($search != "") {
            $data->where(function ($query) use ($search) {
                $query->where('product_name', 'like', '%' . $search . '%')
                    ->orwhere('product_id', 'like', '%' . $search . '%');
            });
        }
        $result = $data->get();
        // dd($result);
        return response()->json($result);
    }

    public function viewCategories($category_id)
    {
        if (Categories::where('category_id', $category_id)->exists()) {
            $category = Categories::get();
            $category_name = Categories::where('category_id', $category_id)->first();

            // Lấy giá trị sắp xếp từ request
            $sortBy = request()->input('sort_by', 'asc');
            $createdBy = request()->input('created_by', 'new');

            $product = Product::join('categories', 'categories.category_id', '=', 'productflower.category_id')
                ->where('productflower.category_id', $category_id);

            if ($createdBy === 'new') {
                $product->orderBy('productflower.created_at', 'desc');
            }
            if ($createdBy === 'old') {
                $product->orderBy('productflower.created_at', 'asc');
            }

            $product->orderBy('productflower.product_price', $sortBy);

            $product = $product->paginate(6);

            return view('categories', compact('category', 'product', 'category_name', 'sortBy', 'createdBy'));
        } else {
            return redirect('/')->with('status', 'Category does not exist.');
        }
    }

    public function detail($product_id)
    {
        $category = Categories::get();
        $product = Product::join('categories', 'categories.category_id', '=', 'productflower.category_id')
            ->where('product_id', $product_id)
            ->get();

        $excludeProductIds = [$product[0]->product_id]; // Danh sách id sản phẩm đã hiển thị

        $recommend = Product::where('category_id', $product[0]->category_id)
            ->whereNotIn('product_id', $excludeProductIds)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return view('detail', compact('category', 'product', 'recommend'));
    }

    public function forgotPassword()
    {
        return view('forgotPass');
    }

    public function resetPassword()
    {
        return view('resetPassword');
    }

    public function checkRegister(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        $phoneNumber = $request->input('phonenumber');
        $email = $request->input('email');
        $password = $request->input('password');
        $reconfirmPassword = $request->input('password_confirmation');
        $question = $request->input('security_question');
        $answer = $request->input('securtiy_answer');
        $hashedPassword = Hash::make($password);
        $hashedReconfirmPassword = Hash::make($reconfirmPassword);

        // Kiểm tra email đã tồn tại hay chưa
        $existingEmail = DB::table('tbusers')->where('email',  $email)->first();
        if ($existingEmail) {
            return redirect()->back()->withInput()->with('error', 'Email is already registered!');
        }

        // Kiểm tra sdt đã tồn tại hay chưa
        $existingPhoneNumber = DB::table('tbusers')->where('phone_number',  $phoneNumber)->first();
        if ($existingPhoneNumber) {
            return redirect()->back()->withInput()->with('error', 'Phone number is already registered!');
        }

        // Lưu dữ liệu vào bảng user
        DB::table('tbusers')->insert([
            'first_name' => $firstName, 'last_name' => $lastName, 'phone_number' => $phoneNumber, 'email' => $email, 'password' => $hashedPassword, 'reconfirm_password' => $hashedReconfirmPassword, 'security_question' => $question, 'security_answer' => $answer
        ]);
        return redirect('login')->with('message', "Create Account Succsessfully!");
    }

    public function checkLogin(Request $request)
    {
        $email = $request->input('email_login');
        $password = $request->input('password_login');
        $data = DB::table('tbusers')->where('email', $email)->first();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                session()->put('name_user', $data->last_name);
                session()->put('email_user', $data->email);
                session()->put('user_id', $data->id);
                session()->put('phone', $data->phone_number);
                session()->put('user', "true");
                session()->save();
                return redirect('/');
            } else {
                return redirect('login')->with('err1', "Wrong Email or Password!");
            }
        } else {
            return redirect('login')->with('err1', "Wrong Email or Password!");
        }
    }

    public function checkForgotPassWord(Request $request)
    {
        $email = $request->input('email');
        $question = $request->input('security_question');
        $answer = $request->input('securtiy_answer');

        $data = DB::table('tbusers')->where('email', $email)->first();
        if ($data) {
            if ($data->security_question === $question) {
                if ($data->security_answer === $answer) {
                    return redirect('reset-password')->with(['message3' => "Re-enter the new password", 'email' => $email]);
                } else {
                    return redirect('forgot-password')->with('err2', "Wrong Answer!");
                }
            } else {
                return redirect('forgot-password')->with('err3', "Wrong Question!");
            }
        } else {
            return redirect('forgot-password')->with('err4', "Invalid Email");
        }
    }

    // code respass
    public function checkResetPassword(Request $request)
    {
        $email = $request->input('email_login');
        $password = $request->input('password');
        $hashedPassword = Hash::make($password);
        $reconfirmPassword = $request->input('password_confirmation');

        $hashedReconfirmPassword = Hash::make($reconfirmPassword);

        DB::table('tbusers')->where('email', $email)->update([
            'password' => $hashedPassword, 'reconfirm_password' => $hashedReconfirmPassword
        ]);
        return redirect('login')->with('success_reset', 'Regenerated password successfully!');
    }
    public function customLogout()
    {

        Session::forget('cart');
        Session::forget('name_user');
        Session::forget('email_user');
        Session::forget('user');
        Session::forget('user_id');

        return redirect('/');
    }
    function bill()
    {
        $ma_bill = Str::random(15);
        foreach (session('cart') as $item) {
            DB::table('cart')->insert([
                'product_id' => $item['product_id'], 'ma_bill' => $ma_bill, 'quantity' => $item['quantity'], 'price' => $item['price'],
                'user_id' => $item['user_id']
            ]);
        }
        return redirect('/');
    }

    public function feedback_store(Request $request)
    {

        if (session()->has('user_id')) {
            $feedback = new Formfeed();
            $feedback->name = $request->input('name');
            $feedback->email = $request->input('email');
            $feedback->feedback = $request->input('feedback');
            $feedback->subject = $request->input('subject');
            $feedback->user_id = session('user_id');
            if ($feedback->feedback === NULL) {
                return redirect('contact')->with('error', 'not null');
            } elseif ($feedback->subject === NULL) {
                return redirect('contact')->with('error', 'not null');
            }
            $feedback->save();
            return redirect('/');
        }
        return redirect('login')->with('error1', 'need login to give feedback');
    }
    public function view_user_feedback()
    {

        $feedback=Formfeed::all();
        return view('feedback', compact('feedback'));
    }



    public function cardinfo()
    {
        $useremail = session()->get('email_user');
        // dd($useremail);
        $cart = cartDetail::where('user_email', $useremail)
            ->orderby('created_at', 'desc')
            ->get();
        //  dd($cart);
        return view('cartinfo', compact('cart'));
    }

    public function delete($id)
    {
        $cart = cartDetail::find($id);
        session()->put('user_name_cancel_email', $cart->user_name);
        session()->put('order_no_cancel_email', $cart->bill_id);
        Mail::mailer('confirm_order')->to($cart->user_email)->send(new EmailCancel());
        session()->forget('user_name_cancel_email');
        session()->forget('order_no_cancel_email');

        $cart->delete();

        return redirect()->route('cartinfo');
    }
}
