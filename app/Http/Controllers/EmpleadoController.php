<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class EmpleadoController extends Controller
{
    public function getempleado(){

    	$categoria = Categoria::with('empleados')->get();
    	return $categoria;
    }
}
