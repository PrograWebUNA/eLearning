<?php

use Illuminate\Database\Seeder;

class cursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('CURSO')->delete();
      DB::table('CURSO')->insert([
       'NOMBRE' => 'Estructuras discretas',
       'DURACION'=>18,
       'FECHA_INICIO'=>'2017-02-01',
       'FECHA_FIN'=>'2017-05-31',
       'ESTADO'    => 1,
       'URL_IMAGEN' =>'http://www.yournewchange.com/wp-content/uploads/2011/02/4098274108_72045000f1_b-900x300.jpg',
       'DESCRIPCION'=>'Curso matematico'
      ]);
      DB::table('CURSO')->insert([
       'NOMBRE' => 'Programacion WEB',
       'DURACION'=>10,
       'FECHA_INICIO'=>'2017-02-01',
       'FECHA_FIN'=>'2017-05-31',
       'ESTADO'    => 1,
       'URL_IMAGEN' =>'http://www.innowine.es/wp-content/uploads/2016/08/900-x-300-head-1.jpg',
       'DESCRIPCION'=>'Desarrollo de software'
      ]);
      DB::table('CURSO')->insert([
       'NOMBRE' => 'Soporte tecnico',
       'DURACION'=>11,
       'FECHA_INICIO'=>'2017-02-01',
       'FECHA_FIN'=>'2017-05-31',
       'ESTADO'    => 1,
       'URL_IMAGEN' =>'http://www.bvqconsulting.com/wp-content/uploads/2016/08/Foo-900x300.jpg',
       'DESCRIPCION'=>'Curso matematico'
      ]);
      DB::table('CURSO')->insert([
       'NOMBRE' => 'Matematica 1',
       'DURACION'=>15,
       'FECHA_INICIO'=>'2017-02-01',
       'FECHA_FIN'=>'2017-05-31',
       'ESTADO'    => 1,
       'URL_IMAGEN' =>'http://www.yournewchange.com/wp-content/uploads/2011/02/4098274108_72045000f1_b-900x300.jpg',
       'DESCRIPCION'=>'Curso matematico'
      ]);
      DB::table('CURSO')->insert([
       'NOMBRE' => 'Estructuras de datos',
       'DURACION'=>18,
       'FECHA_INICIO'=>'2017-02-01',
       'FECHA_FIN'=>'2017-05-31',
       'ESTADO'    => 1,
       'URL_IMAGEN' =>'http://www.yournewchange.com/wp-content/uploads/2011/02/4098274108_72045000f1_b-900x300.jpg',
       'DESCRIPCION'=>'Estructuras de datos'
      ]);
      DB::table('CURSO')->insert([
       'NOMBRE' => 'Algebra lineal',
       'DURACION'=>18,
       'FECHA_INICIO'=>'2017-02-01',
       'FECHA_FIN'=>'2017-05-31',
       'ESTADO'    => 1,
       'URL_IMAGEN' =>'http://www.yournewchange.com/wp-content/uploads/2011/02/4098274108_72045000f1_b-900x300.jpg',
       'DESCRIPCION'=>'Curso matematico'
      ]);
    }
}
