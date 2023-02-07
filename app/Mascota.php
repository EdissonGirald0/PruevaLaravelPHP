<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $id
 * @property $nombre_mascota
 * @property $tipo_id
 *
 * @property Cliente[] $clientes
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    
    static $rules = [
		'nombre_mascota' => 'required',
		'tipo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_mascota','tipo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Cliente', 'mascota_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Tipo', 'id', 'tipo_id');
    }
    

}
