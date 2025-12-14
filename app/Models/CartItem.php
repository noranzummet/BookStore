<?php

namespace App\Models;
use App\Models\Cart;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
    'qty',
    'book_id',
    'cart_id',
    
    ];

     public function Cart()
{
    return $this->belongsTo(Cart::class);
}
     public function Book()
{
    return $this->belongsTo(Book::class);
}
}
