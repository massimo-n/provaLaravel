<?php

use Faker\Generator as Faker;

$factory->define(App\UserPreference::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'description'=>$faker->realText(100,2),

    ];
});
