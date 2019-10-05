<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['tipodocumento','identificacion','nombre','apellido'];


   public function facturas(){

    return $this->hasMany('App\Models\Factura');
   }

   public function hojadevida(){

    return $this->hasOne('App\Models\Hojavida');
   }

   public function descripciones(){
   	return $this->morphMany('App\Models\Descripcion', 'descripcionable');
   }
}
