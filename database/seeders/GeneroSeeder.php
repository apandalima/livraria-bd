<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */
    public function run()
    {
        DB::table('genero')->insert([

            'tipo'=>"Ficção Doméstica"

             ]);
        DB::table('genero')->insert([

            'tipo'=>"Infanto Juvenil",

             ]);
        DB::table('genero')->insert([

            'tipo'=>"Drama",

             ]);
        DB::table('genero')->insert([

            'tipo'=>"Young Adult",

             ]);
        DB::table('genero')->insert([

            'tipo'=>"Fantasia",

             ]);
             DB::table('genero')->insert([

                'tipo'=>"Ficção Cientifica",

                 ]);
             DB::table('genero')->insert([

                'tipo'=>"Romance",

                 ]);

    }
}
