<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    /**
    
    OBTENER GET
    REGISTRAR POST
    ACTUALIZAR PUT
    ELIMINAR DELETE

    */
    public function run()
    {
        $this->call([AuthorSeeder::class,
        	CategorySeeder::class,
        	UserSeeder::class,
        	BookSeeder::class,

        ]);

    }
}
