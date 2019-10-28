<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Pet;
use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'url' => $faker->randomElement(['1.mp4', '2.mp4', '3.mp4',]),
        'pet_id' => Pet::all()->random()->id,
    ];
});
