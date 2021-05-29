<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 30; $i++) {
            $article = new Article();
            $article->title = 'Seeded Title Number' . $i;
            $article->content = 'Seeded content' . $i;
            $article->save();
        }
    }
}
