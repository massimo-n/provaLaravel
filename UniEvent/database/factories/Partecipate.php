<?php

use Faker\Generator as Faker;


$factory->define(App\Partecipate::class, function (Faker $faker) {
    return [
        'datePrenotation'=>$faker->date('Y-m-d'),
        'voteReview'=>$faker->numberBetween(0,5),
        'descriptionReview'=>$faker->text(30),
    ];
});

