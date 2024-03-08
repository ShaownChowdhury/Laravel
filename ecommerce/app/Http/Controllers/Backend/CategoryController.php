<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category(){
        $categories = Category::latest()->paginate(3);
        // dd($categories);
        return view('backend.category.index',compact('categories'));
    }

    public function categoryInsert(Request $request){
    
        $request->validate(
         [
            'category' => 'required'
         ]
        );
        $category = new Category();
        $category->category = $request->category;
        $category->category_slug = Str::slug($request->category) ;
        $category->save();
        return back();
    }

    function categoryDelete($id){
        $category = Category::findOrFail($id);
        // dd($category);
        $category->delete();
        return back();

    }

    function categoryEdit($id){
       $categories = Category::latest()->paginate(3);
       $categoryEdit = Category::find($id);

       return view('backend.category.index' ,compact('categories','categoryEdit'));
    }

    function categoryUpdate(Request $request, $id){
       $categoryUpdate = Category::findOrFail($id);
       $categoryUpdate->category = $request->category;
       $categoryUpdate->category_slug = Str::slug($request->category);
       $categoryUpdate->save();
       return back();
    }
}
