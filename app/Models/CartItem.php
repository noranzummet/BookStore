<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
    'qty',
    'book_id',
    'cart_id',
    
    ];
}
