<?php

namespace App\Repositories;

use App\Models\Doctores;
use App\Repositories\BaseRepository;

/**
 * Class DoctoresRepository
 * @package App\Repositories
 * @version May 12, 2023, 1:32 am UTC
*/

class DoctoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Doctores::class;
    }
}
