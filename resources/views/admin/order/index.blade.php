@extends('layouts.admin',array("title"=>"Order"))

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-6">
              <h3>Order</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url("admin") }}"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Order</li>
              </ol>
            </div>
		</div>
	</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h5>Order</h5>
        </div>
        <div class="card-block">
          <div class="table-responsive">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">User</th>
                  <th scope="col">OrderNumber</th>
                  <th>Amount</th>
                  <th>Fee</th>
                  <th>Status</th>
                  
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $order_status=Config::get('constants.order_status');
                ?>
                @foreach($order as $row)
                <tr>
                  <td>{{ $row->user->name }}</td>
                  <td><a href="{{ url("admin/order",$row->id) }}">{{ $row["ordernumber"] }}</a></td>
                  <td>{{ number_format($row["amount"]) }}</td>
                  <td>{{ number_format($row["commission_fee"]) }}</td>
                  <td>{{ $order_status[$row["status_id"]] }}</td>
                  <td>
                    <form class="delete" action="{{ url("admin/order",$row->id) }}">
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