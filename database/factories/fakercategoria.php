<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categoria;
use Faker\Generator as Faker;

$factory->define(App\Models\Categoria::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => $faker ->paragraph, 
    ];
});
