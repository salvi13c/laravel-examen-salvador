<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prueba')->insert([
            'id' => '1',
            'name' => 'Accion',
            'numero' => 123,
            'name2' => 'Accion2',
            'name3' => 'Accion3',
        ]);
    }
}
