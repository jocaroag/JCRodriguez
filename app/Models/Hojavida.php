<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hojavida extends Model
{
    protected $table = 'hojasdevidas';
    protected $fillable = ['ocupacion','experiencia_laboral', 'cliente_id'];

   public function cliente (){
   	return $this ->belongsTo('App\Models\Cliente');

   }
}
