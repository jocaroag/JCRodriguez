<?php

use Illuminate\Database\Seeder;

class facturaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = factory(App\Models\Cliente::class, 5)
        ->create()
        ->each(function ($cliente){
        	$cliente->factura()->save(factory(App\Models\Factura::class)->make());
        });
    }
}
