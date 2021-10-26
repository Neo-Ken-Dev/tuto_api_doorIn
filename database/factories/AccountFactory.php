<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence(6, true),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'immeuble_id' => function() {
            return factory(App\Immeuble::class)->create()->id;
        },
    ];
});
