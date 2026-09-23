<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class DisciplineStorySeeder extends Seeder
{
    public function run(): void
    {
        $stories = [
            ['title' => 'THE WORK BEFORE THE WHISTLE',        'category' => 'SPORT',          'excerpt' => 'What happens in the hour every athlete keeps private.'],
            ['title' => 'WHY FOOTBALLERS TRAIN DIFFERENT',     'category' => 'SPORT',          'excerpt' => 'The conditioning demands unique to ninety minutes of football.'],
            ['title' => 'THE PRECISION BEHIND CRICKET',        'category' => 'SPORT',          'excerpt' => 'Why stillness and control matter as much as power.'],
            ['title' => "INSIDE THE BOXER'S PREPARATION",      'category' => 'SPORT',          'excerpt' => 'Discipline, footwork and the conditioning behind every round.'],
            ['title' => 'RUNNING BEYOND THE CLOCK',             'category' => 'SPORT',          'excerpt' => 'What separates a good stride from an engineered one.'],
        ];

        foreach ($stories as $i => $story) {
            Article::updateOrCreate(
                ['slug' => str($story['title'])->slug()],
                [
                    'category' => $story['category'],
                    'title' => $story['title'],
                    'excerpt' => $story['excerpt'],
                    'cover_image' => 'images/playbook/'.str($story['title'])->slug().'.jpg',
                    'is_featured' => false,
                    'is_trending' => false,
                    'is_performance_note' => false,
                    'is_discipline_story' => true,
                    'published_at' => now()->subDays($i + 1),
                ]
            );
        }
    }
}
