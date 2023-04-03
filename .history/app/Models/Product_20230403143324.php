<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Product extends Model
{
    use HasFactory;

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function category()
    {
        return $this->belongsTo(SecondaryCategory::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
