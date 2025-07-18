<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table="cart";
    private $primarykey="id";
    protected $fillable = [
        'user_id',      // Allow mass assignment for user_id
        'product_id',   // Allow mass assignment for product_id
        'quantity',     // Allow mass assignment for quantity
    ];

}

