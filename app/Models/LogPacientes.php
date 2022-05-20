<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPacientes extends Model
{
    use HasFactory;
    
    protected $table = 'log_pacientes';
    protected $fillable = [
        'idPaciente',
        'nombre0',
        'apellidoP0', 
        'apellidoM0',
        'numTelefono0',
        'nombreN',
        'apellidoPN', 
        'apellidoMN',
        'numTelefonoN',
    ];
}
