<?php

use Illuminate\Database\Seeder;

class asignaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('USUARIO_ROL')->delete();
      DB::table('USUARIO_ROL')->insert([
       'ID_USUARIO' => 1,
       'ROL'=>1,
       'ESTADO'=>1
     ]);

     DB::table('USUARIO_ROL')->insert([
      'ID_USUARIO' => 2,
      'ROL'=>4,
      'ESTADO'=>1
    ]);



    }
}
