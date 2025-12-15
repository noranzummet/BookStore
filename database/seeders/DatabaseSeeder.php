<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
   User::create([
            'name'=>'admin',
            'username'=>'admin',
            'type'=>'admin',
            'password'=>Hash::make('password')
        ]); 
}
