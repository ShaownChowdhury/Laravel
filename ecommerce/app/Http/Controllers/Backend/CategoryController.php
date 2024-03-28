<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\MediaUploader;
use App\Helpers\SlugGenerator;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    use SlugGenerator, MediaUploader;

    public function category(){
        $categories = Category::with('subcategories')->latest()->paginate(30);
        $parentCategories = $categories->where('category_id',null)->flatten();
        // dd($parentCategories);
        return view('backend.category.index',compact('categories','parentCategories'));
    }

    public function categoryInsert(Request $request){
     
        // dd($request->icon->getClientOriginalExtension());
        // $request->validate(
        //     [
        //         'icon' => 'required|mimes:png,jpg'
        //     ]
        // );
        // $request->validate(
        //  [
        //     'category' => 'required'
        //  ]
        // );

        $slug = $this->createSlug(Category::class,$request->category);
        if($request->hasFile('icon')){

            $iconPath = $this->uploadSingleMedia($request->icon,$slug,'category');
        }

        $category = new Category();
        $category->category = $request->category;
        $category->category_id = $request->category_id;
        $category->slug = $slug ;
        $category->icon = $request->hasFile('icon')? $iconPath :'' ;
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
        $categories = Category::with('subcategories')->latest()->paginate(30);
        $parentCategories = $categories->where('category_id',null)->flatten();
        $categoryEdit = $categories->where('id',$id)->first();
        // dd($categoryEdit);

       return view('backend.category.index' ,compact('categories','categoryEdit','parentCategories'));
    }

    function categoryUpdate(Request $request, $id){
        $slug = $this->createSlug(Category::class,$request->category);
        if($request->hasFile('icon')){

            $iconPath = $this->uploadSingleMedia($request->icon,$slug,'category',$request->old);
        }

        $category = Category::find($id);
        $category->category = $request->category;
        $category->category_id = $request->category_id;
        $category->slug = $slug ;
        $category->icon = $request->hasFile('icon')? $iconPath :'' ;
        $category->save();
        return back();
    }
}
