<?php

namespace App\Models;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
    'username',
    'country',
    'bio',
    'password',
    'type',

];
     public function book()
    {
        return $this->hasMany(Book::class);
    }
}
