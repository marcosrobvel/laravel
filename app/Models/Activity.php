<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'datetime',
        'paid',
        'notes',
        'satisfaction',
        'user_id',
    ];

    protected $casts = [
        'datetime' => 'datetime',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
