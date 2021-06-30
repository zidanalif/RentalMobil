<?php

namespace App\Repositories;

use App\Models\customer;
use App\Repositories\BaseRepository;

/**
 * Class customerRepository
 * @package App\Repositories
 * @version June 2, 2021, 7:33 am UTC
*/

class customerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CUSTNAME',
        'CUSTADDR',
        'CUSTPHONE',
        'CUSTEMAIL',
        'CUSTIDENTITY',
        'CUSTBIRTH',
        'CUSTPICT',
        'CUSTGENDER',
        'CUSTCOMPANY'
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
        return customer::class;
    }
}
