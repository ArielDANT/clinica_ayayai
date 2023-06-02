<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Salas
 * @package App\Models
 * @version June 2, 2023, 3:50 pm UTC
 *
 * @property \App\Models\Clinica $cli
 * @property \Illuminate\Database\Eloquent\Collection $cita
 * @property integer $cli_id
 * @property string $sal_nombre
 * @property string $sal_descripcion
 * @property string $sal_piso
 * @property string $sal_numsal
 * @property integer $sal_estado
 */
class Salas extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'salas';
    protected $primaryKey="sal_id";
    public $timestamps=false;
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'cli_id',
        'sal_nombre',
        'sal_descripcion',
        'sal_piso',
        'sal_numsal',
        'sal_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sal_id' => 'integer',
        'cli_id' => 'integer',
        'sal_nombre' => 'string',
        'sal_descripcion' => 'string',
        'sal_piso' => 'string',
        'sal_numsal' => 'string',
        'sal_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_id' => 'required',
        'sal_nombre' => 'required|string|max:255',
        'sal_descripcion' => 'required|string|max:255',
        'sal_piso' => 'required|string|max:255',
        'sal_numsal' => 'required|string|max:255',
        'sal_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cli()
    {
        return $this->belongsTo(\App\Models\Clinica::class, 'cli_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cita()
    {
        return $this->belongsToMany(\App\Models\Citum::class, 'cita_detalle');
    }
}
