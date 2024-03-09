<?php

namespace App\Models;

use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'hourly_price'
    ];

    public function places() {
        return $this->hasMany(Place::class);
    }
}
