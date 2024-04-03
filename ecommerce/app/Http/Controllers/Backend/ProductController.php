<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Helpers\MediaUploader;
use App\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use MediaUploader,SlugGenerator;
    function addProduct(){
        $categories = Category::select('id','category')->latest()->get();
        return view('Backend.products.addProduct',compact('categories'));
    }
    function storeProduct(Request $request,$id){
        // $request->validate([
        //     "title" => 'required',
        //     // "price" => 'required',
        //     "sku" => 'required',
        //     "brand" => 'required',
        //     "sell_price" => 'required_with:price',
        //     "featured_img" => 'required',
        //     'galleries.*' => 'mimes:jpg,png'
        // ],[
        //     'title.required' => 'The Product Title is required',
        //     'price.required' => 'The Product Price is required',
        //     'brand.required' => 'The Product Brand is required',
        // ]);
        // return redirect()->route('admin.products.add')->with('msg','Product Added Successfully 😊');
        // dd($this->uploadMultipleMedia($request->galleries,'gallery'));
        dd($request->long_detail);
        $product = Product::findOrNew($id);
        if($request->hasFile('featured_img')){
            $featured_img = $this->uploadSingleMedia($request->featured_img, $this->createSlug(Product::class, $request->title),'products',$product->featured_img);
        }
        $product->title = $request->title;
        $product->slug = $this->createSlug(Product::class, $request->title);
        $product->price = $request->price;
        $product->selling_price = $request->sell_price;
        $product->sku = $request->sku;
        $product->brand = $request->brand;
        $product->featured_img = $featured_img ?? $product->featured_img;
        $product->stock = $request->stock;
        $product->status = $request->status ?? 0;
        $product->featured = $request->featured ?? 0;
        $product->short_detail = $request->short_detail;
        $product->long_detail = $request->long_detail;
        $product->save();

        if($product){
          $product->categories()->sync($request->categories);
          return redirect()->route('admin.products.add')->with('msg','Product Added Successfully');

        }

        // PRODUCT GALLERY
        if($request->galleries() && count($request->galleries) > 0){
            $galleries = $this->uploadMultipleMedia($request->galleries,'galleries');

            foreach($galleries as $singleGalleryImage){
            $gallery = new Gallery;
            $gallery->title = $singleGalleryImage;
            $gallery->product_id = $product->id;
            $gallery->save();
            }
        }


    }
}
