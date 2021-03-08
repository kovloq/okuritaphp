@extends('layouts.app')
@section("head")
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<link href="{{ asset('css/slick.css') }}" rel="stylesheet"><!-- Bootstrap -->
<script>
$(document).ready(function(){    
    if($('.auth-slide').length){
        $('.auth-slide').slick({
            autoplay: true,
            infinite: true,
            slidesToShow: 1,
            dots: true,
            adaptiveHeight: true,
            arrows: false,
        });
    }
})
</script>
@endsection

@section('content')
<div class="page page--auth bg-light-green bg-leaf">
    <section class="auth">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-0">
                        <div class="col-lg-4">
                            <div class="auth-form">
                                <div class="auth-form__logo">
                                    <a href="{{ url("/") }}"><img src="{{ asset("img/logo/color.png") }}" alt="Okurita's Logo" /></a>
                                </div>
                                <div class="auth-form__title">
                                    <p>SHOPPING FROM JAPAN NOW</p>
                                    <h3>LOGIN TO YOUR ACCOUNT</h3>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="Password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase">
                                            Log In
                                        </button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-25px">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="rememberMe">
                                                        Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-grey btn-block btn-icon-center">
                                            <img src="{{ asset("img/auth/google.png") }}" alt="Log In With Google" /> Log In With Google
                                        </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-grey btn-block btn-icon-center">
                                            <img src="{{ asset("img/auth/facebook.png") }}" alt="Log In With Facebook" /> Log In With Facebook
                                        </button>
                                        </div>
                                    </div>
                                    
                                    <p class="mt-30px font-weight-700">Don’t have an account? <a href="#" class="text-primary">Sign Up</a></p>
                                </form>

                                <div class="auth-form__privacy">
                                    <p><a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="auth-slide">
                                <div class="auth-slide__item">
                                    <div class="auth-slide__item-img">
                                        <img src="{{ asset("img/auth/hero.png") }}" alt="Auth Slide" />
                                    </div>
                                </div>
                                <div class="auth-slide__item">
                                    <div class="auth-slide__item-img">
                                        <img src="{{ asset("img/auth/hero.png") }}" alt="Auth Slide" />
                                    </div>
                                </div>
                                <div class="auth-slide__item">
                                    <div class="auth-slide__item-img">
                                        <img src="{{ asset("img/auth/hero.png") }}" alt="Auth Slide" />
                                    </div>
                                </div>
                                <div class="auth-slide__item">
                                    <div class="auth-slide__item-img">
                                        <img src="{{ asset("img/auth/hero.png") }}" alt="Auth Slide" />
                                    </div>
                                </div>
                                <div class="auth-slide__item">
                                    <div class="auth-slide__item-img">
                                        <img src="{{ asset("img/auth/hero.png") }}" alt="Auth Slide" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
