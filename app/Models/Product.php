<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'old_price',
        'discount',
        'installments',
        'image_url',
        'seller',
        'link',
        'shipping',
    ];

    protected $casts = [
        'price' => 'float',
        'old_price' => 'float',
        'discount' => 'integer',
    ];
}
