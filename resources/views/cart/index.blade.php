@extends('layouts.app')

@section("head")
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/iziToast.min.css") }}">
<script type="text/javascript" src="{{ asset("js/iziToast.min.js") }}"></script>
@endsection

@section('content')
	<div class="page page--cart bg-light-green bg-leaf">
        <section class="cart pt-5">
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                	<!-- Check if cart is not empty -->
                                	@if($count)
                                    <div class="row d-desktop">
                                        <div class="col-lg-5">
                                            <h6 class="cart-heading">Product</h6>
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <h6 class="cart-heading">Quantity</h6>
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <h6 class="cart-heading">Marketplace</h6>
                                        </div>
                                    </div>

                                    <!--Item-->
                                    @foreach($cart as $row)
                                    
                                    <div class="row cart__item gx-0 gx-lg-3">
                                        <div class="col-lg-5">
                                            <a href="product-detail.html" class="media">
                                                <div class="cart__item-img">
                                                    <img src="{{ asset("img/product/detail/main-1.png") }}" alt="Product 1" />
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="cart__item-title">{{ $row->name }}</h5>
                                                    <h6 class="cart__item-price">{{ number_format($row->price) }} Yen</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="cart__item-qty">
                                                <select name="qty" class="form-select">
                                                	@for($i=1;$i<=5;$i++)
                                                    <option value="{{ $i }}" {{ ($i==$row->qty)?"selected":"" }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="cart__item-marketplace">
                                                <img src="{{ asset("img/logo/marketplace/rakuten.png") }}" alt="Rakuten" />
                                            </div>
                                        </div>
                                        <div class="col-lg-auto col-md-4 ml-auto">
                                            <div class="cart__item-action">
                                                <!-- <button type="button" class="btn btn-outline-grey">
                                                    <i class="far fa-heart"></i>
                                                </button>-->
                                                <button type="button" data-id="{{ $row->rowId }}" class="btn btn-outline-danger delete_cart">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Item-->
                                    @endforeach
                                    @else
                                    <h2 class="text-center">Your cart is empty</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="card mb-15px">
                                <div class="card-body">
                                    <h6 class="cart-heading">Shipping</h6>
                                    <!--Item Shipping-->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shipping" id="shipping-1" value="Express" checked>
                                            <label class="form-check-label" for="shipping-1">
                                                Express Shopping
                                            </label>
                                        </div>
                                    </div>
                                    <!--End Item Shipping-->
                                </div>
                            </div>
                            @if($count)
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset("img/cart/payment.svg") }}" alt="Payment" class="w-100 mb-30px" />
                                    <div class="cart-total">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-6">
                                                <p>Total Price:</p>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-6">
                                                <p>￥ {{ number_format($total) }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-6">
                                                <p>Commission Fee:</p>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-6">
                                            	<?php 
                                            	$commission=commission($total);
                                            	?>
                                                <p>￥ {{ number_format($commission) }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-6">
                                                <h6>Total:</h6>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-6">
                                                <h6>￥ {{ number_format($commission+$total) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ url("payment") }}" class="btn btn-primary btn-block text-uppercase">Make Payment</a>
                                    </div>
                                    <div class="row cart-payment justify-content-between">
                                        <div class="col-auto">
                                            <img src="{{ asset("img/cart/payment/mastercard.png") }}" alt="MasterCard" />
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{ asset("img/cart/payment/visa.png") }}" alt="Visa" />
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{ asset("img/cart/payment/american-express.png") }}" alt="American Express" />
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{ asset("img/cart/payment/paypal.png") }}" alt="Paypal" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
<script type="text/javascript">
$(document).ready(function(){
	$(".delete_cart").click(function(){

		var $this=$(this);
		var r=confirm("Delete this cart?");
		if(r==true){
			var id=$(this).attr("data-id");

			$.ajax({
			    url: "{{ url("cart") }}/"+id,
			    type: 'DELETE',
			    data: { _token:"{{ csrf_token() }}"},
			    success: function(data){
			    	iziToast.warning({
		                title: 'Cart',
		                position:"center",
		                icon:"far fa-check-circle",
		                message: 'Product has been deleted',
		            });
		            $this.closest(".cart__item").remove();
		            $("#cart_count").text(data);
		            if(data==0){
		            	location.reload();
		            }
			    },
			    error: function(data){

			    }
			});
		}
	});

})
</script>
@endsection