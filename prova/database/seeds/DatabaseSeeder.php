<?php

use App\Bear;
use App\Fish;
use App\Picnic;
use App\Tree;
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

        \App\UserPreferences::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\UserPreferences::class, 50)->create();

        \App\User::truncate();
        (new Faker\Generator)->seed(123);
        factory(\App\User::class, 50)->create();


    }
}

