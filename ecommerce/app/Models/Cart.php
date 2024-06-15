<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function product(){
        $this->belongsTo(Product::class);
    }
    function user(){
        $this->belongsTo(User::class);
    }
}
