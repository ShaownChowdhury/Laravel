<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyAccountController extends Controller
{
    function myAccount(){
        $orders = Order::with('orderItems.product:id,title')->where('customer_id',auth('customer')->user()->id)->get();
        // dd($orders);
        return view('frontend.MyAccount',compact('orders'));
    }

    function downloadInvoice(){
        return view('frontend.invoice');
    }
}
