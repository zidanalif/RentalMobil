<?php

namespace App\Repositories;

use App\Models\car;
use App\Repositories\BaseRepository;

/**
 * Class carRepository
 * @package App\Repositories
 * @version June 2, 2021, 7:31 am UTC
*/

class carRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'IDCAT',
        'IDBRAND',
        'CARNAME',
        'CARSEAT',
        'CARCOLOR',
        'CARFUEL',
        'CARNUMBER',
        'CARCYLINDER',
        'CARFEATURE',
        'CARYEAR'
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
        return car::class;
    }
}
