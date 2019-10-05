<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Cliente;

class FacturaController extends Controller
{
    public function store(){

    	$cliente = Cliente::find(1);
    	$cliente->facturas()->createMany([

    		['fecha' => '2019/10/04'],

    	]);

    	$factura = Factura::find(1);
    	$factura->descripciones()->createMany([

    		['caracteristica' => 'factura con detalle'],

    	]);
    }
}
