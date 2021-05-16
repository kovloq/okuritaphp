@extends('layouts.app')

@section('content')
<div class="page page--contact bg-light-green bg-leaf">
    <section class="contact pt-5">
        <div class="container">
            <form method="post" action="{{ url("contact") }}">
				@csrf
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="section-title">
                                    <h3>Contact Us</h3>
                                    <p>We will reply your message soon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection