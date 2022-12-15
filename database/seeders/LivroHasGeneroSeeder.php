<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class LivroHasGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros_has_genero')->insert([
            'livro_id'=>1,
            'genero_id'=>5,
            ]);
        DB::table('livros_has_genero')->insert([
            'livro_id'=>1,
            'genero_id'=>7,
            ]);

            DB::table('livros_has_genero')->insert([
                'livro_id'=>2,
                'genero_id'=>1,
                ]);
                DB::table('livros_has_genero')->insert([
                    'livro_id'=>2,
                    'genero_id'=>3,
                    ]);
                    DB::table('livros_has_genero')->insert([
                        'livro_id'=>3,
                        'genero_id'=>5,
                        ]);
                        DB::table('livros_has_genero')->insert([
                            'livro_id'=>3,
                            'genero_id'=>7,
                            ]);
                    DB::table('livros_has_genero')->insert([
                        'livro_id'=>4,
                        'genero_id'=>8,
                        ]);

    }
}
