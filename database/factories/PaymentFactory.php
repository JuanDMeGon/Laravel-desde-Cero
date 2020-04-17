<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'amount' => $faker->randomFloat($maxDecimals = 2, $min = 15, $max = 500),
        'payed_at' => $faker->dateTimeBetween($startDate = '-1 year', $emdDate = 'now', $timezone = null),
        // order_id no needed
    ];
});
