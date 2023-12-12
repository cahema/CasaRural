<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMAny;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'beds',
    ];

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }
}
