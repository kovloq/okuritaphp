@extends('layouts.admin',array("title"=>"Order Detail"))

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h5>{{ $order["ordernumber"] }}</h5>
        </div>
        <div class="card-block">
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection