<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // protect guarded digunakan untuk bisa menginputkan data 
    protected $guarded = [];

    // public function cart()
    // {
    //     return $this->hasMany(Cart::class);
    // }

    
}
