<?php

use Illuminate\Database\Seeder;

class clienteseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::insert("INSERT INTO clientes (id, tipodocumento, identificacion, nombre, apellido, telefono)
        	VALUES 
        	('1', 'CC', '1234', 'JUAN', 'PEREZ', '3456'),
        	('2', 'TI', '4322', 'MARIA', 'NAVARRO', '5678')" );
    }
}
