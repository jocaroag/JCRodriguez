<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['tipodocumento','identificacion','nombre','apellido','telefono'];

    public function factura (){
    	return $this->hasMany('App\Models\Factura','cod_cliente');

    }
}
