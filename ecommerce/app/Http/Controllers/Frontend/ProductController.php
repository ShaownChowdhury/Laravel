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

        $products = Product::with(['galleries' => function($query){
            return $query->select('id','product_id','title')->first();
        }])
        ->whereHas('categories',function ($q) use ($slug){
          return $q->where('slug',$slug);
        })->where('status',true)
        ->select('id','title','slug','featured_img','price','selling_price','status')
        ->get();
        // dd($products);
        return view('frontend.categoryArchieve',compact('products','category'));
    }

    function showProduct($slug){
        $product = Product::with('galleries')->where('slug',$slug)->first();
        // dd($product);
     return view('frontend.single-product',compact('product'));
    }
}
