<?php

namespace App\Repositories;

use App\Models\categori;
use App\Repositories\BaseRepository;

/**
 * Class categoriRepository
 * @package App\Repositories
 * @version June 2, 2021, 7:32 am UTC
*/

class categoriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CATNAME'
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
        return categori::class;
    }
}
