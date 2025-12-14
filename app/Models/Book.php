<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Book extends Model
{
     protected $fillable = [
    'title',
    'price',
    'PublishYear',
    'password',
    'ISBN',
    'category_id',
    ];

    public function category()
{
    return $this->hasOne(Category::class);
}

 public function user()
    {
        $this->belongsToMany(User::class);
}
}