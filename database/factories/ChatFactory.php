<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Chat;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Chat::class, function (Faker $faker) {
    return [
        'message' => $faker->realText(),
        'date' => $faker->dateTimeBetween('-30 years', 'now'),
        'guia_id' => random_int(1, 10),
        'turista_id' => random_int(1, 10)
    ];
});
