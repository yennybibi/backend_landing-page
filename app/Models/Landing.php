<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Landing
 *
 * @property $id
 * @property $fecha_hora
 * @property $nombre
 * @property $apellido
 * @property $cedula
 * @property $departamento
 * @property $ciudad
 * @property $celular
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Landing extends Model
{
    
    static $rules = [
		'fecha'=> 'required',
		'hora' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'cedula' => 'required',
		'departamento' => 'required',
		'ciudad' => 'required',
		'celular' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_hora','nombre','apellido','cedula','departamento','ciudad','celular','email'];



}
