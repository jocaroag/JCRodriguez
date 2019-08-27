<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Factura;
use Faker\Generator as Faker;

$factory->define(App\Models\Factura::class, function (Faker $faker) {
    return [
        'fecha' =>$faker->date($format='Y-m-d', $max='now'),
    ];
});
