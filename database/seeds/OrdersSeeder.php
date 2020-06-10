<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Helpers\SchemesController;
use Carbon\Carbon;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Orders::class, 30)->create()
            ->each(function ($order) {
                $order->name = SchemesController::parser($order->id);
                $order->statuses()->create([
                    'status' => 1,
                    'created_by' => $order->created_by,
                    'date' => Carbon::now(),
                ]);
                $order->save();
            });
    }
}
