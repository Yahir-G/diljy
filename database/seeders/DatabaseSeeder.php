<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //llamar a los archivos almacenamos en el seeder de SALARIOS
        $this->call( SalarioSeeder::class );

        //llamar a los archivos almacenamos en el seeder de CATEGORIAS
        $this->call( CategoriasSeeder::class );
    }
}
