<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newUser = new User();
        $newUser->name = "Lucio Melis";
        $newUser->email = "lucio92@gmail.com";
        $newUser->password = Hash::make('123456');
        $newUser->company = "La Parolaccia";
        $newUser->address = "Via Torrente 45";
        $newUser->partita_iva = "12345678402";
        $newUser->image = '';
        $newUser->slug = User::generateToSlug($newUser->company);
        $newUser->save();

        $newUser = new User();
        $newUser->name = "Cristian Tulbu";
        $newUser->email = "critulbu@gmail.com";
        $newUser->password = Hash::make('123456');
        $newUser->company = "Tulbu Sushi";
        $newUser->address = "Via Fiume 31";
        $newUser->partita_iva = "12345678912";
        $newUser->image = '';
        $newUser->slug = User::generateToSlug($newUser->company);
        $newUser->save();

        $newUser = new User();
        $newUser->name = "Daniele Gelsomino";
        $newUser->email = "danigelso@gmail.com";
        $newUser->password = Hash::make('123456');
        $newUser->company = "Gelso Food";
        $newUser->address = "Viale Aldo Moro 7";
        $newUser->partita_iva = "12345678931";
        $newUser->image = '';
        $newUser->slug = User::generateToSlug($newUser->company);
        $newUser->save();

        $newUser = new User();
        $newUser->name = "Silvio Antonioli";
        $newUser->email = "milvioilgrande@gmail.com";
        $newUser->password = Hash::make('123456');
        $newUser->company = "Pizzeria da Silvione";
        $newUser->address = "Piazza San Marco 1";
        $newUser->partita_iva = "12345678759";
        $newUser->image = '';
        $newUser->slug = User::generateToSlug($newUser->company);
        $newUser->save();

        $newUser = new User();
        $newUser->name = "Riccardo Ferro";
        $newUser->email = "riccaferro@gmail.com";
        $newUser->password = Hash::make('123456');
        $newUser->company = "La Torta di Ferro";
        $newUser->address = "Via Gallo 14";
        $newUser->partita_iva = "12345678446";
        $newUser->image = '';
        $newUser->slug = User::generateToSlug($newUser->company);
        $newUser->save();



    }
}
