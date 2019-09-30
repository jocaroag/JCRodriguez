<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['fecha','cliente_id'];

    public function servicios(){
    	return $this->belongsToMany('App\Models\Servicio');
    }
}