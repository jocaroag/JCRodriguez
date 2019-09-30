<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

	protected $table = 'servicios';
    protected $fillable = ['nombre','categoria_id'];


    public function categoria (){
   	return $this ->belongsTo('App\Models\Categoria');

   }

    public function facturas(){
    	return $this->belongsToMany('App\Models\Factura');
    }

    public function empleados(){
    	return $this->hasMany('App\Models\Empleado');
    }

}
