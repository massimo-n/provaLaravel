<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(10),
        'description'=>$faker->text(30),
    ];
});
