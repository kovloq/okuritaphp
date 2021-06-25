<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(Request $request,$cat){
        $category=array("men","women","kids","accessories");
        if(in_array($cat,$category)==false){
            abort(404);
        }
        $product=Product::all();
    	return view("product.index")->with(array("product"=>$product));
    }

    public function show($id){
        $product=Product::find($id);
    	return view("product.detail")->with(array("product"=>$product));	
    }
}
