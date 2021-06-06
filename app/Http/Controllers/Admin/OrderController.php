<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index(Request $request){
    	$order=Order::paginate(10);
        return view("admin.order.index")->with(array("order"=>$order));
	}

    public function show($id){
        $order=Order::find($id);
        return view("admin.order.show")->with(array("order"=>$order));
    }
}
