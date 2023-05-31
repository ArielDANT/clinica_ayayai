<?php

namespace App\Repositories;

use App\Models\Pacientes;
use App\Repositories\BaseRepository;

/**
 * Class PacientesRepository
 * @package App\Repositories
 * @version May 31, 2023, 5:15 pm UTC
*/

class PacientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pac_nombres',
        'pac_apellidos',
        'pac_cedula',
        'pac_direccion',
        'pac_celular',
        'pac_sexo',
        'pac_correo',
        'pac_repre',
        'pac_estado'
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
        return Pacientes::class;
    }
}
