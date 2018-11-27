<?php

use Illuminate\Database\Seeder;

class DespartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
        	DB::table('departamentos')->insert([
	        	'codigo' => str_random(10).$i,
	        	'nombre' => str_random(10)
	        ]);
        }
    }
}
