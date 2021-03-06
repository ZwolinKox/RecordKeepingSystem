<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Clients::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'private' => $faker->numberBetween(0,1),
        'email1' => $faker->safeEmail,
        'email2' => $faker->optional()->safeEmail,
        'phone1' => $faker->phoneNumber,
        'phone2' => $faker->optional()->phoneNumber,
        'address' => $faker->address,
        'send_sms' => $faker->numberBetween(0,1),
        'send_email' => $faker->numberBetween(0,1),
    ];
});
