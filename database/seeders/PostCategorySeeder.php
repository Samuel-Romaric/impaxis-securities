<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostCategory;
use Illuminate\Support\Str;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'name' => 'Bourse',
                'slug' => Str::slug('Bourse'),
                'description' => 'Articles et analyses sur les marchés boursiers, les actions et les tendances économiques.',
                'is_active' => true,
            ],
            [
                'name' => 'Invertissements',
                'slug' => Str::slug('Invertissements'),
                'description' => 'Conseils et stratégies pour investir dans différents secteurs et marchés.',
                'is_active' => true,
            ],
            [
                'name' => 'Marché financier',
                'slug' => Str::slug('Marché financier'),
                'description' => 'Articles et conseils sur l\'industrie et les tendances du marché.',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            PostCategory::create($category);
        }
    }
}
