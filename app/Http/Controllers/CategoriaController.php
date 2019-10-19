<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Descripcion;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{

	public function index(){
		//return csrf_token();

		$categorias = Categoria::with('servicios')->get();
        return $categorias;

	}
    public function store(Request $request){


    $categorias = new Categoria;
    	$categorias ->nombres = $request ->nombres;
    	$categorias ->descripcion = $request ->descripcion;
    	

    	$categorias->save();

        $servicios = new Servicio;
        $servicios->nombre =$request->nombre;
        

    	$categorias->servicios()->save($servicios);
    }

    	public function update(Request $request, $id){
    		$categorias = Categoria::find($id);
    		$categoria = array();
    		$categoria['nombres'] = $request->nombres;
    		$categoria['descripcion'] = $request->descripcion;

    		$categorias->update($categoria);

    		$servicios['nombre'] = $request->nombre;

    		$categorias->servicios()->update($servicios);
    	}
}
