<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "featured_img",
        "price",
        "selling_price",
        "sku",
        "brand",
        "stock",
        "status",
        "featured",
        "short_detail",
        "long_detail",
        "cross_sell"
    ] ;
    // protected $guarded = ["id"];

    function galleries(){
        return $this->hasMany(Gallery::class);
    }

    function categories(){
        return $this->belongsToMany(Category::class);
    }
}
