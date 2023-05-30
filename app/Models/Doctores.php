<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Doctores
 * @package App\Models
 * @version May 12, 2023, 1:32 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $cita
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property string $doc_nombres
 * @property string $doc_apellidos
 * @property string $doc_cedula
 * @property string $doc_direccion
 * @property string $doc_correo
 * @property string $doc_sexo
 * @property string $doc_especialidad
 * @property integer $doc_estado
 */
class Doctores extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'doctores';
    protected $primaryKey="doc_id";
    public $timestamps = false;
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'doc_nombres',
        'doc_apellidos',
        'doc_cedula',
        'doc_direccion',
        'doc_correo',
        'doc_sexo',
        'doc_especialidad',
        'doc_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'doc_id' => 'integer',
        'doc_nombres' => 'string',
        'doc_apellidos' => 'string',
        'doc_cedula' => 'string',
        'doc_direccion' => 'string',
        'doc_correo' => 'string',
        'doc_sexo' => 'string',
        'doc_especialidad' => 'string',
        'doc_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doc_nombres' => 'required|string|max:255',
        'doc_apellidos' => 'required|string|max:255',
        'doc_cedula' => 'required|string|max:255',
        'doc_direccion' => 'required|string|max:255',
        'doc_correo' => 'required|string|max:255',
        'doc_sexo' => 'required|string|max:255',
        'doc_especialidad' => 'required|string|max:255',
        'doc_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cita()
    {
        return $this->hasMany(\App\Models\Citum::class, 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'doc_id');
    }
}
