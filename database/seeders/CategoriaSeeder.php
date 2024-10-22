<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([

            'tipo'=>"Ficção Doméstica"

             ]);
        DB::table('categoria')->insert([

            'tipo'=>"Infanto Juvenil",

             ]);
        DB::table('categoria')->insert([

            'tipo'=>"Drama",

             ]);
        DB::table('categoria')->insert([

            'tipo'=>"Young Adult",

             ]);
        DB::table('categoria')->insert([

            'tipo'=>"Fantasia",

             ]);
             DB::table('categoria')->insert([

                'tipo'=>"Ficção Cientifica",

                 ]);
             DB::table('categoria')->insert([

                'tipo'=>"Romance",

                 ]);

        DB::table('categoria')->insert([

                    'tipo'=>"Psicologico",

                     ]);

    }
}
