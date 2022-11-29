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
     */
    public function run()
    {
        DB::table('genero')->insert([

            'tipo'=>"Fantasia e Romance",
             ]);
    }
}
