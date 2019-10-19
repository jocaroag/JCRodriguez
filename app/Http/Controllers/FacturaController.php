<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Cliente;

class FacturaController extends Controller
{
    public function index(){
        //return csrf_token();

        $factura = Factura::with('servicios')->get();
        return $factura;
    }

    public function store(Request $request){
        $cliente = Cliente::find(1);
        $facturas = new Factura;
        $facturas ->fecha = $request->fecha;        

        $cliente->facturas()->save($facturas);

        $factura = Factura::find(1);
        $factura->servicios()->attach(1);
    }

    public function update(Request $request, $id){
            $facturas = Factura::find($id);
            $factura = array();
            $factura['fecha'] = $request->fecha;

            $facturas->update($factura);

            $servicios['nombre'] = $request->nombre;

            $facturas->servicios()->update($servicios);
        }
}
