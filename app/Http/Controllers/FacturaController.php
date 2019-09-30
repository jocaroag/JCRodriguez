<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function store(){

    	//metodo Attach
    	//$factura = Factura::find(1);
    	//$factura->servicios()->attach(6);

    	//metodo Sync

    	$factura = Factura::find(1);
    	$factura->servicios()->sync(array(2,4,5));
    }
}
