<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    // Mass Assignment: Permitir campos específicos
    protected $fillable = [
        'title',
        'description',
        'user_id', // Asegúrate de incluir esto si hay relación con usuarios
    ];

    // Relación con el modelo User (Muchos a Uno)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
