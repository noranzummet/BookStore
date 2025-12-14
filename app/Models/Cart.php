<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
    'address',
    'PaymentMethod_id',
    'user_id',
    'password',
    ];
}
