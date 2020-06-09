<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clients;
use App\ItemTypes;
use App\Model;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Orders::class, function (Faker $faker) {
    $estimated_price = $faker->randomFloat(2,0,10000);
    $advance_pay = $faker->randomFloat(2, 0, $estimated_price);
    $end_date = $faker->date();
    $begin_date = $faker->date('Y-m-d', $end_date);

    return [
        'created_by' => User::all()->random()->id,
        'assigned' => $faker->optional()->randomElement(User::pluck('id')),
        'client' => $faker->randomElement(Clients::pluck('id')),
        'item_type' => $faker->randomElement(ItemTypes::pluck('id')),
        'producer' => $faker->company,
        'model' => $faker->regexify('[A-Za-z0-9]{6}'),
        'serial_number' => $faker->regexify('[A-Za-z0-9]{16}'),
        'begin_date' => $begin_date,
        'end_date' => $end_date,
        'info' => $faker->optional()->realText(),
        'issue' => $faker->optional()->realText(),
        'delivery_method' => $faker->numberBetween(0,2),
        'pickup_method' => $faker->numberBetween(0,2),
        'estimated_price' => $estimated_price,
        'advance_pay' => $advance_pay,
    ];
});
