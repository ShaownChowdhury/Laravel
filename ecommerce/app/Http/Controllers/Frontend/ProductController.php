<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function showCategoryProduct($slug)
    {

        $category = Category::select('id','category')->where('slug',$slug)->first();
        // dd($category);

        $products = Product::with('galleries')->whereHas('categories',function ($q) use ($slug){
          return $q->where('slug',$slug);
        })->get();
        // dd($products);
        return view('frontend.categoryArchieve',compact('products','category'));
    }
}
