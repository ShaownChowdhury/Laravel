@extends('layouts.frontendLayout')
@section('frontend')
<main class="main-wrapper">

    <!-- Start Cart Area  -->
    <div class="axil-product-cart-area axil-section-gap">
        <div class="container">
            <form action="{{ route('cart.update') }}" method="POST">

                @csrf

            <div class="axil-product-cart-wrap">
                <div class="product-table-heading">
                    <h4 class="title">Your Cart</h4>
                    <a href="" class="cart-clear">Clear Shoping Cart</a>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-cart-table mb--40">
                        <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-price">Price</th>
                                <th scope="col" class="product-quantity">Quantity</th>
                                <th scope="col" class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp

                            @foreach ($carts as $cart)
                              
                            <tr>
                                <td class="product-remove"><a href="{{ route('cart.delete', $cart->id) }}" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                <td class="product-thumbnail"><a href="{{ route('product.show',$cart->product->slug) }}"><img src="{{ asset('storage/'.$cart->product->featured_img) }}" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="{{ route('product.show',$cart->product->slug) }}">{{ $cart->product->title }} </a></td>
                                <td class="product-price" data-title="Price">{{ $cart->product->selling_price ?? $cart->product->price }} <span class="currency-symbol">Tk </span></td>
                                <td class="product-quantity" data-title="Qty">
                                    <div class="pro-qty">
                                        <input type="number" class="quantity-input" value="{{ $cart->qty }}" name="qty[{{ $cart->product->id }}]">
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal">{{ ($cart->product->selling_price ?? $cart->product->price)*($cart->qty) }} <span class="currency-symbol">Tk</span></td>
                            </tr>
                            
                            @php
                                $total += ($cart->product->selling_price ?? $cart->product->price)*($cart->qty)
                            @endphp 

                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <h4>Total Price </h4>
                                </td>
                                <td align="right">
                                    <h4>{{$total}} tk</h4>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                    <div class="update-btn">
                        <a href="{{ route('order.checkout') }}" class="axil-btn btn-outline">Proceed to checkout</a>
                        <button style="display: inline-block; width:fit-content" class="axil-btn btn-outline">Update Cart</button>
                    </div>
                            
            </div>
            </form>
        </div>
    </div>
    <!-- End Cart Area  -->

</main>
@endsection