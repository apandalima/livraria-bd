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
        DB::table('livros')->insert([
            'titulo'=>"É assim que acaba",
            'autor_id'=>2,
            'editora_id'=>1,
        ]);
         DB::table('livros')->insert([
                'titulo'=>"The Kiss of Deception",
                'autor_id'=>4,
                'editora_id'=>3,

            ]);

            DB::table('livros')->insert([
                'titulo'=>"O poder do Hábito",
                'autor_id'=>3,
                'editora_id'=>4

            ]);
    }
}
