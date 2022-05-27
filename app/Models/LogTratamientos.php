<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogTratamientos extends Model
{
    use HasFactory;

    protected $table = 'log_tratamientos';
    protected $fillable = [
        'idTratamientos',
        'procedimiento0', 
        'costoSugerido0',
        'procedimientoN', 
        'costoSugeridoN'
    ];
}
