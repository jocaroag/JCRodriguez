<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['fecha','cod_cliente'];

    public function cliente (){
    	return $this->belongsTo('App\Models\Cliente','cod_cliente');
    }
}