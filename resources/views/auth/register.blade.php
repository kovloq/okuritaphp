@extends('layouts.app')

@section('content')
<div class="page">
    <section class="pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="section-title">
                            <h3>Register</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row justify-content-center pt-3">
                                <div class="col-lg-10">

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-3 col-form-label">{{ __('Name') }}</label>

                                        <div class="col-md-9">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-9">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>

                                        <div class="col-md-9">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            <div id="passwordHelp" class="form-text ">At least 8 characters</div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-3 col-form-label">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-9">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="country" class="col-md-3 col-form-label">Country</label>

                                        <div class="col-md-9">
                                            <select class="form-control" name="country_id" required>
                                                <option value="">Select a country</option>
                                                @foreach($country as $row)
                                                <option value="{{ $row->id }}" {{ (old("country_id")==$row->id)?"selected":"" }}>{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label">Birthdate</label>
                                        <div class="col-md-3">
                                            <select name="year" class="form-control @error("year") is-invalid @enderror">
                                              <option value="">-- Year --</option>
                                              @for($i=date("Y")-18;$i>=date("Y")-100;$i--)
                                              <option value="{{ $i }}" {{ ($i==old("year"))?"selected":"" }}>{{ $i }}</option>
                                              @endfor
                                            </select>
                                            @if($errors->first('year'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('year') }}</strong>
                                              </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <select name="month" class="form-control @error("month") is-invalid @enderror">
                                                <option value="">-- Month --</option>
                                                @for($i=1;$i<=12;$i++)
                                                <?php $disp=($i<10)?"0".$i:$i; ?>
                                                <option value="{{ $disp }}" {{ ($disp==old("month"))?"selected":"" }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @if($errors->first('month'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('month') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <select name="date" class="form-control @error("date") is-invalid @enderror">
                                              <option value="">-- Date --</option>
                                              @for($i=1;$i<=31;$i++)
                                              <?php $disp=($i<10)?"0".$i:$i; ?>
                                                <option value="{{ $disp }}" {{ ($disp==old("date"))?"selected":"" }}>{{ $i }}</option>
                                              @endfor  
                                            </select>
                                            @if($errors->first('date'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="birthdate" class="col-md-3 col-form-label">Gender</label>
                                            <div class="form-check col-md-9 ">
                                              <label class="form-check-label fw-normal mt-2 mx-3"><input class="form-check-input" type="radio" name="gender" value="1" {{ (old("gender")==1)?"checked":"" }}>Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              <label class="form-check-label fw-normal mt-2"><input class="form-check-input" type="radio" name="gender" value="2" {{ (old("gender")==2)?"checked":"" }}>Female</label>
                                              @if($errors->first('gender'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('gender') }}</strong>
                                              </span>
                                              @endif
                                            </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="is_newsletter" class="col-md-3 col-form-label">Newsletter</label>
                                        <div class="form-check col-md-9">&nbsp;&nbsp;&nbsp;
                                          <input class="form-check-input" type="checkbox" value="1" name="is_newsletter" id="is_newsletter" checked>
                                          <label class="form-check-label" for="is_newsletter">
                                            Subscribe to our newsletter
                                          </label>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-9 offset-md-5">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection
