<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Orders;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\OrderNotes::class, function (Faker $faker) {
    return [
        'user' => $faker->randomElement(User::pluck('id')),
        'order' => $faker->randomElement(Orders::pluck('id')),
        'text' => $faker->realText(),
    ];
});
