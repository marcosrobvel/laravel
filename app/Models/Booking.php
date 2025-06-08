<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'guest', 'orderDate', 'checkIn', 'checkOut', 'special',
        'roomType', 'roomNumber', 'bookStatus', 'photo'
    ];

    protected $casts = [
        'photo' => 'array',
        'orderDate' => 'date',
        'checkIn' => 'date',
        'checkOut' => 'date',
    ];
}
