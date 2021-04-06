<?php

namespace Database\Seeders;

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
        \App\Models\Roles::factory(1)->create(['nombre' => 'administrador']);
        \App\Models\Roles::factory(1)->create(['nombre' => 'auditor']);
        \App\Models\Roles::factory(1)->create(['nombre' => 'auxiliar']);

        \App\Models\User::factory(1)->create([
            'nombre'=> 'Prueba Codesa',
            'estado' => 'activo',
            'role_id' =>  \App\Models\Roles::ADMINISTRADOR
        ]);

        \App\Models\User::factory(10)->create();

    }
}
