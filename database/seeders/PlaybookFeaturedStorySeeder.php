<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class PlaybookFeaturedStorySeeder extends Seeder
{
    public function run(): void
    {
        Article::updateOrCreate(
            ['slug' => 'preparation-is-part-of-performance'],
            [
                'category' => 'PERFORMANCE',

                'title' => 'PREPARATION IS PART OF PERFORMANCE',

                'excerpt' => 'How preparation, fit, fabric, movement and confidence shape performance before the game begins.',

                'cover_image' => 'images/playbook/academies-building-identity.jpg',

                'is_featured' => false,
                'is_trending' => false,
                'is_performance_note' => false,
                'is_discipline_story' => false,
                'team_story' => false,
                'playbook_featured' => true,

                'published_at' => now(),
            ]
        );
    }
}