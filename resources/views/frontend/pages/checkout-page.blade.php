@extends('frontend.layouts.master')

@section('content')
<section class="wsus__breadcrumb" style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
    <div class="wsus__breadcrumb_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="wsus__breadcrumb_text">
                        <h1>Checkout</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment pt_95 xs_pt_75 pb_120 xs_pb_100">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="wsus__breadcrumb_text">
                    <h4>Choose Payment Method</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-7 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="payment_area">
                    <div class="row">
                        <div class="col-xl-3 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('paypal.payment') }}" class="payment_mathod">
                                <img style="max-width: 100% !important;" src="{{ asset('default-files/paypal-logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="col-xl-3 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('stripe.payment') }}" class="payment_mathod">
                                <img src="{{ asset('default-files/stripe-logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="col-xl-3 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('razorpay.redirect') }}" class="payment_mathod">
                                <img src="{{ asset('default-files/razorpay-logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="col-xl-5 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('midtrans.redirect') }}" class="payment_mathod">
                                <img style="max-width: 100% !important;" src="{{ asset('default-files/midtrans_logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="total_payment_price">
                    <h4>Total Cart <span>(0{{ cartCount() }})</span></h4>
                    <ul>
                        <li>Subtotal :<span>${{ cartTotal() }}</span></li>
                    </ul>
                    {{-- <a href="#" class="common_btn">now payment</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
