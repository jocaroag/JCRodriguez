<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function store(){

    	$servicio = Servicio::find(1);
    	$servicio->empleados()->createMany([

    		['nombre' => 'jose', 'cargo' => 'vendedor'],

    	]);

    	$empleado = Empleado::find(1);
    	$empleado->descripciones()->createMany([

    		['caracteristica' => 'buen vendedor'],

    	]);
    }
}
