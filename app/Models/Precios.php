<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Precios
 * @package App\Models
 * @version January 24, 2023, 4:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $facturaDetalles
 * @property number $pre_pvp
 * @property number $pre_pvd
 */
class Precios extends Model
{

    use HasFactory;

    public $table = 'precios';
    protected $primaryKey="pre_id";
    public $timestamps=false;
    
    public $fillable = [
        'pre_pvp',
        'pre_pvd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pre_id' => 'integer',
        'pre_pvp' => 'decimal:2',
        'pre_pvd' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pre_pvp' => 'nullable|numeric',
        'pre_pvd' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturaDetalles()
    {
        return $this->hasMany(\App\Models\FacturaDetalle::class, 'pre_id');
    }
}
