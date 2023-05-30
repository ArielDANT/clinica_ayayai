<?php

namespace App\Repositories;

use App\Models\Clinica;
use App\Repositories\BaseRepository;

/**
 * Class ClinicaRepository
 * @package App\Repositories
 * @version May 11, 2023, 3:12 am UTC
*/

class ClinicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cli_nombres',
        'cli_ruc',
        'cli_telefono',
        'cli_direccion',
        'cli_correo'
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
        return Clinica::class;
    }
}
