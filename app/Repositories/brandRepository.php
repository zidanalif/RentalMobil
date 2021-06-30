<?php

namespace App\Repositories;

use App\Models\brand;
use App\Repositories\BaseRepository;

/**
 * Class brandRepository
 * @package App\Repositories
 * @version June 2, 2021, 7:30 am UTC
*/

class brandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'BRANDNAME'
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
        return brand::class;
    }
}
