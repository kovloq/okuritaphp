@extends('layouts.admin',array("title"=>"User"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
        <h3>User</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item">User</li>
        </ol>
      </div>
		</div>
     <div class="row">
          <div class="col-sm-6">
            
          </div>
        <div class="col-sm-6">
          <div class="text-right">
            <div class="form-group mb-0 mr-0"></div><a class="btn btn-primary" href="{{ url("admin/user/create") }}"> <i data-feather="plus-square"> </i>Create New User</a>
          </div>
        </div>
      </div>
	</div>
</div>
<div class="container-fluid">
  <div class="card">
    <div class="card-header"><h5>User</h5>
    </div>
    <div class="card-block">
      <div class="table-responsive">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Country</th>
              <th scope="col">Birthdate</th>
              <th scope="col">Gender</th>
              <th scope="col">Is Newsletter</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user as $row)
            <tr>
              <td><a href="{{ url("admin/user/".$row->id."/edit") }}">{{ $row["name"] }}</a></td>
              <td>{{ $row["email"] }}</td>
              <td>{{ ($row->country)?$row->country->name:"-" }}</td>
              <td>{{ $row["birthdate"] }}</td>
              <td>{{ ($row["birthdate"])?"Male":"Female" }}</td>
              <td>{{ ($row["is_newsletter"])?"〇":"✕" }}</td>
              <td>
                <form class="delete" method="POST" action="{{ url("admin/user",$row->id) }}">
                  @csrf
                  {{ method_field("DELETE") }}
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
@endsection

