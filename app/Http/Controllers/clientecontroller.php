<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Hojavida;
use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    public function index(){
        
       return csrf_token();
    }

    public function store(Request $request){
    	$cliente = new Cliente;
    	$cliente ->tipodocumento ='cedula';
    	$cliente ->identificacion ='99666';
    	$cliente ->nombre='jose';
    	$cliente ->apellido='rodriguez';

    	$cliente->save();

    	$hojadevida = new Hojavida;
    	$hojadevida ->ocupacion='vendedor';
    	$hojadevida ->experiencia_laboral='no';

    	$cliente->hojadevida() ->save($hojadevida);

    }
}
