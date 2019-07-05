<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Turista;
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

$factory->define(Turista::class, function (Faker $faker) {
    return [
        'img' => $faker->sentence(),
        'name' => $faker->name(),
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'birthday' => $faker->date(),
        'password' => 'asd123123',
        'gender' => $faker->sentence(),
        'phone' => $faker->sentence(),
        'rg' => $faker->sentence(),
        'cpf' => $faker->sentence()
    ];
});
