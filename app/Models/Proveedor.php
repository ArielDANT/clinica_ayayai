<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Proveedor
 * @package App\Models
 * @version January 25, 2023, 3:50 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $inventarios
 * @property string $pro_nombre
 * @property string $pro_direccion
 * @property integer $pro_telefono
 * @property string $pro_correo
 * @property integer $pro_cedula
 * @property string $pro_descripcion
 * @property integer $pro_estado
 */
class Proveedor extends Model
{

    use HasFactory;

    public $table = 'proveedor';
    protected $primaryKey="pro_id";
    public $timestamps=false;


    public $fillable = [
        'pro_nombre',
        'pro_direccion',
        'pro_telefono',
        'pro_correo',
        'pro_cedula',
        'pro_descripcion',
        'pro_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pro_id' => 'integer',
        'pro_nombre' => 'string',
        'pro_direccion' => 'string',
        'pro_telefono' => 'string',
        'pro_correo' => 'string',
        'pro_cedula' => 'string',
        'pro_descripcion' => 'string',
        'pro_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pro_nombre' => 'required|string|max:255',
        'pro_direccion' => 'required|string|max:255',
        'pro_telefono' => 'required|integer',
        'pro_correo' => 'required|string|max:255',
        'pro_cedula' => 'required|integer',
        'pro_descripcion' => 'required|string|max:255',
        'pro_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inventarios()
    {
        return $this->hasMany(\App\Models\Inventario::class, 'pro_id');
    }
}
