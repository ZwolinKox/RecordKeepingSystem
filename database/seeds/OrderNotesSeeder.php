<?php

use Illuminate\Database\Seeder;

class OrderNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrderNotes::class, 30)->create();
    }
}
