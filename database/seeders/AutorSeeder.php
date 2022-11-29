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
         DB::table('autor')->insert([
        'nome'=>"Sarah J. Maas",
        'tipo'=>"Fantasia e Romance",
         ]);
    }
}
