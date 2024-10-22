<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('autor')->insert([  //autor 1
        'nome'=>"Sarah J. Maas",
        'tipo'=>"literatura estrangeira",
         ]);
         DB::table('autor')->insert([ //autor 2
            'nome'=>"Colleen Hoover",
            'tipo'=>"literatura estrangeira",
             ]);
         DB::table('autor')->insert([   //autor 3
                'nome'=>"Charles Duhigg",
                'tipo'=>"Autoajuda estrangeira",
                 ]);
         DB::table('autor')->insert([ //autor 4
                    'nome'=>"Mary E. Pearson",
                    'tipo'=>"literatura estrangeira",
                     ]);

    }
}