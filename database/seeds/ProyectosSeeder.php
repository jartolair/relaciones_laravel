<?php

use Illuminate\Database\Seeder;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
	        DB::table('proyectos')->insert([
	        	'nombre' => str_random(10).$i,
	        	'titulo' => str_random(10),
	        	'fechainicio' => random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1, 28),
	        	'fechafin' => random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1, 28),
	        	'horasestimadas'=> random_int(50, 100),
	        	'empleado_id' => 1
                
	        	]);
        }
    }
}
