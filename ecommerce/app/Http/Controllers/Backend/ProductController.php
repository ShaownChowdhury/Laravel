<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addProduct(){
    return view('Backend.products.addProduct');
    }
    function storeProduct(Request $request){
        // dd($request->all());
        $request->validate([
            "title" => 'required',
            "price" => 'required',
            "sku" => 'required',
            "brand" => 'required'
        ],[
            'title.required' => 'The Product Title is required',
            'price.required' => 'The Product Price is required',
            'brand.required' => 'The Product Brand is required',
        ]);
        return redirect()->route('admin.products.add')->with('msg','Product Added Successfully 😊');
    }
}
