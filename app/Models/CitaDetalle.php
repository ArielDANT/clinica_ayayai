<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaDetalle extends Model
{
    use HasFactory;

    public $table = 'cita_detalle';
    protected $primaryKey="cid_id";
    public $timestamps=false;

     public $fillable = [
        'cit_id',
        'pac_id',
        'cid_obs',
        'cid_mot',
        'cid_estado'
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cit_id' => 'integer',
        'pac_id' => 'integer',
        'cid_obs' => 'string',
        'cid_mot' => 'string',
        'cid_estado' => 'string'
    ];
}
