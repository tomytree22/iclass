<?php

namespace App\Repositories;

use App\Models\Alumno;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlumnoRepository
 * @package App\Repositories
 * @version November 10, 2017, 5:48 am UTC
 *
 * @method Alumno findWithoutFail($id, $columns = ['*'])
 * @method Alumno find($id, $columns = ['*'])
 * @method Alumno first($columns = ['*'])
*/
class AlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alumno::class;
    }
}
