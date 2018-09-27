<?php

use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(10),
        'image'=>$faker->imageUrl(640,480),
        'description'=>$faker->text(30),
        'price'=>$faker->numberBetween(0,5000),
        'address'=>$faker->address,
        //'service_id'=>$faker->numberBetween(0,6),
        //'dateCreation'=>$faker->date('Y-m-d'),
        //'date'=>$faker->date('Y-m-d'),

        //
    ];
});
