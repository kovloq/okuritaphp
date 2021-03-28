@extends('layouts.app')

@section('content')
<div class="page page--account bg-light-green">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 col-md-9">
                <section class="account-detail pt-5">
                    <h1 class="mb-2">My Profile</h1>
                	<div class="card mb-0">
                        <div class="card-body p-4">
                            <form>
                                <div class="row justify-content-center pt-3">
                                    <div class="col-lg-10">
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                              <input type="email" name="email" value="{{ $user["email"] }}" class="form-control" id="userId">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">Country</label>
                                            <div class="col-md-9">
                                            	<select name="country_id" class="form-control">
                                            		@foreach($country as $row)
                                            		<option value="{{ $row["id"] }}">{{ $row["name"] }}</option>
                                            		@endforeach
                                            	</select>
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