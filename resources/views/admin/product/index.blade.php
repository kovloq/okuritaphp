@extends('layouts.admin',array("title"=>"Product"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
              <h3>Product</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Product</li>
              </ol>
            </div>
		</div>
	</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 project-list">
      <div class="card">
        <div class="row">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <div class="text-right">
              <div class="form-group mb-0 mr-0"></div><a class="btn btn-primary" href="{{ url("admin/product/create") }}"> <i data-feather="plus-square"> </i>Create New Product</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if (session('success'))
    <div class="col-md-12">
      <div class="alert alert-success" role="alert">
        <p>{{ session('success') }}</p>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection