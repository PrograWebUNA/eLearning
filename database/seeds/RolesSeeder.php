<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('ROL')->delete();
       DB::table('ROL')->insert([
        'NOMBRE' => 'ADMINISTRADOR',
        'ESTADO'    => 1
       ]);
       DB::table('ROL')->insert([
        'NOMBRE' => 'EDITOR',
        'ESTADO'    => 1
       ]);
       DB::table('ROL')->insert([
        'NOMBRE' => 'MODERADOR',
        'ESTADO'    => 1
       ]);
       DB::table('ROL')->insert([
        'NOMBRE' => 'ESTUDIANTE',
        'ESTADO'    => 1
       ]);

    }
}
