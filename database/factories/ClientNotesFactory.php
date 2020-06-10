<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clients;
use App\Model;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\ClientNotes::class, function (Faker $faker) {
    return [
        'user' => $faker->randomElement(User::pluck('id')),
        'client' => $faker->randomElement(Clients::pluck('id')),
        'text' => $faker->realText(),
    ];
});
