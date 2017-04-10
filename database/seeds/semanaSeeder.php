<?php

use Illuminate\Database\Seeder;

class semanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('SEMANA')->delete();
      DB::table('SEMANA')->insert([
        'ID_SEMANA' => 1,
        'CURSO' => 1,
        'TEMA'=>'PRUEBAS',
       'FECHA_INICIO'=>'2017-01-01',
       'FECHA_FIN'=>'2017-06-01',
       'VISIBLE'=>1,
       'ESTADO'=>1
     ]);
    }
}
