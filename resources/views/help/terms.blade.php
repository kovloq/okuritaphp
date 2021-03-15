@extends('layouts.app')

@section('content')
<div class="page page--policy bg-light-green bg-ornament bg-ornament--sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <aside class="aside-policy pt-5">
                    <div class="list-group">
                        <a href="{{ url("help/privacy-policy") }}" class="list-group-item ">Privacy Policy</a>
                        <a href="{{ url("help/corporate-profile") }}" class="list-group-item">Corporate Profile</a>
                        <a href="{{ url("help/terms-of-service") }}" class="list-group-item active">Terms of Service</a>
                        <a href="{{ url("help/usage-fee") }}" class="list-group-item">Usage Fee</a>
                        <a href="{{ url("help/shipping-method") }}" class="list-group-item ">Shipping Method</a>
                        <a href="{{ url("help/payment-method") }}" class="list-group-item">Payment Method</a>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-9">
                <section class="policy pt-5">
                    <div class="card mb-0">
                        <div class="card-body perfect-scrollbar">
                            <h3 class="policy-title">Okurita Terms of Service</h3>
                            <p class="policy-date">Last Update [10/10/2020]</p>

                            <h6 class="policy-subtitle" id="introduction">INTRODUCTION</h6>
                            

                            <h6 class="policy-subtitle" id="collection-information">COLLECTION OF YOUR INFORMATION</h6>
                            <p>Okurita Terms of Service</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection