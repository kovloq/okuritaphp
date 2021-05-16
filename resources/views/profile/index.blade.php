@extends('layouts.app')

@section('content')
<div class="page page--account bg-light-green">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 col-md-9">
                <section class="account-detail pt-5">
                    <h1 class="mb-2">Profile</h1>
                	<div class="card mb-0">
                        <div class="card-body p-4">
                            
                            <form method="POST" action="{{ url("mypage/profile",Auth::id()) }}">
                                @csrf
                                {{ method_field("PUT") }}
                                <div class="row justify-content-center pt-3">
                                    <div class="col-lg-10">
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Name</label>
                                            <div class="col-md-9">
                                              <input type="text" name="name" value="{{ $user["name"] }}" class="form-control @error("name") is-invalid @enderror" id="userId">
                                              @error("name")
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Country</label>
                                            <div class="col-md-9">
                                            	<select name="country_id" class="form-control @error("country_id") is-invalid @enderror">
                                                <option value="">-- Select Country --</option>
                                            		@foreach($country as $row)
                                            		<option value="{{ $row["id"] }}" {{ ($row["id"]==$user["country_id"])?"selected":"" }}>{{ $row["name"] }}</option>
                                            		@endforeach
                                            	</select>
                                                @error("country_id")
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="birthdate" class="col-md-3 col-form-label">Birthdate</label>
                                            <?php $date=$user["birthdate"];

                                            $ex=explode("-",$date);
                                            
                                            if($ex){
                                              $year=$ex[0];
                                                $month=$ex[1];$date=$ex[2];
                                              
                                            }else{
                                              $year=0;
                                              $month=0;$date=0;  
                                            }
                                            ?>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                      <select name="year" class="form-control @error("year") is-invalid @enderror">
                                                          <option value="">-- Year --</option>
                                                          @for($i=date("Y")-18;$i>=date("Y")-100;$i--)
                                                          <option value="{{ $i }}" {{ ($i==$year)?"selected":"" }}>{{ $i }}</option>
                                                          @endfor
                                                      </select>
                                                      @if($errors->first('year'))
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('year') }}</strong>
                                                      </span>
                                                      @endif
                                                    </div>
                                                <div class="col-md-4">
                                                    <select name="month" class="form-control @error("month") is-invalid @enderror">
                                                        <option value="">-- Month --</option>
                                                        @for($i=1;$i<=12;$i++)
                                                        <?php $disp=($i<10)?"0".$i:$i; ?>
                                                        <option value="{{ $disp }}" {{ ($disp==$month)?"selected":"" }}>{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    @if($errors->first('month'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('month') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="date" class="form-control @error("date") is-invalid @enderror">
                                                      <option value="">-- Date --</option>
                                                      @for($i=1;$i<=31;$i++)
                                                      <?php $disp=($i<10)?"0".$i:$i; ?>
                                                        <option value="{{ $disp }}" {{ ($disp==$date)?"selected":"" }}>{{ $i }}</option>
                                                      @endfor  
                                                    </select>
                                                    @if($errors->first('date'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('date') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="birthdate" class="col-md-3 col-form-label">Gender</label>
                                            <div class="col-md-9">
                                              <label class="form-check-label fw-normal mt-2"><input class="form-check-input" type="radio" name="gender" value="1" {{ ($user["gender"]==1 || empty($user["gender"]) )?"checked":"" }}>Male</label>&nbsp;&nbsp;
                                              <label class="form-check-label fw-normal mt-2"><input class="form-check-input" type="radio" name="gender" value="2" {{ ($user["gender"]==2)?"checked":"" }}>Female</label>
                                              @if($errors->first('gender'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('gender') }}</strong>
                                              </span>
                                              @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3 ">
                                            <label for="is_newsletter" class="col-md-3 col-form-label">Newsletter</label>
                                            <div class="form-check col-md-9 ">&nbsp;&nbsp;&nbsp;
                                              <input class="form-check-input"  type="checkbox" value="1" name="is_newsletter" id="is_newsletter" {{ ($user["is_newsletter"])?"checked":"" }}>
                                              <label class="form-check-label fw-normal" for="is_newsletter">
                                                Subscribe to our newsletter
                                              </label>
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