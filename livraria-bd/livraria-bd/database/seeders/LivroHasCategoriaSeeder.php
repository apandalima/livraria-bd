<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LivroHasCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros_has_categoria')->insert([
            'livro_id'=>1,
            'categoria_id'=>5,
            ]);
        DB::table('livros_has_categoria')->insert([
            'livro_id'=>1,
            'categoria_id'=>7,
            ]);

            DB::table('livros_has_categoria')->insert([
                'livro_id'=>2,
                'categoria_id'=>1,
                ]);
                DB::table('livros_has_categoria')->insert([
                    'livro_id'=>2,
                    'categoria_id'=>3,
                    ]);
                    DB::table('livros_has_categoria')->insert([
                        'livro_id'=>3,
                        'categoria_id'=>5,
                        ]);
                        DB::table('livros_has_categoria')->insert([
                            'livro_id'=>3,
                            'categoria_id'=>7,
                            ]);
                    DB::table('livros_has_categoria')->insert([
                        'livro_id'=>4,
                        'categoria_id'=>8,
                        ]);
    }
}
