<?php

namespace App\Repositories;

use App\Models\Usuarios;
use App\Repositories\BaseRepository;

/**
 * Class UsuariosRepository
 * @package App\Repositories
 * @version January 26, 2023, 5:22 pm UTC
*/

class UsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'epl_id',
        'usu_usuario',
        'usu_perfil',
        'email_verified_at',
        'password',
        'remember_token'
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
        return Usuarios::class;
    }
}
