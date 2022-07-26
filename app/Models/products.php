<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{ protected $guarded = [];
    use HasFactory;

    public function getImageAttribute($value)
    {
        if ($value)
            return asset('storage/' . $value);
    }
}
