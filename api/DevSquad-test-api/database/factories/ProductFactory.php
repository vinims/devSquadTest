<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->company(1),
        'category' => $faker->randomElement($array = array('Food','Clothing','Furniture', 'Hygienic')),
        'price' => $faker->randomNumber(3),
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480, 'food'),
    ];
});
