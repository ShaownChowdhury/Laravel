<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - {{ env('APP_NAME') }} </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">

</head>


<body class="sticky-header newsletter-popup-modal">

  
  
    <header class="header axil-header header-style-1">
        
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="header-top-dropdown">
                           <p>Buy anything  and get free shipping!</p>
                           
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="index-1.html#">Help</a></li>
                                <li><a href="sign-up.html">Join Us</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="index.html" class="logo logo-dark">
                            <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Site Logo">
                        </a>
                        <a href="index.html" class="logo logo-light">
                            <img src="{{ asset('frontend/assets/images/logo/logo-light.png') }}" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.html" class="logo">
                                    <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li class="menu-item-has-children">
                                    <a href="index-1.html#">Home</a>
                                    <ul class="axil-submenu">
                                        <li><a href="index-1.html">Home - Electronics</a></li>
                                        <li><a href="index-2.html">Home - NFT</a></li>
                                        <li><a href="index-3.html">Home - Fashion</a></li>
                                        <li><a href="index-4.html">Home - Jewellery</a></li>
                                        <li><a href="index-5.html">Home - Furniture</a></li>
                                        <li><a href="index-7.html">Home - Multipurpose</a></li>
                                        <li><a href="../etrade-rtl/index.html">RTL Version</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index-1.html#">Shop</a>
                                    <ul class="axil-submenu">
                                        <li><a href="shop-sidebar.html">Shop With Sidebar</a></li>
                                        <li><a href="shop.html">Shop no Sidebar</a></li>
                                        <li><a href="single-product.html">Product Variation 1</a></li>
                                        <li><a href="single-product-2.html">Product Variation 2</a></li>
                                        <li><a href="single-product-3.html">Product Variation 3</a></li>
                                        <li><a href="single-product-4.html">Product Variation 4</a></li>
                                        <li><a href="single-product-5.html">Product Variation 5</a></li>
                                        <li><a href="single-product-6.html">Product Variation 6</a></li>
                                        <li><a href="single-product-7.html">Product Variation 7</a></li>
                                        <li><a href="single-product-8.html">Product Variation 8</a></li>
                                    </ul>
                                </li>
                                
                                @if (count($categories) > 0)
                                <li class="menu-item-has-children">
                                    <a href="index-1.html#">Categories </a>
                                    <ul class="axil-submenu">
                                        @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('product.category',$category->slug) }}">{{ str($category->category)->headline() }}</a>
                                            @if (count($category->subcategories) > 0)
                                                <ul class="axil-submenu">
                                                    @foreach ($category->subcategories as $subcategory)
                                                    <li>
                                                        <a href="{{ route('product.category',$subcategory->slug) }}"> {{ $subcategory->category }} </a>
                                                        @include('layouts.components.menuCategory')
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endif

                                <li><a href="about-us.html">About</a></li>
                                <li class="menu-item-has-children">
                                    <a href="index-1.html#">Blog</a>
                                    <ul class="axil-submenu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-details.html">Standard Post</a></li>
                                        <li><a href="blog-gallery.html">Gallery Post</a></li>
                                        <li><a href="blog-video.html">Video Post</a></li>
                                        <li><a href="blog-audio.html">Audio Post</a></li>
                                        <li><a href="blog-quote.html">Quote Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="wishlist.html">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </li>
                            <li class="shopping-cart">
                                <a href="index-1.html#" class="cart-dropdown-btn">
                                    <span class="cart-count">3</span>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <div class="my-account-dropdown">
                                    <span class="title">QUICKLINKS</span>
                                    <ul>
                                        <li>
                                            <a href="my-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="index-1.html#">Initiate return</a>
                                        </li>
                                        <li>
                                            <a href="index-1.html#">Support</a>
                                        </li>
                                        <li>
                                            <a href="index-1.html#">Language</a>
                                        </li>
                                    </ul>
                                    <div class="login-btn">
                                        <a href="sign-in.html" class="axil-btn btn-bg-primary">Login</a>
                                    </div>
                                    <div class="reg-footer text-center">No account yet? <a href="sign-up.html" class="btn-link">REGISTER HERE.</a></div>
                                </div>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>

    {{-- main starts --}}
  
     @yield('frontend')

    {{-- main ends --}}

    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service1.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service2.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="https://new.axilthemes.com/demo/template/etrade/{{ asset('frontend/assets/images/icons/service3.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service4.png') }}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>685 Market Street, <br>
                                Las Vegas, LA 95820, <br>
                                United States.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i> example@domain.com</a></li>
                                    <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01) 850-315-5862</a></li>
                                    <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="sign-up.html">Login / Register</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-service.html">Terms Of Use</a></li>
                                    <li><a href="index-1.html#">FAQ</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="{{ asset('frontend/assets/images/others/qr.png') }}" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="index-1.html#">
                                            <img src="{{ asset('frontend/assets/images/others/app-store.png') }}" alt="App Store">
                                        </a>
                                        <a href="index-1.html#">
                                            <img src="{{ asset('frontend/assets/images/others/play-store.png') }}" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="index-1.html#"><i class="fab fa-facebook-f"></i></a>
                            <a href="index-1.html#"><i class="fab fa-instagram"></i></a>
                            <a href="index-1.html#"><i class="fab fa-twitter"></i></a>
                            <a href="index-1.html#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="index-1.html#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2023. All rights reserved by <a target="_blank" href="https://axilthemes.com/">Axilthemes</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="{{ asset('frontend/assets/images/icons/cart/cart-1.png') }}" alt="paypal cart"></li>
                                <li><img src="{{ asset('frontend/assets/images/icons/cart/cart-2.png') }}" alt="paypal cart"></li>
                                <li><img src="{{ asset('frontend/assets/images/icons/cart/cart-5.png') }}" alt="paypal cart"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->
    <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="single-product-thumb">
                        <div class="row">
                            <div class="col-lg-7 mb--40">
                                <div class="row">
                                    <div class="col-lg-10 order-lg-2">
                                        <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                            <div class="thumbnail">
                                                <img src="{{ asset('frontend/assets/images/product/product-big-01.png') }}" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('frontend/assets/images/product/product-big-01.png') }}" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('frontend/assets/images/product/product-big-02.png') }}" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('frontend/assets/images/product/product-big-02.png') }}" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('frontend/assets/images/product/product-big-03.png') }}" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('frontend/assets/images/product/product-big-03.png') }}" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 order-lg-1">
                                        <div class="product-small-thumb small-thumb-wrapper">
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('frontend/assets/images/product/product-thumb/thumb-08.png') }}" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('frontend/assets/images/product/product-thumb/thumb-07.png') }}" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('frontend/assets/images/product/product-thumb/thumb-09.png') }}" alt="thumb image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rate.png') }}" alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="index-1.html#">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->

                                        </div>

                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <!-- End Product Action  -->

                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="index-1.html#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="productSearch" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header" style="display: none">
                    <h6 class="title"><span>24</span> Result Found</h6>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    {{-- <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="{{ asset('frontend/assets/images/product/electric/product-09.png') }}" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->


    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/electric/product-01.png') }}" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
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
                            <h3 class="item-title"><a href="single-product-3.html">Wireless PS Handler</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-2.html"><img src="{{ asset('frontend/assets/images/product/electric/product-02.png') }}" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(4)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-2.html">Gradient Light Keyboard</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="5">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-3.html"><img src="{{ asset('frontend/assets/images/product/electric/product-03.png') }}" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(6)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product.html">HD CC Camera</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.html" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Modal Start -->
    <div class="offer-popup-modal" id="offer-popup-modal">
        <div class="offer-popup-wrap">
            <div class="card-body">
                <button class="popup-close"><i class="fas fa-times"></i></button>
                <div class="content">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Don’t Miss!!</span>
                        <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                    </div>
                    <div class="poster-countdown countdown"></div>
                    <a href="shop.html" class="axil-btn btn-bg-primary">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="closeMask"></div>
    <!-- Offer Modal End -->
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>

        $('#productSearch').keyup(function(){
            
            
            let search = $(this).val();

            if(search.length > 3){
               $.ajax({
                 url: `{{ route('product.search') }}`,
                 method: 'GET',
                 data: {
                    search: search
                 },
                 success: function({products,productsCount}){
                    
                    $('.search-result-header').show()
                    $('.search-result-header .title span').html(productsCount)

                    let productsList = [];

                    
                    products.forEach(product =>{
                        
                        let productUrl = `{{ route('product.show', 'slug') }}`
                        productUrl = productUrl.replace('slug',product.slug)
                        
                        
                        let html = `<div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="${productUrl}">
                                <img width="80px" src="{{ asset('storage/') }}/${product.featured_img}" alt="${product.title}">
                            </a>
                        </div>
                        <div class="product-content">
                            
                            <h6 class="product-title"><a href="${productUrl}">${product.title} </a></h6>
                            <div class="product-price-variant">
                                ${product.selling_price ? `<span class="price current-price">${product.selling_price} TK</span>
                                <span class="price old-price">${product.price} TK</span>`: `
                                <span class="price current-price">${product.price} TK</span>`}
                                
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>`
                    productsList.push(html)
                    // console.table(html)
                    })

                    $('.psearch-results').html(productsList)
                 }
               })
            }


        })

    </script>
</body>

</html>