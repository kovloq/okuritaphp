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
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h5>Brand</h5>
        </div>
        <div class="card-block">
          <div class="table-responsive">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Variant</th>
                  <th scope="col">Category</th>
                  <th scope="col">Product Category</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                @foreach($product as $row)
                <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->variant }}</td>
                <td>{{ $row->category->name }}</td>
                <td>{{ $row->product_category->name }}</td>
                <td>{{ $row->brand->name }}</td>
                <td>{{ $row->price }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{ asset('uploads/product/D7iYD9XtssKRl22LElNFujnj4gWPKONVllHHBG5v.png') }}
@endsection