<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
    'qty',
    'book_id',
    'cart_id',
    'price',
    
    ];
}
