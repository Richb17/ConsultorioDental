<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPagos extends Model
{
    use HasFactory;
    
    protected $table = 'log_pagos';
    protected $fillable = [
        'idPago',
        'consulta_id0',
        'fechaPago0',
        'xPagar0',
        'pagoCompleto0',
        'consulta_idN',
        'fechaPagoN',
        'xPagarN',
        'pagoCompletoN'
    ];
}
