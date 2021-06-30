<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\categori;
use Faker\Generator as Faker;

$factory->define(categori::class, function (Faker $faker) {

    return [
        'CATNAME' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
