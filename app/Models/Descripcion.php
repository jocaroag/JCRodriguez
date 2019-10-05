<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    protected $table = 'descripciones';
    protected $fillable = ['caracteristica','descripcionable_id', 'descripcionable_type'];

    public function descripcionable(){
    	return $this->morphTo();
    }
}
