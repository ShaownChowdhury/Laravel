@extends('layouts.frontendLayout')
@section('frontend')
  <section class="my-5">
    <div class="container">
        <h2>{{ $category->category }} </h2>
    </div>
  </section>

  <section id="products" class="my-5">
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
                
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                <div class="axil-product product-style-one">
                    <div class="thumbnail">
                            <a href="{{ route('product.show', $product->slug) }}">
                            @if ($product->featured_img)
                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="{{ asset('storage/'. $product->featured_img) }}" alt="{{ $product->featured_img }}">
                            @endif
                            @if ($product->galleries && count($product->galleries) > 0 )
                            <img class="hover-img" src="{{ asset('storage/'.$product->galleries[0]->title) }}" alt="{{ $product->title }}">
                            @endif
                        </a>
                        <div class="label-block label-right">
                            <div class="product-badget"> 
                             {{ ceil((($product->price-$product->selling_price)/$product->price)*100) }}% Off  
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul class="cart-action">
                                <li class="quickview"><a href="index-1.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                <li class="select-option">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        Add to Cart
                                    </a>
                                </li>
                                <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-rating">
                                <span class="icon">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h5 class="title"><a href="{{ route('product.show', $product->slug) }}">
                                {{ $product->title }} </a></h5>
                            <div class="product-price-variant">
                                @if ($product->selling_price)
                                    
                                <span class="price current-price"> {{ $product->selling_price }}</span>
                                <span class="price old-price"> {{ $product->price }}</span>
                                @else
                                <span class="price current-price"> {{ $product->price }}</span>
                                @endif
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
              <h4>No Products Found</h4>   
            @endforelse
        </div>
    </div>

  </section>
@endsection