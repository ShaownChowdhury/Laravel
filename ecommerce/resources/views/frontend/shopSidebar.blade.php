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
                            <li class="axil-breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Shop</li>
                        </ul>
                        <h1 class="title">Explore All Products</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{ asset('frontend/assets/images/product/product-38.png') }}" alt="Image">
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
                        
                        <div class="toggle-list product-price-range active">
                            <h6 class="title">PRICE</h6>
                            <div class="shop-submenu">
                                
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
                                    <select class="single-select" name="sorting">
                                        <option value="created_at.desc">Short by Latest</option>
                                        <option value="created_at.asc">Short by Oldest</option>
                                        <option value="price.asc">Low Price</option>
                                        <option value="price.desc">High Price</option>
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
                    <div class="row row--15 productArea">
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
        const priceValue = {
            min: 0,
            max: 9999999999
        }
        const orderValue = {
            order: 'created_at',
            sort: 'desc'
        }

        $('input[name="categories"]').change(function(){
            if($(this).is(":checked")){
                categoryValues.push($(this).val())
            }else{
                categoryValues.splice(categoryValues.indexOf($(this).val(),1))
            }
            // console.log(categoryValues);
            getFilterdProduct(categoryValues, priceValue, orderValue)
        })

        $('#slider-range').slider({
                range: true,
                min: 0,
                max: 5000,
                values: [0, 5000],
                change: function(event, ui) {
                    priceValue.min = ui.values[0]
                    priceValue.max = ui.values[1]
                getFilterdProduct(categoryValues, priceValue, orderValue)
                }, 
                slide: function(event, ui) {
                    $('#amount').val('Tk' + ui.values[0] + '  Tk' + ui.values[1]);
                }
        });

        $('select[name="sorting"]').change(function(){
           let value = $(this).val()
           orderValue.order = value.split('.')[0]
           orderValue.sort = value.split('.')[1]
           getFilterdProduct(categoryValues, priceValue, orderValue)

        //    console.log(orderValue)
        });

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
                   // PRODUCT FOREACH /  MAP
                   
                //    console.log(res)
                //    return false;

                   
                   const productLists = []
                   res.map(product => {
                    let url = "{{ route('product.show', '::slug') }}"
                    url = url.replace('::slug',product.slug)
                    console.log(url);
                    
                    
                    let productHtml = `

                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="${url}">
                                    
                                    ${product.featured_img ? (
                                        `<img class="main-img" src="{{ asset('storage/' ) }}/${product.featured_img}" alt="${product.title}">`
                                    ) : null }

                                    ${product.galleries ? (
                                    `<img class="hover-img" src="{{ asset('storage/' ) }}/${product.galleries[0].title}" alt="${product.title}">`
                                    ) : null }
                                
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget"> 
                                    ${Math.ceil(((product.price - product.selling_price)/product.price)*100)} % Off  
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="index-1.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option">
                                            <a href="${url}">
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
                                    <h5 class="title"><a href="${url}">
                                        ${product.title} </a></h5>
                                    <div class="product-price-variant">
                                        ${product.selling_price ? (
                                            `<span class="price current-price"> ${product.selling_price} </span>
                                            <span class="price old-price"> ${product.price} </span>`
                                        ) : (
                                            `<span class="price current-price"> ${product.price} </span> `
                                        )}    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `

                    productLists.push(productHtml)

                   })
                   $('.productArea').html(productLists)

                }
            })
        }
    </script>
@endpush