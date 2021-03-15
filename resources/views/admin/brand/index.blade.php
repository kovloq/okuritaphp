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
@endsection