<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable=[
        "urldestino",
        "whatsapp",
        "nombre",
        "referencia",
        "cobrar",
        "descripcion",
        "foto",
        "cordenadax",
        "cordenaday",
    ];
}
