<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_completo',
        'cedula',
        'fecha_nac',
        'tipo_sangre',
        'correo',
        'direccion',
        'estado_civil',
        'nacionalidad',
        'num_hijos',
        'telefono',
        'cv',
        'foto',
        'activo',
    ];
    
    
    
}
