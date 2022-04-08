<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nombres' => $faker->name,
        'apellido_p' => $faker->lastName,
        'apellido_m' => $faker->lastName,
        'no_identificacion' => $faker->unique()->postcode,
        'rol' => 'Alumno',
        'carrera' => 'Otro',
        'password' => \Hash::make('123456'), // secret
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, 'Administrador', function ($faker) {
    return [
        'nombres' => $faker->name,
        'apellido_p' => $faker->lastName,
        'apellido_m' => $faker->lastName,
        'no_identificacion' => $faker->unique()->postcode,
        'rol' => 'Administrador',
        'carrera' => 'Otro',
        'password' => \Hash::make('123456'), // secret
        'remember_token' => str_random(10),
    ];
});