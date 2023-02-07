<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $mascota_id
 * @property $documento_cliente
 * @property $nombre_cliente
 * @property $numero_celular
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Mascota $mascota
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'mascota_id' => 'required',
		'documento_cliente' => 'required',
		'nombre_cliente' => 'required',
		'numero_celular' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mascota_id','documento_cliente','nombre_cliente','numero_celular','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mascota()
    {
        return $this->hasOne('App\Mascota', 'id', 'mascota_id');
    }
    

}
