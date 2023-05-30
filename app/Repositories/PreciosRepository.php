<?php

namespace App\Repositories;

use App\Models\Precios;
use App\Repositories\BaseRepository;

/**
 * Class PreciosRepository
 * @package App\Repositories
 * @version January 24, 2023, 4:26 pm UTC
*/

class PreciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pre_pvp',
        'pre_pvd'
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
        return Precios::class;
    }
}
