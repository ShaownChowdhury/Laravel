<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    function homepage(){
        $categories = Category::latest()->take(12)->get();
        return view('frontend.homepage',compact('categories'));
    }

    function shopPage(){
        $products = Product::with(['galleries' => function($query){
            return $query->select('id','product_id','title')->first();
        }])
        
        ->where('status',true)
        ->select('id','title','slug','featured_img','price','selling_price','status')
        ->paginate(15);
        // dd($products);
        return view('frontend.shopSidebar',compact('products'));
    }
}
