<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    function hasOrder($productId) {
        return $this->hasManyThrough(OrderItem::class, Order::class)->where('product_id', $productId)
        ->exists();
    }
}
