<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
    'name',
    
    ];

    public function Order()
    {
        return $this->HasMany(Order::class);
    }
    
    

}
