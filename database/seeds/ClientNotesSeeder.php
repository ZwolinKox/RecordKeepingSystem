<?php

use Illuminate\Database\Seeder;

class ClientNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClientNotes::class, 30)->create();
    }
}
