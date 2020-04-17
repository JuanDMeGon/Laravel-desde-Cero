<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['pending', 'payed', 'shipped']),
        // 'customer_id' no needed
    ];
});
