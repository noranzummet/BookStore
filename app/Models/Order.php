<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'price',
    'book_id',
    'order_id',
    'qty',
    ];
}
