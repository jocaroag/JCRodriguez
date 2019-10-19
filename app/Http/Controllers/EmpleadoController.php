<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Empleado;
use App\Models\Descripcion;

class EmpleadoController extends Controller
{
    public function index(){
        //return csrf_token();

        $empleado = Empleado::with('descripciones')->get();
        return $empleado;
    }

     public function store(Request $request){
        $servicio = Servicio::find(1);
        $empleados = new Empleado;
        $empleados ->nombre = $request->nombre;        
        $empleados ->cargo = $request->cargo; 

        $servicio->empleados()->save($empleados);

        $descripcion = new Descripcion;
        $descripcion->caracteristica = $request->caracteristica;

        $empleados->descripciones()->save($descripcion);
    }

     public function update(Request $request, $id){
            $empleados = Empleado::find($id);
            $empleado = array();
            $empleado['nombre'] = $request->nombre;
            $empleado['cargo'] = $request->cargo;

            $empleados->update($empleado);

            $descripcion['caracteristica'] = $request->caracteristica;

            $empleados->descripciones()->update($descripcion);
        }

        public function destroy($id){
            $empleados = Empleado::find($id);
            
            $empleados->delete();
            $empleados->descripciones()->delete();
        }
}
