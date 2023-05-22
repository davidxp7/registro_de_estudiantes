<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'nacionalidad',
        'identificacion_tipo',
        'direccion',
        'telefono',
        'email',
        'institucion_anterior',
        'carrera_id',
        'documento_identidad',
        'forma_pago',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
