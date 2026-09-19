<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class TeamStorySeeder extends Seeder
{
    public function run(): void
    {
        $stories = [
            [
                'title' => 'WHAT A CREST REALLY MEANS',
                'category' => 'TEAMS',
                'excerpt' => 'How a club identity translates into a coordinated kit system.',
            ],
            [
                'title' => 'INSIDE A FULL TEAM PRODUCTION RUN',
                'category' => 'MANUFACTURING',
                'excerpt' => 'From first sample to hundreds of matching kits.',
            ],
            [
                'title' => 'BUILDING TEAMWEAR FOR ACADEMIES',
                'category' => 'TEAMS',
                'excerpt' => 'Sizing, budgets and identity across a full youth programme.',
            ],
        ];

        foreach ($stories as $i => $story) {
            Article::updateOrCreate(
                ['slug' => str($story['title'])->slug()],
                [
                    'category' => $story['category'],
                    'title' => $story['title'],
                    'excerpt' => $story['excerpt'],
                    'cover_image' => 'images/playbook/' . str($story['title'])->slug() . '.jpg',
                    'is_featured' => false,
                    'is_trending' => false,
                    'is_performance_note' => false,
                    'is_discipline_story' => false,
                    'published_at' => now()->subDays($i + 1),
                ]
            );
        }
    }
}