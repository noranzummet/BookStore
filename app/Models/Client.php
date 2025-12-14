<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     protected $fillable = [
    'username',
    'email',
    'phone',
    'password',
    'type',
];
   
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
}
