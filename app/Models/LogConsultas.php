<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogConsultas extends Model
{
    use HasFactory;
    
    protected $table = 'log_consultas';
    protected $fillable = [
        'idConsulta',
        'paciente_id0',
        'procedimiento_id0',
        'fechaProgramada0',
        'start0',
        'end0',
        'asistencia0',
        'paciente_idN',
        'procedimiento_idN',
        'fechaProgramadaN',
        'horarioProgramadoN',
        'startN',
        'endN',
        'asistenciaN',
    ];
}
