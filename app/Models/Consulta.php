<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consulta
 *
 * @property $id
 * @property $paciente_id
 * @property $procedimiento_id
 * @property $fechaProgramada
 * @property $horarioProgramado
 * @property $asistencia
 * @property $fechaPago
 * @property $pagoCompleto
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @property Tratamiento $tratamiento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    use SoftDeletes;

    static $rules = [
		'paciente_id' => 'required',
		'procedimiento_id' => 'required',
		'fechaProgramada' => 'required',
		'horarioProgramado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paciente_id','procedimiento_id','fechaProgramada','horarioProgramado','asistencia','fechaPago','pagoCompleto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'paciente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tratamiento()
    {
        return $this->hasOne('App\Models\Tratamiento', 'id', 'procedimiento_id');
    }
    

}
