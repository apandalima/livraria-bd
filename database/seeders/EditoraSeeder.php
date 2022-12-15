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
        DB::table('editora')->insert([ //editora 1
            'nome'=>"Galera Record",
             ]);
             DB::table('editora')->insert([ //editora 2
                'nome'=>"Seguinte",
                 ]);
        DB::table('editora')->insert([  //editora 3
                    'nome'=>"DarKSide",
                     ]);
         DB::table('editora')->insert([  //editora 4
                        'nome'=>"Objetiva",
                         ]);
    }
}
