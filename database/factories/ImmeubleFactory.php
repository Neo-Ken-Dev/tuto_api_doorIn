<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Immeuble;
use Faker\Generator as Faker;

$factory->define(Immeuble::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'name' => $faker->name,
        'code_im' => $faker->randomDigitNotNull,
        'code_soc' => $faker->randomDigitNotNull,
    ];
});
