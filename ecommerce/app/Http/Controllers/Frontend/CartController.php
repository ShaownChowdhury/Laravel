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
      $carts = Cart::with('product:id,slug,title,featured_img,price,selling_price')->where('customer_id',auth('customer')->id())->get();
      // dd($carts);
      return view('frontend.cart',compact('carts'));
    }

    function updateCart(Request $request){
      // return $request->all();
      
      foreach($request->qty as $productId=>$qty){
         $cart = Cart::where('product_id',$productId)->where('customer_id',auth('customer')->id())->first();
         // dd($cart);
         $cart->qty = $qty;
         $cart->save();
      }
      return back();
    }

    function deleteCart($id){
      Cart::find($id)->delete();
      return back();
    }

   
}
