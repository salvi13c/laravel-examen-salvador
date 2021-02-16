<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tablaexamenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examen')->insert([
            'nombre'=>'salvi1',
            'apellidos'=>'salvi1',
            'DNI'=>'34567H'
            
        ]);
        
        DB::table('examen')->insert([
   
            'nombre'=>'salvi2',
            'apellidos'=>'salvi2',
            'DNI'=>'34568H'
            
        ]);
        
        DB::table('examen')->insert([
       
            'nombre'=>'salvi3',
            'apellidos'=>'salvi4',
            'DNI'=>'34569H'
            
        ]);
        
    }
}
