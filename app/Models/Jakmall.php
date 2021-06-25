<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jakmall extends Model
{
    use HasFactory;
    protected $fillable = ["url","sku","is_stock","price"];
}
