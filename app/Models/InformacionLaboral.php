<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionLaboral extends Model
{
    use HasFactory;
    protected $fillable = [
    'fecha_inicio',
    'fecha_fin',
    'motivacion',
    'nro_informe',
    'trabajador_id',
    'servicio_id',
    'cargo_id',
    'tipos_regimen_id']; 
}

    
        