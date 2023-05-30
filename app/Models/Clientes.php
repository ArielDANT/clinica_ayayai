<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Clientes
 * @package App\Models
 * @version January 24, 2023, 4:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $empleados
 * @property string $cli_nombres
 * @property string $cli_apellidos
 * @property string $cli_cedula
 * @property string $cli_direccion
 * @property string $cli_celular
 * @property integer $cli_estado
 */
class Clientes extends Model
{

    use HasFactory;

    public $table = 'clientes';
    protected $primaryKey="cli_id";
    public $timestamps=false;



    public $fillable = [
        'cli_nombres',
        'cli_apellidos',
        'cli_cedula',
        'cli_direccion',
        'cli_celular',
        'cli_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cli_id' => 'integer',
        'cli_nombres' => 'string',
        'cli_apellidos' => 'string',
        'cli_cedula' => 'string',
        'cli_direccion' => 'string',
        'cli_celular' => 'string',
        'cli_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_nombres' => 'required|string|max:255',
        'cli_apellidos' => 'required|string|max:255',
        'cli_cedula' => 'required|string|max:255',
        'cli_direccion' => 'required|string|max:255',
        'cli_celular' => 'required|string|max:255',
        'cli_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function empleados()
    {
        return $this->belongsToMany(\App\Models\Empleado::class, 'facturas');
    }
}
