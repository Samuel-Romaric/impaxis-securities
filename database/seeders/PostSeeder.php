<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            [
                'post_category_id' => 1,
                'author_id' => 1,
                'title' => 'Découvrez les dernières évolutions des indices boursiers et les prévisions ...',
                'slug' => Str::slug('Découvrez les dernières évolutions des indices boursiers et les prévisions ...'),
                'excerpt' => '',
                'short_description' => 'Restez informé sur les tendances du marché et les opportunités d\'investissement.',
                'content' => '<p>Le marché boursier en 2026 présente des opportunités uniques pour les investisseurs...</p>',
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path('front/assets/images/news/post-1-conseil.png'),
            ],
            [
                'post_category_id' => 2,
                'author_id' => 1,
                'title' => 'Nos conseils pratiques pour équilibrer vos investissements et minimiser...',
                'slug' => Str::slug('Nos conseils pratiques pour équilibrer vos investissements et minimiser...'),
                'excerpt' => '',
                'short_description' => 'Découvrez nos stratégies pour diversifier votre portefeuille et maximiser vos rendements.',
                'content' => '<p>Investir peut sembler intimidant au début, mais avec les bonnes stratégies...</p>',
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path('front/assets/images/news/post-2.png'),
            ],
            [
                'post_category_id' => 3,
                'author_id' => 1,
                'title' => 'Analyse des secteurs porteurs et des opportunités d’investissement sur les...',
                'slug' => Str::slug('Analyse des secteurs porteurs et des opportunités d’investissement sur les...'),
                'excerpt' => '',
                'short_description' => 'Explorez les secteurs en croissance et identifiez les meilleures opportunités pour vos investissements.',
                'content' => '<p>Le marché financier est en constante évolution, et il est crucial de rester informé...</p>',
                'status' => 'published',
                'published_at' => now(),
                'cover_image' => public_path() . '/front/assets/images/news/post-3.png',
            ],
        ];

        foreach ($posts as $post) {
            $data = collect($post)->except(['cover_image'])->toArray();
            $post = Post::create($data);
            
            if (isset($post['cover_image'])) {
                $post->addMedia($post['cover_image'])
                    ->preservingOriginal()
                    ->toMediaCollection('post_images');
            }
        }
    }
}
