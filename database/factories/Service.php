<?php

use Faker\Generator as Faker;

$factory->define(\App\Service::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(10),
        'description'=>$faker->text(30),

    ];
});
