<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class EditoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editora')->insert([
            'nome'=>"Galera Record",
             ]);
             DB::table('editora')->insert([
                'nome'=>"Seguinte",
                 ]);
                 DB::table('editora')->insert([
                    'nome'=>"DarKSide",
                     ]);
    }
}
