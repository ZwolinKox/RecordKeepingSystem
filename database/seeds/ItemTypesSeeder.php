<?php

use Illuminate\Database\Seeder;

class ItemTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->insert([
            ['name' => 'Telewizor'],
            ['name' => 'Laptop'],
            ['name' => 'Głośniki'],
            ['name' => 'Monitor'],
            ['name' => 'Klawiatura'],
            ['name' => 'Myszka'],
            ['name' => 'Komputer'],
            ['name' => 'Telefon'],
            ['name' => 'Smartwatch'],
            ['name' => 'Karta Graficzna'],
            ['name' => 'Płyta Główna'],
            ['name' => 'Obudowa Komputera'],
            ['name' => 'Konsola'],
        ]);
    }
}
