@extends('layouts.admin',array("title"=>"Brand"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
              <h3>Brand</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Brand</li>
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
              <div class="form-group mb-0 mr-0"></div><a class="btn btn-primary" href="{{ url("admin/brand/create") }}"> <i data-feather="plus-square"> </i>Create New Brand</a>
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
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">URL</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($brand as $row)
                <tr>
                  <td>{{ $row["id"] }}</td>
                  <td><a href="{{ url("admin/brand/".$row->id."/edit") }}">{{ $row["name"] }}</a></td>
                  <td>{{ $row["url"] }}</td>
                  <td>
                    <form class="delete" method="POST" action="{{ url("admin/brand",$row->id) }}">
                      {{ method_field("DELETE")  }}
                      @csrf
                      <input type="submit" value="Delete" class="btn btn-danger"/>
                  </form>
                  </td>
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
@endsection
