<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = [
        'photo', 'roomNumber', 'roomType', 'amenities', 'price', 'offer_price', 'status'
    ];

    protected $casts = [
        'photo' => 'array',
    ];
}
