<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Citas
 * @package App\Models
 * @version June 9, 2023, 5:00 pm UTC
 *
 * @property \App\Models\Sala $sal
 * @property \Illuminate\Database\Eloquent\Collection $pacientes
 * @property integer $sal_id
 * @property string $cit_fecha
 * @property string $cit_documento
 * @property integer $cit_estado
 */
class Citas extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'cita';
    protected $primaryKey="cit_id";
    public $timestamps = false;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'sal_id',
        'cit_fecha',
        'cit_documento',
        'cit_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cit_id' => 'integer',
        'sal_id' => 'integer',
        'cit_fecha' => 'date',
        'cit_documento' => 'string',
        'cit_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sal_id' => 'required',
        'cit_fecha' => 'required',
        'cit_documento' => 'required|string|max:255',
        'cit_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sal()
    {
        return $this->belongsTo(\App\Models\Sala::class, 'sal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function pacientes()
    {
        return $this->belongsToMany(\App\Models\Paciente::class, 'cita_detalle');
    }
}
