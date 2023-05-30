<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Usuarios
 * @package App\Models
 * @version January 26, 2023, 5:22 pm UTC
 *
 * @property \App\Models\Empleado $epl
 * @property \Illuminate\Database\Eloquent\Collection $inventarios
 * @property integer $epl_id
 * @property string $usu_usuario
 * @property string $usu_perfil
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class Usuarios extends Model
{

    use HasFactory;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const updated_AT = 'updated_at';

    
    public $fillable = [
        'epl_id',
        'usu_usuario',
        'usu_perfil',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'epl_id' => 'integer',
        'usu_usuario' => 'string',
        'usu_perfil' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'epl_id' => 'required',
        'usu_usuario' => 'required|string|max:255',
        'usu_perfil' => 'required|string|max:255',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function epl()
    {
        return $this->belongsTo(\App\Models\Empleado::class, 'epl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inventarios()
    {
        return $this->hasMany(\App\Models\Inventario::class, 'id');
    }
}
