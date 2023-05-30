<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vehiculos
 * @package App\Models
 * @version January 26, 2023, 4:06 pm UTC
 *
 * @property \App\Models\Empresa $emp
 * @property \Illuminate\Database\Eloquent\Collection $facturaDetalles
 * @property \Illuminate\Database\Eloquent\Collection $inventarios
 * @property integer $emp_id
 * @property string $veh_marca
 * @property string $veh_modelo
 * @property integer $veh_anio
 * @property string $veh_kilometraje
 * @property string $veh_subtipo
 * @property string $veh_color
 * @property integer $veh_estado
 */
class Vehiculos extends Model
{

    use HasFactory;

    public $table = 'vehiculos';
    protected $primaryKey="veh_id";
    public $timestamps=false;

    public $fillable = [
        'emp_id',
        'veh_marca',
        'veh_modelo',
        'veh_anio',
        'veh_kilometraje',
        'veh_subtipo',
        'veh_color',
        'veh_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'veh_id' => 'integer',
        'emp_id' => 'integer',
        'veh_marca' => 'string',
        'veh_modelo' => 'string',
        'veh_anio' => 'integer',
        'veh_kilometraje' => 'string',
        'veh_subtipo' => 'string',
        'veh_color' => 'string',
        'veh_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_id' => 'required',
        'veh_marca' => 'required|string|max:255',
        'veh_modelo' => 'required|string|max:255',
        'veh_anio' => 'required|integer',
        'veh_kilometraje' => 'required|string|max:255',
        'veh_subtipo' => 'required|string|max:255',
        'veh_color' => 'required|string|max:255',
        'veh_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function emp()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturaDetalles()
    {
        return $this->hasMany(\App\Models\FacturaDetalle::class, 'veh_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inventarios()
    {
        return $this->hasMany(\App\Models\Inventario::class, 'veh_id');
    }
}
