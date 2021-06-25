@extends('layouts.app')

@section('content')
<div class="page page--contact bg-light-green bg-leaf">
    <section class="contact pt-5">
        <div class="container">
				@csrf
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="section-title">
                                    <h1>Contact Us</h1>
                                    <p>Payment Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
</div>
@endsection