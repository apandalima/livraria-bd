<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo'=>"Trono de Vidro",
             'autor_id'=>1,
             'editora_id'=>1,
             ]);
    }
}
