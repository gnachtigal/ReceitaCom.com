<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Recipe;
use App\Ingredient;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->unique()->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Recipe::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'details' => $faker->details,
    ];
});

$factory->define(Ingredient::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
