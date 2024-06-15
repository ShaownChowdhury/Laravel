<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    function storeCart(Request $request){


     $isExists = Cart::where('product_id',$request->product_id)->where('customer_id',auth('customer')->user()->id)->exists(); 
     
     if($isExists){
        $cart = Cart::where('product_id',$request->product_id)->where('customer_id',auth('customer')->user()->id)->first();
        $cart->qty += $request->qty;
     }else{
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->customer_id = auth('customer')->user()->id;
        $cart->qty = $request->qty;
     }
  
     $cart->save();
     return back();
    }

    function viewCart(){
      return 'hi';
    }
}
