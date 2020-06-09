<?php

use Illuminate\Database\Seeder;

class ClientsGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = App\Groups::all();
        App\Clients::all()->each(function ($client) use ($groups) { 
            $client->groups()->attach(
                $groups->random(rand(0, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
