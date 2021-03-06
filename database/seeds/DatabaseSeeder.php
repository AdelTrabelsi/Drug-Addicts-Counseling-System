<?php

use Illuminate\Database\Seeder;

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
        factory('App\Admin', 1)->create();
        factory('App\Membre', 10)->create();
        factory('App\Psychologue', 10)->create();
        factory('App\Blog', 10)->create();
        factory('App\Statut', 10)->create();
        factory('App\Discussion', 10)->create();
    }
}
