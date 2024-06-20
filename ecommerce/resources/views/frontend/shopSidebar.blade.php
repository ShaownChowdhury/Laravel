@extends('layouts.frontendLayout')
@section('frontend')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                        </ul>
                        <h1 class="title">Explore All Products</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="assets/images/product/product-45.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start Shop Area  -->
    <div class="axil-shop-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="axil-shop-sidebar">
                        <div class="d-lg-none">
                            <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="toggle-list product-categories active">
                            <h6 class="title">CATEGORIES</h6>
                            <div class="shop-submenu">
                                <ul>
                                    @foreach ($categories as $category)
                                        
                                    <li class="currect-cat">
                                        <input type="checkbox" name="categories" id="category{{ $category->id }}" value="{{ $category->slug }}">
                                        <label for="category{{ $category->id }}"> {{ str($category->category)->headline() }} </label>
                                    </li>
                                    
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="toggle-list product-categories product-gender active">
                            <h6 class="title">GENDER</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="shop-sidebar.html#">Men (40)</a></li>
                                    <li><a href="shop-sidebar.html#">Women (56)</a></li>
                                    <li><a href="shop-sidebar.html#">Unisex (18)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="toggle-list product-color active">
                            <h6 class="title">COLORS</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="shop-sidebar.html#" class="color-extra-01"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-02"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-03"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-04"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-05"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-06"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-07"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-08"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-09"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-10"></a></li>
                                    <li><a href="shop-sidebar.html#" class="color-extra-11"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="toggle-list product-size active">
                            <h6 class="title">SIZE</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="shop-sidebar.html#">XS</a></li>
                                    <li><a href="shop-sidebar.html#">S</a></li>
                                    <li><a href="shop-sidebar.html#">M</a></li>
                                    <li><a href="shop-sidebar.html#">L</a></li>
                                    <li><a href="shop-sidebar.html#">XL</a></li>
                                    <li><a href="shop-sidebar.html#">XXL</a></li>
                                    <li><a href="shop-sidebar.html#">3XL</a></li>
                                    <li><a href="shop-sidebar.html#">4XL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="toggle-list product-price-range active">
                            <h6 class="title">PRICE</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="shop-sidebar.html#">30</a></li>
                                    <li><a href="shop-sidebar.html#">5000</a></li>
                                </ul>
                                <form action="shop-sidebar.html#" class="mt--25">
                                    <div id="slider-range"></div>
                                    <div class="flex-center mt--20">
                                        <span class="input-range">Price: </span>
                                        <input type="text" id="amount" class="amount-range" readonly>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <button class="axil-btn btn-bg-primary">All Reset</button>
                    </div>
                    <!-- End .axil-shop-sidebar -->
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="axil-shop-top mb--40">
                                <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                                    <!-- Start Single Select  -->
                                    <span class="filter-results">Showing 1-12 of 84 results</span>
                                    <select class="single-select">
                                        <option>Short by Latest</option>
                                        <option>Short by Oldest</option>
                                        <option>Short by Name</option>
                                        <option>Short by Price</option>
                                    </select>
                                    <!-- End Single Select  -->
                                </div>
                                <div class="d-lg-none">
                                    <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i> FILTER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .row -->
                    <div class="row row--15">
                        @forelse ($products as $product)
                
            <div class="col-xl-4 col-lg-4 col-sm-6 col-12 mb--30">
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
                            @if ($product->selling_price)
                                
                            <div class="product-badget"> 
                             {{ ceil((($product->price-$product->selling_price)/$product->price)*100) }}% Off  
                            </div>
                            @endif
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
                        <!-- End Single Product  -->
                        
                    </div>
                    <div class="text-center pt--20">
                        <a href="shop-sidebar.html#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Shop Area  -->

    
</main>
@endsection

@push('customJs')
    <script>
        const categoryValues = []

        $('input[name="categories"]').change(function(){
            if($(this).is(":checked")){
                categoryValues.push($(this).val())
            }else{
                categoryValues.splice(categoryValues.indexOf($(this).val(),1))
            }
            // console.log(categoryValues);
            getFilterdProduct(categoryValues)
        })

        function getFilterdProduct(category=null ,price=null ,ordering=null ){

            $.ajax({
                url: "{{ route('filter.shop') }}",
                method: 'get',
                data: {
                    categories: category,
                    price: price,
                    ordering : ordering
                },
                success: function(res){
                    console.log(res);
                }
            })
        }
    </script>
@endpush