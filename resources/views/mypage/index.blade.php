@extends('layouts.app')

@section('content')

<div class="page page--account bg-light-green">
    <section class="account pt-5">
        <div class="container">
            <div class="section-title">
                <h3>My Page</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url("mypage/order") }}" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/order.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Your Orders</h4>
                                    <p class="mb-0">Track, return, or buy things again</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url("mypage/profile") }}" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/security.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Login & security</h4>
                                    <p class="mb-0">Edit login, name, and mobile number</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="my-page-detail.html" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/prime.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Prime</h4>
                                    <p class="mb-0">View benefits and payment settings</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="my-page-detail.html" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/gift.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Gift cards</h4>
                                    <p class="mb-0">View balance or redeem a card</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="my-page-detail.html" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/payment.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Your Payments</h4>
                                    <p class="mb-0">Manage payment methods and settings, view balances and offers</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url("mypage/shipping") }}" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/shipping.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Shipping Address</h4>
                                    <p class="mb-0">Get the most out of your Alexa-enabled devices</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="my-page-detail.html" class="card card-account">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card-icon">
                                        <img src="{{ asset("img/mypage/device.png") }}" alt="Account" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">Your devices and content</h4>
                                    <p class="mb-0">Manage your Amazon devices and digital content</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection