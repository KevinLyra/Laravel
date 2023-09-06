<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for($i = 0; $i<26; $i++){
            Article::create([
                'title' => $faker->sentence(),
                'subtitle'=> $faker->sentence(),
                'content'=> $faker->text($maxNbChars = 600)
            ]);
        }
    }
}
