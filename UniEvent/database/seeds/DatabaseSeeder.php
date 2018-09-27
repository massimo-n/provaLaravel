<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \App\UserPreference::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\UserPreference::class, 50)->create();

        \App\User::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\User::class, 50)->create();

        \App\Partecipate::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\Partecipate::class, 50)->create();

        \App\Event::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\Event::class, 50)->create();

        \App\Service::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\Service::class, 50)->create();

        \App\Category::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\Category::class, 50)->create();


//        $event = \App\Event::find(1);
//
//        $service = new \App\Service(['name'=>'servizio','description'=>'ciao']);
//
//        $event->services()->save($service);
    }
}
