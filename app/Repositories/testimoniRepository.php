<?php

namespace App\Repositories;

use App\Models\Testimoni;
use App\Repositories\BaseRepository;

/**
 * Class TestimoniRepository
 * @package App\Repositories
 * @version June 2, 2021, 7:38 am UTC
*/

class TestimoniRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'IDCUST',
        'TESTIMONI',
        'STAR'
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
        return Testimoni::class;
    }
}
