@extends('layouts.frontendLayout')
@section('frontend')
<main class="main-wrapper">

    <!-- Start Checkout Area  -->
    <div class="axil-checkout-area axil-section-gap">
        <div class="container">
            <form action="checkout.html#">
               
                <div class="row">
                    <div class="col-lg-6">
                        
                        <div class="axil-checkout-billing">
                            <h4 class="title mb--40">Billing details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" id="first_name" value="{{ auth('customer')->user()->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" id="last_name" placeholder="Last Name" value="{{ auth('customer')->user()->last_name ?? null}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" id="company-name">
                            </div>
                           
                            <div class="form-group">
                                <label>Street Address <span>*</span></label>
                                <input name="address" type="text" id="address1" class="mb--15" placeholder="House number and street name">
                                <input name="secondary_address" type="text" id="address2" placeholder="Apartment, suite, unit, etc. (optonal)">
                            </div>
                            <div class="form-group">
                                <label>Town/ City <span>*</span></label>
                                <input type="text" id="town">
                            </div>
                            
                            <div class="form-group">
                                <label>Phone <span>*</span></label>
                                <input type="tel" id="phone" value="{{ auth('customer')->user()->phone ?? null}}">
                            </div>
                            <div class="form-group">
                                <label>Email Address <span>*</span></label>
                                <input type="email" id="email" value="{{ auth('customer')->user()->email ?? null}}">
                            </div>
                            <div class="form-group input-group">
                                <input type="checkbox" id="checkbox1" name="account-create">
                                <label for="checkbox1">Create an account</label>
                            </div>
                            <div class="form-group different-shippng">
                                <div class="toggle-bar">
                                    <a href="javascript:void(0)" class="toggle-btn">
                                        <input type="checkbox" id="checkbox2" name="diffrent-ship">
                                        <label for="checkbox2">Ship to a different address?</label>
                                    </a>
                                </div>
                                <div class="toggle-open">
                                    <div class="form-group">
                                        <label>Country/ Region <span>*</span></label>
                                        <select id="Region">
                                            <option value="3">Australia</option>
                                            <option value="4">England</option>
                                            <option value="6">New Zealand</option>
                                            <option value="5">Switzerland</option>
                                            <option value="1">United Kindom (UK)</option>
                                            <option value="2">United States (USA)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Street Address <span>*</span></label>
                                        <input type="text" id="address1" class="mb--15" placeholder="House number and street name">
                                        <input type="text" id="address2" placeholder="Apartment, suite, unit, etc. (optonal)">
                                    </div>
                                    <div class="form-group">
                                        <label>Town/ City <span>*</span></label>
                                        <input type="text" id="town">
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" id="country">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone <span>*</span></label>
                                        <input type="tel" id="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Other Notes (optional)</label>
                                <textarea id="notes" rows="2" placeholder="Notes about your order, e.g. speacial notes for delivery."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="axil-order-summery order-checkout-summery">
                            <h5 class="title mb--20">Your Order</h5>
                            <div class="summery-table-wrap">
                                <table class="table summery-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0
                                        @endphp
                                        @foreach ($carts as $cart)
                                            
                                        <tr class="order-product">
                                            <td>{{ $cart->product->title }} <span class="quantity">x{{ $cart->qty }} </span></td>
                                            <td>{{ $cart->qty* ($cart->product->selling_price ?? $cart->product->price) }} Tk</td>
                                        </tr>

                                        @php
                                            $total += $cart->qty* ($cart->product->selling_price ?? $cart->product->price)
                                        @endphp
                                        @endforeach
                                        
                                        
                                        <tr class="order-total">
                                            <td>Total</td>
                                            <td class="order-total-amount">
                                                {{$total}} Tk
                                                <input type="hidden" name="amount" id="totalAmount" value="{{ $total }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="order-payment-method">
                                <div class="single-payment">
                                    <div class="input-group">
                                        <input type="radio" id="radio4" name="payment" value="bank">
                                        <label for="radio4">Direct bank transfer</label>
                                    </div>
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                </div>
                                <div class="single-payment">
                                    <div class="input-group">
                                        <input type="radio" id="radio5" name="payment" value="cash">
                                        <label for="radio5">Cash on delivery</label>
                                    </div>
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                                <div class="single-payment">
                                    <div class="input-group justify-content-between align-items-center">
                                        <input type="radio" id="radio6" name="payment" checked value="ssl">
                                        <label for="radio6">SSL Ecommerz</label>
                                        <img src="assets/images/others/payment.png" alt="Payment SSL Ecommerz">
                                    </div>
                                    <p>Pay via SSL Ecommerz; you can pay with your credit card if you don’t have a PayPal account.</p>
                                </div>
                            </div>
                            <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</button>
                            <button style="display: none" id="sslczPayBtn"
                                    token="if you have any token validation"
                                    postdata=""
                                    order="If you already have the transaction generated for current order"
                                    endpoint="/pay-via-ajax"> Pay Now
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Checkout Area  -->
  
</main>

   @push('customJs')
   <script>
        
        $('input[name="payment"]').change(function(){
            if($(this).val() == 'ssl'){
                $('.checkout-btn').hide()
                $('#sslczPayBtn').show()
            }else{
                $('.checkout-btn').show()
                $('#sslczPayBtn').hide()
            }
        })


    $('#sslczPayBtn').click(function(){
        var obj = {};
        obj.fname = $('#first_name').val();
        obj.lname = $('#last_name').val();
        obj.company = $('#company_name').val();
        obj.address = $('#address1').val();
        obj.address2 = $('#address2').val();
        obj.town = $('#town').val();
        obj.phone = $('#phone').val();
        obj.cus_email = $('#email').val();
        obj.amount = $('#totalAmount').val();
        obj.total_qty = {{ $carts->sum('qty') }}
        
        $('#sslczPayBtn').prop('postdata', obj);
    })


        var obj = {};
        obj.fname = $('#first_name').val();
        obj.lname = $('#last_name').val();
        obj.company = $('#company_name').val();
        obj.address = $('#address1').val();
        obj.address2 = $('#address2').val();
        obj.town = $('#town').val();
        obj.phone = $('#phone').val();
        obj.cus_email = $('#email').val();
        obj.amount = $('#totalAmount').val();
        obj.total_qty = {{ $carts->sum('qty') }}

        
        $('#sslczPayBtn').prop('postdata', obj);
        

        (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);


   </script>
   @endpush

@endsection