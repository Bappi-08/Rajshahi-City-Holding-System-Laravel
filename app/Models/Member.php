<?php

namespace App\Models;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;
    public function apartment ()
    {
        return $this->belongsTo(Apartment::class,'apartment_id');
    }
}
