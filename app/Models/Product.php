<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protect guarded digunakan untuk bisa menginputkan data 
    protected $guarded = [];
}
