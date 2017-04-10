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
         'ID_ROL' => 1,
        'NOMBRE' => 'ADMINISTRADOR',
        'ESTADO'    => 1
       ]);
       DB::table('ROL')->insert([
         'ID_ROL' => 2,
        'NOMBRE' => 'EDITOR',
        'ESTADO'    => 1
       ]);
       DB::table('ROL')->insert([
         'ID_ROL' => 3,
        'NOMBRE' => 'MODERADOR',
        'ESTADO'    => 1
       ]);
       DB::table('ROL')->insert([
         'ID_ROL' => 4,
        'NOMBRE' => 'ESTUDIANTE',
        'ESTADO'    => 1
       ]);

    }
}
