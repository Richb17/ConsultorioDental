<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tratamiento
 *
 * @property $id
 * @property $procedimiento
 * @property $costoSugerido
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Consulta[] $consultas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamiento extends Model
{
    use SoftDeletes;

    static $rules = [
		'procedimiento' => 'required',
		'costoSugerido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['procedimiento','costoSugerido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consulta', 'procedimiento_id', 'id');
    }
    

}
