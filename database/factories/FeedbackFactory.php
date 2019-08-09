<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Feedback;
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

$factory->define(Feedback::class, function (Faker $faker) {
    return [
        'stars' => random_int(-2147483648, 2147483647),
        'title' => $faker->words(3, true),
        'description' => $faker->realText(),
        'user_id' => random_int(1, 10),
        'passeio_id' => random_int(1, 10)
    ];
});
