<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pacientes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pacientes';
    protected $fillable = [
        'nombre', 
        'apellidoP', 
        'apellidoM',
        'numTelefono'  
    ];
}
