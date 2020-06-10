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
        $this->call(RootUser::class);
        $this->call(SchemeSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(ItemTypesSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(ClientsGroupsSeeder::class);
        $this->call(ClientNotesSeeder::class);
        $this->call(OrderNotesSeeder::class);
    }
}
