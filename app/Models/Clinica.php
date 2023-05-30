<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Clinica
 * @package App\Models
 * @version May 11, 2023, 3:12 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $salas
 * @property string $cli_nombres
 * @property string $cli_ruc
 * @property string $cli_telefono
 * @property string $cli_direccion
 * @property string $cli_correo
 */
class Clinica extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'clinica';
    protected $primaryKey="cli_id";
    public $timestamps=false;    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'cli_nombres',
        'cli_ruc',
        'cli_telefono',
        'cli_direccion',
        'cli_correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cli_id' => 'integer',
        'cli_nombres' => 'string',
        'cli_ruc' => 'string',
        'cli_telefono' => 'string',
        'cli_direccion' => 'string',
        'cli_correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_nombres' => 'required|string|max:255',
        'cli_ruc' => 'required|string|max:255',
        'cli_telefono' => 'required|string|max:255',
        'cli_direccion' => 'required|string|max:255',
        'cli_correo' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function salas()
    {
        return $this->hasMany(\App\Models\Sala::class, 'cli_id');
    }
}
