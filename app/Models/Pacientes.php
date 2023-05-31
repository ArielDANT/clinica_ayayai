<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pacientes
 * @package App\Models
 * @version May 31, 2023, 5:15 pm UTC
 *
 * @property string $pac_nombres
 * @property string $pac_apellidos
 * @property string $pac_cedula
 * @property string $pac_direccion
 * @property string $pac_celular
 * @property string $pac_sexo
 * @property string $pac_correo
 * @property string $pac_repre
 * @property integer $pac_estado
 */
class Pacientes extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'pacientes';
    protected $primaryKey='pac_id';
    public $timestamps = false;

    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'pac_nombres',
        'pac_apellidos',
        'pac_cedula',
        'pac_direccion',
        'pac_celular',
        'pac_sexo',
        'pac_correo',
        'pac_repre',
        'pac_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pac_id' => 'integer',
        'pac_nombres' => 'string',
        'pac_apellidos' => 'string',
        'pac_cedula' => 'string',
        'pac_direccion' => 'string',
        'pac_celular' => 'string',
        'pac_sexo' => 'string',
        'pac_correo' => 'string',
        'pac_repre' => 'string',
        'pac_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pac_nombres' => 'required|string|max:255',
        'pac_apellidos' => 'required|string|max:255',
        'pac_cedula' => 'required|string|max:255',
        'pac_direccion' => 'required|string|max:255',
        'pac_celular' => 'required|string|max:255',
        'pac_sexo' => 'required|string|max:255',
        'pac_correo' => 'required|string|max:255',
        'pac_repre' => 'required|string|max:255',
        'pac_estado' => 'required|integer'
    ];

    
}
