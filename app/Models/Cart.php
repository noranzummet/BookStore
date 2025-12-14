<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
    'address',
    'PaymentMethod_id',
    'user_id',
    'password',
    ];

     public function user()
{
    return $this->belongsTo(User::class);
}

}
