@extends('layouts.admin',array("title"=>"Create new product"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
        <h3>Product</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item"><a href="{{ url("admin/product") }}">Product</a></li>
          <li class="breadcrumb-item">Create Product</li>
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
          <form class="form theme-form" enctype="multipart/form-data" method="POST" action="{{ url("admin/product") }}">
            @csrf
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control @error("name") is-invalid @enderror" type="text" value="{{ old("name") }}" name="name" placeholder="Uniqlo"/>
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
                  <label>Price</label>
                  <input class="form-control @error("price") is-invalid @enderror" type="text" value="{{ old("price") }}" name="price" placeholder="10000"/>
                  @error("price")
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
                  <label>Brand</label>
                  <select name="brand_id" class="form-control @error("brand_id") is-invalid @enderror">
                    @foreach($brand as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                  </select>
                  @error("brand_id")
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
                  <label>Category</label>
                  <select name="category_id" class="form-control @error("category_id") is-invalid @enderror">
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                  </select>
                  @error("category_id")
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
                  <label>Product Category</label>
                  <select name="product_category_id" class="form-control @error("product_category_id") is-invalid @enderror">
                    @foreach($productcategory as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                  </select>
                  @error("product_category_id")
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
                  <label>Description</label>
                  <textarea class="form-control @error("description") is-invalid @enderror" name="description">{{ old("description") }}</textarea>
                  @error("description")
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
                  <label>Product Image</label>
                  <input type="file" name="images[]" multiple/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group mb-0">
                  <input type="submit" class="btn btn-success mr-3" name="send" value="Add">
                  <a class="btn btn-danger" href="{{ url("admin/product") }}">Cancel</a>
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