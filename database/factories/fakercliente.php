<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
       'tipodocumento' =>$faker->cityPrefix,
       'identificacion'=>$faker->randomDigit,
       'nombre'		   =>$faker->name,
       'apellido'	   =>$faker->name,
       'telefono'	   =>$faker->randomDigit,
       
       'atributos'	   =>[
       	"tipodocumento" =>$faker->cityPrefix,
        "identificacion"=>$faker->randomDigit,
        "nombre"	    =>$faker->name,

       ],

    ];
});
