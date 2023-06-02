<?php

namespace App\Repositories;

use App\Models\Salas;
use App\Repositories\BaseRepository;

/**
 * Class SalasRepository
 * @package App\Repositories
 * @version June 2, 2023, 3:50 pm UTC
*/

class SalasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cli_id',
        'sal_nombre',
        'sal_descripcion',
        'sal_piso',
        'sal_numsal',
        'sal_estado'
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
        return Salas::class;
    }
}
