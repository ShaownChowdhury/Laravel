<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded= ['id'];
   
    function subcategories(){
        return $this->hasMany(Category::class,'category_id')->with('subcategories');
    }
    
    function products(){
        return $this->belongsToMany(Product::class);
    }
    
}
