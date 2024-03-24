@extends('layouts.backendLayouts')
@section('content')

<div class="container-fluid">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mt-5">
            <div class="col-12 text-end mb-3">
                <button type="submit" href="#0" class="main-btn primary-btn square-btn btn-hover">
                    <i class="lni lni-heart"></i>
                    Store Product
                </button>
            </div>
            
            <div class="col-lg-8">
                <div class="card-style">
                    <div class="input-style-2">
                        <h5 class="mb-25">Add Product</h5>
                        @if (session('msg'))
                         <div class="alert alert-success">{{ session('msg') }} </div>
                        @endif
                        <input name="title" type="text" placeholder="Product Title">
                        <span class="icon"> <i class="lni lni-apple-brand"></i> </span>
                        @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-style-2">
                                <input name="price" type="text" placeholder="Product Price">
                                <span class="icon"> <i class="lni lni-apple-brand"></i> </span>
                                @error('price')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-style-2">
                                <input name="sell_price" type="text" placeholder="Product Discount Price">
                                <span class="icon"> <i class="lni lni-apple-brand"></i> </span>
                                @error('sell_price')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="input-style-2">
                                <input name="sku" type="text" placeholder="Sku">
                                <span class="icon"> <i class="lni lni-apple-brand"></i> </span>
                                @error('sku')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="select-style-1">
                                    <div class="select-position">
                                      <select name="stock">
                                        <option selected value="{{ true }} ">In Stock</option>
                                        <option value="{{ false }}">Out Of Stock</option>
                                      </select>
                                    </div>
                                @error('stock')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-style-2">
                                <input name="brand" type="text" placeholder="Brand Name">
                                <span class="icon"> <i class="lni lni-apple-brand"></i> </span>
                                @error('brand')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex">
                        <div class="form-check form-switch toggle-switch me-3">
                            <input class="form-check-input" name="status" type="checkbox" id="status" checked="">
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                        <div class="form-check form-switch toggle-switch">
                            <input class="form-check-input" name="featured" type="checkbox" id="featured">
                            <label class="form-check-label" for="featured">Featured Products</label>
                        </div>
                    </div>
                </div>
            </div>    
            
            <div class="col-lg-4">
                <div class="card-style">
                    <div class="input-style-1">
                        <label>Featured Image</label>
                        <input name="featured_img" type="file">
                    </div>
                    <div class="input-style-1">
                        <label>Gallery Image</label>
                        <input name="galleries[]" type="file" multiple>
                    </div>
                    <div class="input-style-1">
                        <label>Category</label>
                        
                    </div>
                </div>
            </div>
    
           </div>
        </div>
    </form>
</div>

@endsection