<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Descripcion;
use App\Models\Categoria;


class DescripcionController extends Controller
{
    public function getdescripcion(){  

    	//$descripcion = Descripcion::with('descripcionable')->get();
    	//return $descripcion;

    	$descripcion = Descripcion::find(1);
    	return $descripcion;
     
    }
}
