<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    protected $fillable = [
        'photo', 'date', 'customer', 'mail', 'phone', 'subject', 'comment', 'status'
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
