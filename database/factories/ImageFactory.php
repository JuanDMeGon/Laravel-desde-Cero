<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $fileName = $faker->numberBetween(1, 10) . '.jpg';

    return [
        'path' => "img/products/{$fileName}",
    ];
});

$factory->state(Image::class, 'user', function (Faker $faker) {
    $fileName = $faker->numberBetween(1, 6) . '.jpg';

    return [
        'path' => "img/users/{$fileName}",
    ];
});
