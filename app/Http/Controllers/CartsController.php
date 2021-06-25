<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $cart=Cart::content();
        $total=Cart::total();
        $count=Cart::count();
        $total=str_replace(",","",$total);
        return view("cart.index")->with(array("cart"=>$cart,"total"=>$total,"count"=>$count));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_id=$request->id;
        // ID,name,Quantity,Price
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product_id){
            return $cartItem->id === $product_id;
        });

        if ($duplicates->isNotEmpty()) {
            // return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        $cart=Cart::add($request->id, $request->name, $request->quantity, $request->price)
            ->associate('App\Models\Product');

        $count=Cart::count();
        return response()->json($count);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cart::remove($id);
        $count=Cart::count();
        return response()->json($count);
        // return back()->with('success_message', 'Item has been removed!');
    }
}
