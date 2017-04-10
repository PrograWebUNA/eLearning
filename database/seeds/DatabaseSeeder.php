<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Eloquent::unguard();
      $this->call('RolesSeeder');
      $this->call('tipoRecursoSeeder');
      $this->call('cursoSeeder');
      $this->call('userSeeder');
      $this->call('asignaRolSeeder');
      $this->call('semanaSeeder');
    }
}
