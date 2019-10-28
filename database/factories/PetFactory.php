<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Pet;
use App\User;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'description' => $faker->paragraph,
        'quantity' => $faker->numberBetween(1, 10),
        'status' => $faker->randomElement([Pet::AVAILABLE_PET, Pet::UNAVAILABLE_PET]),
        'seller_id' => User::all()->random()->id
    ];
});
