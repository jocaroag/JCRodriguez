<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Descripcion;
use Illuminate\SeHttp\Request;


class CategoriaController extends Controller
{

	public function index(){
		return csrf_token();
	}
    public function store(){
    	$categoria = Categoria::find(1);
    	$categoria->descripciones()->saveMany([

    		new Descripcion(['nombre' => 'zabala']),
    
    	]);
    }
}
