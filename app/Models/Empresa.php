<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Empresa
 * @package App\Models
 * @version January 24, 2023, 4:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property string $emp_nombres
 * @property string $emp_ruc
 * @property string $emp_telefono
 * @property string $emp_direccion
 * @property string $emp_correo
 */
class Empresa extends Model
{

    use HasFactory;

    public $table = 'empresa';
    protected $primaryKey="emp_id";
    public $timestamps=false;

    public $fillable = [
        'emp_nombres',
        'emp_ruc',
        'emp_telefono',
        'emp_direccion',
        'emp_correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'emp_id' => 'integer',
        'emp_nombres' => 'string',
        'emp_ruc' => 'string',
        'emp_telefono' => 'string',
        'emp_direccion' => 'string',
        'emp_correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_nombres' => 'required|string|max:255',
        'emp_ruc' => 'required|string|max:255',
        'emp_telefono' => 'required|string|max:255',
        'emp_direccion' => 'required|string|max:255',
        'emp_correo' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'emp_id');
    }
}
