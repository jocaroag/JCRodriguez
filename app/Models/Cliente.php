<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['tipodocumento','identificacion','nombre','apellido','telefono','atributos'];
    protected $casts =['atributos' =>'array'];

    public function factura (){
    return $this->hasMany('App\Models\Factura','cod_cliente');

    }

    //accesorio
   public function getFullNameAttribute(){
    return "{$this->identificacion} {$this->nombre}";
   }

   protected $appends=[
    'full_name',
   ];


   //mutador 
   public function setNameAttribute($value){

    $this->attributes['nombre']=ucfirst($value);
   }
}
