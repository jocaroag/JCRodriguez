<?php

use Illuminate\Database\Seeder;

class categoriaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = factory (App\Models\Categoria::class, 7)->create();
    }
}
