@extends('layouts.app')

@section('content')
<div class="page page--account bg-light-green">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 col-md-9">
                <section class="account-detail pt-5">
                    <h1 class="mb-2">Password</h1>
                	<div class="card mb-0">
                        <div class="card-body p-4">
                            
                            <form method="POST" action="{{ url("mypage/password",Auth::id()) }}">
                                @csrf
                                {{ method_field("PUT") }}
                                <div class="row justify-content-center pt-3">
                                    <div class="col-lg-10">
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Current Password</label>
                                            <div class="col-md-9">
                                              <input type="text" name="current_password" class="form-control @error("current_password") is-invalid @enderror" id="userId">
                                              @error("current_password")
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Password</label>
                                            <div class="col-md-9">
                                              <input type="text" name="password" class="form-control @error("password") is-invalid @enderror" id="userId">
                                              @error("password")
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Password Confirmation</label>
                                            <div class="col-md-9">
                                              <input type="text" name="password_confirmation" class="form-control @error("password_confirmation") is-invalid @enderror" id="userId">
                                              @error("password_confirmation")
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection