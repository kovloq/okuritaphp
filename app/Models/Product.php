<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'variant',
        "category_id",
        'product_category_id',
        'brand_id',
        "description",
        "price"
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function product_category(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
