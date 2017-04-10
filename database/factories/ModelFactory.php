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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->words(rand(5,10), true),
        'content' => $faker->paragraph(rand(10,25)),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id' => rand(1,50),
        'post_id' => 1,
        'content' => $faker->paragraph(rand(10,50)),
    ];
});