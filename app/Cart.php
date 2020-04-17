<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
