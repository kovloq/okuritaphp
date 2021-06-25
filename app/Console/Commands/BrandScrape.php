<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\ProductCategory;
use Goutte\Client;

class BrandScrape extends Command
{
	/**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:brand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape brand fashion';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    	$product_category=ProductCategory::all();
    	foreach($product_category as $row){
    		$json=file_get_contents($row["url"]);
	        $arr=json_decode($json,true);
	        $items=$arr["result"]["items"];
	        foreach($items as $item){
		        $one=$item;
		        $price=$one["prices"]["base"]["value"];
		        $name=$one["name"];
		        $color=[];
		        $image_main="";
		        foreach($one["colors"] as $key=>$row2){
		            if($key==0){
		                $image_main=$row2["displayCode"];
		            }
		            $color[]=array(
		                "code"=>$row2["code"],
		                "name"=>strtolower(ucfirst($row2["name"]))
		            );
		        }
		        $size=[];
		        foreach($one["sizes"] as $row3){
		            $size[]=array(
		                "code"=>$row3["code"],
		                "name"=>strtolower(ucfirst($row3["name"]))
		            );
		        }
		        $image="";
		        if(isset($one["images"]["main"][$image_main])){
		            $main=$one["images"]["main"][$image_main];
		            $image=$main["image"];
		        }
		        $product_id=$one["productId"];
		        $url="https://www.uniqlo.com/jp/api/commerce/v5/ja/products?productIds=".$product_id;
		        $product=array(
		            "name"=>$name,
		            "variant"=>json_encode(array("color"=>$color,"size"=>$size)),
		            "url"=>$url,
		            "image"=>$image,
		            "product_category_id"=>$row["id"],
		            "category_id"=>$row["category_id"],
		            "brand_id"=>$row["brand_id"],
		            "price"=>$price
		        );
		        Product::create($product);
		    }
    	}
    }
}
?>