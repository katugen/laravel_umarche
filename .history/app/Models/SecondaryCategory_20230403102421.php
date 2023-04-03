<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\

class SecondaryCategory extends Model
{
    use HasFactory;

    public function primaryC()
    {
        return $this->belongsTo(PrimaryCategory::class);
    }
}
