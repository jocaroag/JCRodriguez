<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Servicio;

class ServicioController extends Controller
{
    public function index(){
		return csrf_token();
	}
    public function store(){
    	$categoria = Categoria::find(1);
    	$categoria->descripciones()->createMany([
    	]);
    }
}
