<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->defineAs(App\User::class, 'igeM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'IGE',
    ];
});

$factory->defineAs(App\User::class, 'igeH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'IGE',
    ];
});

$factory->defineAs(App\User::class, 'indM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'IND',
    ];
});

$factory->defineAs(App\User::class, 'indH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'IND',
    ];
});

$factory->defineAs(App\User::class, 'iscM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'ISC',
    ];
});

$factory->defineAs(App\User::class, 'iscH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'ISC',
    ];
});

$factory->defineAs(App\User::class, 'tsmM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'TSM',
    ];
});

$factory->defineAs(App\User::class, 'tsmH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'TSM',
    ];
});

$factory->defineAs(App\User::class, 'laM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'LA',
    ];
});

$factory->defineAs(App\User::class, 'laH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'LA',
    ];
});

$factory->defineAs(App\User::class, 'infsM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'INFS',
    ];
});

$factory->defineAs(App\User::class, 'infsH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'INFS',
    ];
});

$factory->defineAs(App\User::class, 'igesM', function ($faker) {
    return [
        'sexo' => 'Femenino',
        'carrera' => 'IGES',
    ];
});

$factory->defineAs(App\User::class, 'igesH', function ($faker) {
    return [
        'sexo' => 'Hombre',
        'carrera' => 'IGES',
    ];
});