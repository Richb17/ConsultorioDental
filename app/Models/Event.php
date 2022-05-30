<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class event extends Model
{
    use HasFactory;
    use SoftDeletes;

    static $rules = [
		'title' => 'required',
		'start' => 'required',
		'end' => 'required',
		'consultaId' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','start', 'end','consultaId'];

    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'consultaId');
    }

}
