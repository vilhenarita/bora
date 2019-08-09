<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Contrato_passeio;
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

$factory->define(Contrato_passeio::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'observacao' => $faker->sentence(),
        'passeio_id' => random_int(1, 10)
    ];
});
