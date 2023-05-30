<?php

namespace App\Repositories;

use App\Models\Proveedor;
use App\Repositories\BaseRepository;

/**
 * Class ProveedorRepository
 * @package App\Repositories
 * @version January 25, 2023, 3:50 pm UTC
*/

class ProveedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pro_nombre',
        'pro_direccion',
        'pro_telefono',
        'pro_correo',
        'pro_cedula',
        'pro_descripcion',
        'pro_estado'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proveedor::class;
    }
}
