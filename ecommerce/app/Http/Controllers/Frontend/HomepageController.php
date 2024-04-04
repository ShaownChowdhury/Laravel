<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    function homepage(){
        $categories = Category::latest()->take(12)->get();
        return view('frontend.homepage',compact('categories'));
    }
}
