<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models

class PrimaryCategories_table extends Model
{
    use HasFactory;

    public function secondary()
    {
        return $this->hasMany(SecondaryCategory::class);
    }
}
