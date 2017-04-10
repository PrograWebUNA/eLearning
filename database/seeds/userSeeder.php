<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      DB::table('users')->insert([
        'ID_USUARIO' => 1,
       'name' => 'admin',
       'email'=>'admin@admin.com',
       'IDENTIFICACION'=>'123456789',
       'GENERO'=>'Masculino',
       'PAIS'    => 'Costa Rica',
       'LENGUAJE' => 'Español',
       'password'    => '$2y$10$T.qEjL9dsTMcbD8aBnmmreqLjd.9y5g7c92crKEGt4D2X5oy1b8Zu'
      ]);

      DB::table('users')->insert([
        'ID_USUARIO' => 2,
       'name' => 'ESTUDIANTE',
       'email'=>'estudiante@estudiante.com',
       'IDENTIFICACION'=>'111111111',
       'GENERO'=>'Masculino',
       'PAIS'    => 'Costa Rica',
       'LENGUAJE' => 'Español',
       'password'    => '$2y$10$T.qEjL9dsTMcbD8aBnmmreqLjd.9y5g7c92crKEGt4D2X5oy1b8Zu'
      ]);


    }
}
