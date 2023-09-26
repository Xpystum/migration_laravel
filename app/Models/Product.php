<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_product', 'order_id', 'product_id');
    }
}
