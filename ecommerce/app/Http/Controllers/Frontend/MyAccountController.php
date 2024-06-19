<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class MyAccountController extends Controller
{
    function myAccount(){
        $orders = Order::with('orderItems.product:id,title')->where('customer_id',auth('customer')->user()->id)->get();
        // dd($orders);
        return view('frontend.MyAccount',compact('orders'));
    }

    function downloadInvoice($id){
        // return view('frontend.invoice');
        $order = Order::with('orderItems.product:id,title')->where('id',$id)->where('customer_id',auth('customer')->user()->id)->first();
        $data = compact('order');
        // dd($data);
        
        $pdf = Pdf::loadView('frontend.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
