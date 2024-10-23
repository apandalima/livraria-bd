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
            'nome_editora'=>"Galera Record",
             ]);
             DB::table('editora')->insert([ //editora 2
                'nome_editora'=>"Seguinte",
                 ]);
        DB::table('editora')->insert([  //editora 3
                    'nome_editora'=>"DarKSide",
                     ]);
         DB::table('editora')->insert([  //editora 4
                        'nome_editora'=>"Objetiva",
                         ]);
    }
}
