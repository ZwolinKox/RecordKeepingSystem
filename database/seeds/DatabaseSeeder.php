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
        $this->call(rootUser::class);
        $this->call(SchemeSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(ItemTypesSeeder::class);
        $this->call(OrdersSeeder::class);
    }
}
