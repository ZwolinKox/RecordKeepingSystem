<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Orders;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Status::class, function (Faker $faker) {
    return [
        'status' => $faker->numberBetween(1,14),
        'created_by' => $faker->randomElement(User::pluck('id')),
        'order' => $faker->randomElement(Orders::pluck('id')),
        'date' => $faker->date(),
    ];
});
