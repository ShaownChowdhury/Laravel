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

        $categories = Category::get();
        return view('frontend.shopSidebar',compact('products','categories'));
    }

    function filterProducts(Request $request){
       
        $query = Product::query();

        // Category 
        if($request->categories){
           $query->whereHas('categories', function($q) use ($request){
             return $q->whereIn('slug', $request->categories);
           });
        }

        // PRICING
        if($request->price){
            $query->whereBetween('price', [$request->price['min'], $request->price['max']]);
        }

        $products = $query->with('galleries')->orderBy($request->ordering['order'],$request->ordering['sort'])->get();
        // Product::max('price');
        
        return $products;
    }
}
