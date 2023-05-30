<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioDetalle extends Model
{
    use HasFactory;

    public $table = 'inventario_detalle';
    protected $primaryKey="ivd_id";
    public $timestamps=false;

     public $fillable = [
        'inv_id',
        'veh_id',
        'ivd_cantidad',
        'ivd_vu',
        'ivd_estado'
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ivd_id' => 'integer',
        'veh_id' => 'integer',
        'ivd_cantidad' => 'integer',
        'ivd_vu' => 'float',
        'ivd_estado' => 'string'
    ];
}
