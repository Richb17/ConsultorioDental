<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pagos';
    protected $fillable = [
        'fechaPago',
        'xPagar',
        'pagoCompleto'
    ];
}