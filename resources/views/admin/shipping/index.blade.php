@extends('layouts.admin',array("title"=>"Shipping"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
              <h3>Shipping</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Shipping</li>
              </ol>
            </div>
		</div>
	</div>
</div>
<div class="container-fluid">
  <div class="card">
    <div class="card-header"><h5>Table head options</h5>
    </div>
    <div class="card-block">
      <div class="table-responsive">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($shipping as $row)
            <tr>
              <td>{{ $row["name"] }}</td>
              <td>
                <form class="delete" action="{{ url("admin/shipping",$row->id) }}">
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
@endsection