<?php

use Illuminate\Database\Seeder;

class tipoRecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('TIPO_RECURSO')->delete();
      DB::table('TIPO_RECURSO')->insert([
       'NOMBRE' => 'Secciones'
      ]);
      DB::table('TIPO_RECURSO')->insert([
       'NOMBRE' => 'Etiquetas'
      ]);
      DB::table('TIPO_RECURSO')->insert([
       'NOMBRE' => 'Archivos'
      ]);
      DB::table('TIPO_RECURSO')->insert([
       'NOMBRE' => 'Páginas'
      ]);
    }
}
