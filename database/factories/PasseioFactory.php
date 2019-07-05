<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Passeio;
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

$factory->define(Passeio::class, function (Faker $faker) {
    return [
        'img' => $faker->sentence(),
        'name' => $faker->name(),
        'description' => $faker->realText(),
        'adress' => $faker->sentence(),
        'status' => $faker->sentence(),
        'guia_id' => random_int(1, 10),
        'turista_id' => random_int(1, 10),
        'average_rating' => random_int(0, 5),
        'num_feedback' => $faker->sentence()
    ];
});
