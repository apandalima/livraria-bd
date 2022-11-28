<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(array(EditoraSeeder::class,
       GeneroSeeder::class,
       LivroHasGeneroSeeder::class,
       GeneroSeeder::class,
        LivroSeeder::class,
        AutorSeeder::class));  // \App\Models\User::factory(10)->create();
    }
}
