<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'desc' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'price' => rand(500 , 100000) / 100,
        'img' => 'https://picsum.photos/300/300'
    ];
});
