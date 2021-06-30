<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\car;
use Faker\Generator as Faker;

$factory->define(car::class, function (Faker $faker) {

    return [
        'IDCAT' => $faker->randomDigitNotNull,
        'IDBRAND' => $faker->randomDigitNotNull,
        'CARNAME' => $faker->word,
        'CARSEAT' => $faker->randomDigitNotNull,
        'CARCOLOR' => $faker->word,
        'CARFUEL' => $faker->word,
        'CARNUMBER' => $faker->word,
        'CARCYLINDER' => $faker->word,
        'CARFEATURE' => $faker->word,
        'CARYEAR' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
