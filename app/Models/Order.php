<?php

namespace App\Models;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'price',
    'book_id',
    'order_id',
    'qty',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function OrderItem()
    {
        return $this->HasMany(OrderItem::class);
    }
}
