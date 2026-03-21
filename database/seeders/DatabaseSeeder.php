<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        // Buat beberapa user Random dengan nama Indonesia
        $faker = Faker::create('id_ID');

        // User tetap untuk Ibnu
        User::firstOrCreate(
            ['email' => 'ibnu@gmail.com'],
            [
                'name' => 'Ibnu Arip',
                'username' => 'ibnu',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10)
            ]
        );

        // Buat 15 user random Indonesia
        for ($i = 0; $i < 15; $i++) {
            User::create([
                'name' => $faker->name(),
                'username' => $faker->unique()->userName(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }

        $users = User::all();

        // Load 50 Artikel tutorial nyata dalam Bahasa Indonesia dari file terpisah
        $articles = require __DIR__ . '/data_articles.php';
        foreach ($articles as $article) {
            $category = Category::where('slug', $article['category'])->first();
            // Pilih satu user Indonesia secara acak
            $randomUser = $users->random();

            Post::create([
                'title' => $article['title'],
                'author_id' => $randomUser->id,
                'category_id' => $category->id,
                'slug' => Str::slug($article['title']) . '-' . Str::random(5),
                'body' => $article['body'],
            ]);
        }
    }
}
