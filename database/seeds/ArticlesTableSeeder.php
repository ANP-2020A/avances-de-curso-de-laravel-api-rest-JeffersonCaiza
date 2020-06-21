<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //vaciar la tabla
        Article::truncate();

        // Crear artículos ficticios en la tabla
        $faker=\Faker\Factory ::create();
        for($i = 0; $i < 50; $i++) {
            Article::create([
                'title'=> $faker->sentence,
                'body'=> $faker->paragraph,
            ]);
        }
    }
}
