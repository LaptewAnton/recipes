<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence(1,3),
        'description' => $faker->paragraph(),
        'user_id' => $faker->numberBetween(1,11),
        'healthy' => $faker->boolean(),
        'time' => $faker->numberBetween(10,300),
        'difficulty_id' => $faker->numberBetween(1,3),
        'created_at' => $faker->dateTimeThisDecade(),
    ];
});
