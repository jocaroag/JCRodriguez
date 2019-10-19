<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Hojavida;
use App\Models\Descripcion;
use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    public function index(){
        
      // return csrf_token();

        $cliente = Cliente::with('hojadevida')->get();
        return $cliente;
       
    }

    public function store(Request $request){

    	$cliente = new Cliente;
    	$cliente ->tipodocumento = $request ->tipodocumento;
    	$cliente ->identificacion = $request ->identificacion;
    	$cliente ->nombre= $request ->nombre;
    	$cliente ->apellido=$request ->apellido;

    	$cliente->save();

        $hojadevida=new Hojavida;
        $hojadevida->ocupacion =$request->ocupacion;
        $hojadevida->experiencia_laboral =$request ->experiencia_laboral;

    	$cliente->hojadevida()->save($hojadevida);

    }


    public function update (Request $request, $id)
    {

        $clientes=Cliente::find ($id);
        $cliente= array();
        $cliente['tipodocumento'] = $request ->tipodocumento;
        $cliente['identificacion'] = $request ->identificacion;
        $cliente['nombre']= $request ->nombre;
        $cliente['apellido']=$request ->apellido;

        $clientes->update($cliente);
        $hojadevida['ocupacion'] =$request->ocupacion;
        $hojadevida['experiencia_laboral'] =$request ->experiencia_laboral;

        $clientes->hojadevida()->update($hojadevida);





    }
}
