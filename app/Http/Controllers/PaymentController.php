<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Deposit;
use Auth;
use App\Models\Product;
use Goutte\Client;

class PaymentController extends Controller
{
    //
    public function index(){
        $cart=Cart::content();
        $total=Cart::total();
        $count=Cart::count();
        $total=str_replace(",","",$total);
        return view("payment.index")->with(array("cart"=>$cart,"total"=>$total,"count"=>$count));
    }

    function calculateOrderAmount(array $items): int {
      // Replace this constant with a calculation of the order's amount
      // Calculate the order total on the server to prevent
      // customers from directly manipulating the amount on the client
      return 1400;
    }

    public function stripe(){
        \Stripe\Stripe::setApiKey('sk_test_51Gx71OLvolGSGFQZI7dDQ3LeGRrhxmUmSXzALzlKnvE4QmB1F6UY82KFhtyKA0mMZWW9E9fybKCMKz2688YwiGH400GgfHvXmQ');
        try {
          // retrieve JSON from POST body
          $json_str = file_get_contents('php://input');
          $json_obj = json_decode($json_str);
          $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $this->calculateOrderAmount($json_obj->items),
            'currency' => 'usd',
          ]);
          $output = [
            'clientSecret' => $paymentIntent->client_secret,
          ];
          return response()->json($output);
        } catch (Error $e) {
          http_response_code(500);
          return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function paypal(){
        // Paypal client EIL_UrTM48fegQsZI4M2gbkrRLAkxK77ksmkDP39rYhEn-PTA-uLIaiOofOLlXkBXZoxo631DndCacfg
    }

    public function complete(){
        
        return view("payment.complete");
    }

    public function store(Request $request){
        $platform=$request->platform;
        $transaction_id=$request->transaction_id;
        Deposit::create(array(
            "platform"=>$platform,
            "user_id"=>Auth::id(),
            "amount"=>$request->amount,
            "transaction_id"=>$transaction_id,
            "status"=>1,
            "order_id"=>$request->order_id,
            "name"=>$request->name,
            "email"=>$request->email
        ));
    }
}
