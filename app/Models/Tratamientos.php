<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamientos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tratamientos';
    protected $fillable = [
        'procedimiento',
        'costoSugerido'
    ];
}
