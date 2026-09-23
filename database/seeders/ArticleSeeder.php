<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::updateOrCreate(
            ['slug' => 'the-anatomy-of-preparation'],
            [
                'category' => 'PERFORMANCE',
                'title' => 'THE ANATOMY OF PREPARATION',
                'excerpt' => 'Inside the ninety minutes before kickoff that decide the ninety after.',
                'cover_image' => 'images/playbook/anatomy-of-preparation.jpg',
                'is_featured' => true,
                'is_trending' => true,
                'published_at' => now()->subDays(1),
            ]
        );

        $rest = [
            ['GEAR', 'INSIDE THE FA-X PRO FABRIC', 'fa-x-pro-fabric'],
            ['TEAMS', 'HOW ACADEMIES ARE BUILDING IDENTITY', 'academies-building-identity'],
            ['MANUFACTURING', 'FROM PATTERN TO PITCH', 'pattern-to-pitch'],
            ['INNOVATION', 'THE SCIENCE OF MOISTURE CONTROL', 'science-of-moisture-control'],
        ];

        foreach ($rest as $i => [$category, $title, $slug]) {
            Article::updateOrCreate(
                ['slug' => $slug],
                [
                    'category' => $category,
                    'title' => $title,
                    'excerpt' => null,
                    'cover_image' => "images/playbook/{$slug}.jpg",
                    'is_featured' => false,
                    'is_trending' => $i % 2 === 0,
                    'published_at' => now()->subDays($i + 2),
                ]
            );
        }
    }
}
