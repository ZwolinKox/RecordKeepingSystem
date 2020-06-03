<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scheme')->insert([
            'id' => '1',
            'scheme' => 'SERWIS/%N/%m/%Y',
            'cycle' => '1',
            'total_number' => '0',
            'last_date' => Carbon::now(),
        ]);
    }
}
