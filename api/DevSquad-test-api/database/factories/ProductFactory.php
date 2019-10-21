<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->company(1),
        'category' => $faker->word(1),
        'price' => $faker->randomNumber(3),
    ];
});
