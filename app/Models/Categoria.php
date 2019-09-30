<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre','descripcion'];


    public function servicios(){
    	return $this->hasMany('App\Models\Servicio');
    }

    public function empleados(){
    	return $this->hasManyThrough('App\Models\Empleado', 'App\Models\Servicio');
    }
}
