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

        $utente = new \App\User(['nome'=>'gorgio','cognome'=>'gionnio','indirizzo'=>'si','email'=>'emailemail','password'=>'pw']);
        $utente->save();

        $evento = new \App\Event(['titolo'=>'ape col morto','immagine'=>'si','descrizione'=>'un ape col morto','prezzo'=>'13.20','indirizzo'=>'asdasd','dataEvento'=>'2017-10-05','dataCreazione'=>'017-06-05']);
        $evento1 = new \App\Event(['titolo'=>'gianfranco balla','immagine'=>'si','descrizione'=>'gianfranco che balla','prezzo'=>'00.20','indirizzo'=>'asdasd','dataEvento'=>'2017-10-05','dataCreazione'=>'017-06-05']);
        $evento2 = new \App\Event(['titolo'=>'ape fere morto','immagine'=>'si','descrizione'=>'un ape fare morto','prezzo'=>'103.20','indirizzo'=>'asdasd','dataEvento'=>'2017-10-05','dataCreazione'=>'017-06-05']);
//        $evento->save();

        $utente->creates()->saveMany([$evento, $evento1, $evento2]);


        //definizione gruppi
        $admin = new \App\Group(['nomeGruppo'=>'admin']);
        $admin->save();

        $moderator = new \App\Group(['nomeGruppo'=>'moderator']);
        $moderator->save();

        $genericUser = new \App\Group(['nomeGruppo'=>'user']);
        $genericUser->save();
        //fine definizioni gruppi

        //definizione servizi
        //recensione
        $addReview = new \App\Service(['nomeServizio'=>'aggiungi recensione']);
        $addReview->save();

        $modReview = new \App\Service(['nomeServizio'=>'modifica recensione']);
        $modReview->save();

        $delReview = new \App\Service(['nomeServizio'=>'cancella recensione']);
        $delReview->save();
        //fine recensione

        //evento
        $addEvent = new \App\Service(['nomeServizio'=>'aggiungi evento']);
        $addEvent->save();

        $modEvent = new \App\Service(['nomeServizio'=>'modifica evento']);
        $modEvent->save();

        $delEvent = new \App\Service(['nomeServizio'=>'cancella evento']);
        $delEvent->save();
        //fine evento

        //categorie evento
        $addCategory = new \App\Service(['nomeServizio' => 'aggiungi categoria']);
        $addCategory->save();

        $modCategory = new \App\Service(['nomeServizio'=> 'modifica categoria']);
        $modCategory->save();

        $delCategory = new \App\Service(['nomeServizio' => 'cancella categoria']);
        $delCategory->save();
        //fine categoria evento

        $admin->service()->save($addCategory);
        $admin->service()->save($modCategory);
        $admin->service()->save($delCategory);



        /*
         * scrivere modificare e eliminare review
         * aggiungere modificare e eliminare evento
         * aggiungere modificare e eliminare preferenza utente
         * aggiungere modificare e eliminare categoria evento
         * aggiun
        */


//        \App\User::truncate();
//        (new Faker\Generator)->seed(123);
//        factory(\App\User::class, 50)->create();

    }
}
