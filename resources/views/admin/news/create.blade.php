@extends('layouts.admin',array("title"=>"Create new News"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
        <h3>News</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item"><a href="{{ url("admin/news") }}">News</a></li>
          <li class="breadcrumb-item">Create News</li>
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
          <form class="form theme-form" enctype="multipart/form-data" method="POST" action="{{ url("admin/news") }}">
            @csrf
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Title</label>
                  <input class="form-control @error("title") is-invalid @enderror" type="text" value="{{ old("title") }}" name="title" placeholder="News Title"/>
                  @error("title")
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image"/>
                  @error("image")
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
                  <label>Content</label>
                  <textarea name="content" class="form-control">{{ old("content") }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group mb-0">
                  <input type="submit" class="btn btn-success mr-3" name="send" value="Add">
                  <a class="btn btn-danger" href="{{ url("admin/news") }}">Cancel</a>
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