<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Servicio;
use Illuminate\SeHttp\Request;


class CategoriaController extends Controller
{

	public function index(){
		return csrf_token();
	}
    public function store(){
    	$categoria = Categoria::find(1);
    	$categoria->servicios()->saveMany([

    		new Servicio(['nombre' => 'rapido']),
    		new Servicio(['nombre' => 'inmediato']),
    		new Servicio(['nombre' => 'demorado']),
    		new Servicio(['nombre' => 'lento']),
    	]);
    }
}
