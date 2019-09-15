<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(clienteseed::class);
        // $this->call(categoriaseed::class);
          //$this->call(facturaseed::class);
    }
}
