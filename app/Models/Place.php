<?php

namespace App\Models;

use App\Models\User;
use App\Models\Sector;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'available',
        'sector_id',
        'user_id',
        'start_time',
        'end_time',
        'total_price'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    public function sectors() {
        return $this->belongsTo(Sector::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function startTimeAttributes($value){
        return Carbon::parse($value)->format('d-m-Y H:i');
    }
}
