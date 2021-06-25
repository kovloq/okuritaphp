<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product=Product::paginate(30);
         return view("admin.product.index")->with(array(
            "product"=>$product
         ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::all();
        $brand=Brand::all();
        $productcategory=ProductCategory::all();
        return view("admin.product.create")->with(array(
            "category"=>$category,
            "brand"=>$brand,
            "productcategory"=>$productcategory
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->file('images'))
        $product=Product::create(array(
            "name"=>$request->name,
            "brand_id"=>$request->brand_id,
            "category_id"=>$request->category_id,
            "price"=>$request->price,
            "product_category_id"=>$request->product_category_id,
            "description"=>$request->description
        ));
        if($request->hasFile('images')){
            foreach($request->file('images') as $row){
                $path = $row->store('product');
                ProductImage::create(array(
                    "product_id"=>$product["id"],
                    "path"=>$path
                ));
            }
        }
        return redirect("admin/product");
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
        $category=Category::all();
        $productcategory=ProductCategory::all();
        $product=Product::find($id);
        return view("admin.product.edit")->with(array(
            "product"=>$product,
            "category"=>$category,
            "productcategory"=>$productcategory
        ));
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
        Product::find($id)->update(array(
            ""
        ));
        return redirect("admin/product");
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
        Product::find($id)->delete();
        return redirect()->back();
    }
}
