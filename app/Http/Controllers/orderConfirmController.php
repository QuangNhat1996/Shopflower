<?php

namespace App\Http\Controllers;

use App\Models\fatherCart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class orderConfirmController extends Controller
{
    public function orderConfirm() {
        return view('orderConfirmation');
    }

    public function orderBill() {
        $email = session()->get('email_user');
        // dd($email);
        $order = session('ma_bill');
        session()->forget('ma_bill');
        // dd($order);
        return view('orderConfirmation')->with('bill_id', $order);
    }
}
