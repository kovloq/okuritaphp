@extends('layouts.app')

@section("head")
<!-- Stripe Payment -->
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://www.paypal.com/sdk/js?client-id={{ env("PAYPAL_SANDBOX_CLIENT") }}&currency=JPY&components=buttons"></script>
@endsection

@section('content')
<?php 
$total_pay=1;
?>
	<div class="page page--cart bg-light-green bg-leaf">
        <section class="cart pt-5">
            <div class="container">
                
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                	<h2>Payment Method</h2>
                                    <form method="POST">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="payment" id="credit_card">
                                          <label class="form-check-label" for="credit_card">Credit Card</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="payment" id="payment">
                                          <label class="form-check-label" for="payment">Paypal</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="payment" id="deposit">
                                          <label class="form-check-label" for="deposit">Deposit</label>
                                        </div>
                                        <div id="stripe">
                                            Stripe
                                            <form id="payment-form">
                                              <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                                              <button id="submit">
                                                <div class="spinner hidden" id="spinner"></div>
                                                <span id="button-text">Pay now</span>
                                              </button>
                                              <p id="card-error" role="alert"></p>
                                              <p class="result-message hidden">
                                                Payment succeeded, see the result in your
                                                <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
                                              </p>
                                            </form>
                                        </div>
                                        <div id="paypal">
                                            <div id="paypal-button-container"></div>
                                            <!-- Add the checkout buttons, set up the order and approve the order -->
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            
                            @if($count)
                            <div class="card">
                                <div class="card-body">
                                    <h2>Order Details</h2>
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
                                                <?php 
                                                $total_pay=$commission+$total;
                                                ?>
                                                <h6>￥ {{ number_format($total_pay) }}</h6>
                                            </div>
                                        </div>
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
                
                
            </div>
        </section>
    </div>
<script type="text/javascript">
// A reference to Stripe.js initialized with your real test publishable API key.
$(document).ready(function(){
var stripe = Stripe("pk_test_51Gx71OLvolGSGFQZ2DUf5dwwkaTu3JIoCMljGCBD9eKI9rJtZVl3lkJ2D09Timqyn5U7eIubcYjfCjzoK1ygXsNO00F1WF2ATO");
// The items the customer wants to buy
var purchase = {
  items: [{ id: "xl-tshirt" }],
  _token:"{{ csrf_token() }}"
};
// Disable the button until we have Stripe set up on the page
document.querySelector("button").disabled = true;
fetch("{{ url("payment/stripe") }}", {
  method: "POST",
  credentials: "same-origin",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify(purchase)
})
  .then(function(result) {
    return result.json();
  })
  .then(function(data) {
    var elements = stripe.elements();
    var style = {
      base: {
        color: "#32325d",
        fontFamily: 'Arial, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#32325d"
        }
      },
      invalid: {
        fontFamily: 'Arial, sans-serif',
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    };
    var card = elements.create("card", { style: style });
    // Stripe injects an iframe into the DOM
    card.mount("#card-element");
    card.on("change", function (event) {
      // Disable the Pay button if there are no card details in the Element
      document.querySelector("button").disabled = event.empty;
      document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
    });
    var form = document.getElementById("payment-form");
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      // Complete payment when the submit button is clicked
      payWithCard(stripe, card, data.clientSecret);
    });
  });
  // Calls stripe.confirmCardPayment
  // If the card requires authentication Stripe shows a pop-up modal to
  // prompt the user to enter authentication details without leaving your page.
 var payWithCard = function(stripe, card, clientSecret) {

  loading(true);
  stripe
    .confirmCardPayment(clientSecret, {
      payment_method: {
        card: card
      }
    })
    .then(function(result) {
      if (result.error) {
        // Show error to your customer
       showError(result.error.message);
      } else {
        // The payment succeeded!
       orderComplete(result.paymentIntent.id);
      }
    });
   };

    /* ------- UI helpers ------- */

    // Shows a success message when the payment is complete

    var orderComplete = function(paymentIntentId) {
      loading(false);
      document
        .querySelector(".result-message a")
        .setAttribute(
          "href",
          "https://dashboard.stripe.com/test/payments/" + paymentIntentId
        );
      document.querySelector(".result-message").classList.remove("hidden");
      document.querySelector("button").disabled = true;
    };

    // Show the customer the error from Stripe if their card fails to charge
    var showError = function(errorMsgText) {
      loading(false);
      var errorMsg = document.querySelector("#card-error");
      errorMsg.textContent = errorMsgText;
      setTimeout(function() {
        errorMsg.textContent = "";
      }, 4000);
    };

    // Show a spinner on payment submission

    var loading = function(isLoading) {
      if (isLoading) {
        // Disable the button and show a spinner
        document.querySelector("button").disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#button-text").classList.add("hidden");
      } else {
        document.querySelector("button").disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#button-text").classList.remove("hidden");
      }
    };
})
</script>
<script>
    var FUNDING_SOURCES = [
    paypal.FUNDING.PAYPAL,
    paypal.FUNDING.VENMO,
    paypal.FUNDING.CREDIT,
    paypal.FUNDING.CARD
];
  paypal.Buttons({
    fundingSource: paypal.FUNDING.PAYPAL,
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '{{ $total_pay }}'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
        // sandbox sb-c8zuc6604089@personal.example.com pass 12345678
      return actions.order.capture().then(function(details) {
        var status=details.status;
        if(status=="COMPLETED"){
            var transaction_id=details.id;
            var name=details.payer.name.given_name+" "+details.payer.name.surname;
            var email=details.payer.email_address;
            var amount="{{ $total_pay }}";
            var order_id=1;
            // Send Ajax to server
            $.ajax({
                url: "{{ url("payment") }}",
                type: 'POST',
                data: { _token:"{{ csrf_token() }}",platform:"paypal",name:name,transaction_id:transaction_id,email:email,order_id:order_id,amount:amount},
                success: function(data){
                    window.location.href="{{ url("payment/complete") }}";
                    // iziToast.warning({
                    //     title: 'Payment',
                    //     position:"center",
                    //     icon:"far fa-check-circle",
                    //     message: 'Payment has been completed',
                    // });
                },
                error: function(data){

                }
            });
            //
        }
      });
    }
  }).render('#paypal-button-container'); // Display payment options on your web page
</script>
@endsection