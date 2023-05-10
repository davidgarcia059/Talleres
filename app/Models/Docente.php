<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['docuemnto_identidad', 'nombre', 'apellido', 'telefono'];
}
