<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    function checkout(){
        $carts = Cart::where('customer_id',auth('customer')->id())->with('product')->get();
        // dd($carts);
        return view('frontend.checkout',compact('carts'));
    }
}
