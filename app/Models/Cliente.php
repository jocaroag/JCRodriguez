<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['tipodocumento','identificacion','nombre','apellido'];


   public function hojadevida(){

    return $this->hasOne('App\Models\Hojavida');
   }
}
