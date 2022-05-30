<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 *
 * @property $id
 * @property $nombre
 * @property $apellidoP
 * @property $apellidoM
 * @property $numTelefono
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Consulta[] $consultas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'apellidoP' => 'required',
		'apellidoM' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidoP','apellidoM','numTelefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consulta', 'paciente_id', 'id');
    }
    

}
