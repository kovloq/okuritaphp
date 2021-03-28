@extends('layouts.app')

@section('content')
<div class="page page--account bg-light-green">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 col-md-9">
                <section class="account-detail pt-5">
                    <h1 class="mb-2">My Profile</h1>
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            <table class="table">
                                <tr>
                                    <th>Order Number</th><th>Quantity</th><th>Amount</th>
                                </tr>
                                @foreach($order as $row)
                                <tr>
                                    <td>{{ $row["ordernumber"] }}</td><td></td><td>{{ $row["amount"] }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection