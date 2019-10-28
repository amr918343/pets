<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Pet;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'pet_id' => Pet::all()->random()->id,
    ];
});
