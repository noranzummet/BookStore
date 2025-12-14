<?php

namespace App\Models;

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
        return $this->hasMany(order::class);
    }

}
