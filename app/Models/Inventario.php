<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inventario
 * @package App\Models
 * @version February 24, 2023, 4:38 pm UTC
 *
 * @property \App\Models\Proveedor $pro
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property integer $pro_id
 * @property string $inv_fecha
 * @property string $inv_documento
 * @property integer $inv_estado
 */
class Inventario extends Model
{

    use HasFactory;

    public $table = 'inventario';
    protected $primaryKey="inv_id";
    public $timestamps=false;

    public $fillable = [
        'pro_id',
        'inv_fecha',
        'inv_documento',
        'inv_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'inv_id' => 'integer',
        'pro_id' => 'integer',
        'inv_fecha' => 'date',
        'inv_documento' => 'string',
        'inv_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pro_id' => 'required',
        'inv_fecha' => 'required',
        'inv_documento' => 'required|string|max:255',
        'inv_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pro()
    {
        return $this->belongsTo(\App\Models\Proveedor::class, 'pro_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vehiculos()
    {
        return $this->belongsToMany(\App\Models\Vehiculo::class, 'inventario_detalle');
    }
}
