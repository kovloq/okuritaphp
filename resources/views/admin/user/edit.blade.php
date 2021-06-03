@extends('layouts.admin',array("title"=>"Create new user"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
        <h3>User</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item"><a href="{{ url("admin/user") }}">User</a></li>
          <li class="breadcrumb-item">Edit User</li>
        </ol>
      </div>
		</div>
	</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form class="form theme-form" method="POST" action="{{ url("admin/user",$user->id) }}">
            @csrf
            {{ method_field("PUT") }}
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control @error("name") is-invalid @enderror" type="text" value="{{ old("name",$user["name"]) }}" name="name" placeholder="Uniqlo"/>
                  @error("name")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control @error("email") is-invalid @enderror" type="text" value="{{ old("name",$user["email"]) }}" name="email" placeholder="Uniqlo"/>
                  @error("email")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Country</label>
                  <select name="country_id" class="form-control">
                    @foreach($country as $row)
                    <?php $select=($row["id"]==$user["country_id"])?"selected":"" ?>
                    <option value="{{ $row["id"] }}" {{ $select }}>{{ $row["name"] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="birthdate">Birthdate</label>
                    <?php $date=$user["birthdate"];
                    $ex=explode("-",$date);
                    if($ex && $date){
                      $year=$ex[0];
                        $month=$ex[1];$date=$ex[2];
                      
                    }else{
                      $year=0;
                      $month=0;$date=0;  
                    }
                    ?>
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
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="gender">Gender</label><br/>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label fw-normal mt-2"><input class="form-check-input" type="radio" name="gender" value="1" {{ ($user["gender"]==1 || empty($user["gender"]) )?"checked":"" }}>Male</label>&nbsp;&nbsp;
                      <label class="form-check-label fw-normal mt-2"><input class="form-check-input" type="radio" name="gender" value="2" {{ ($user["gender"]==2)?"checked":"" }}>Female</label>
                      @if($errors->first('gender'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('gender') }}</strong>
                      </span>
                      @endif
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="is_newsletter">Newsletter</label><br/>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="checkbox" value="1" name="is_newsletter" id="is_newsletter" {{ ($user["is_newsletter"])?"checked":"" }}>
                    <label class="form-check-label fw-normal" for="is_newsletter">
                      Subscribe to our newsletter
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group mb-0">
                  <input type="submit" class="btn btn-success mr-3" name="send" value="Edit">
                  <a class="btn btn-danger" href="{{ url("admin/user") }}">Cancel</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection