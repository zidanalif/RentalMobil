<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\brand;
use Faker\Generator as Faker;

$factory->define(brand::class, function (Faker $faker) {

    return [
        'BRANDNAME' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
