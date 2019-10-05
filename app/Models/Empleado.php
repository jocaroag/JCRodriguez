<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre','cargo','servicio_id'];


   public function servicio(){

    return $this->belongsTo('App\Models\Servicio');
   }

   public function descripciones(){
   	return $this->morphMany('App\Models\Descripcion', 'descripcionable');
   }
}
