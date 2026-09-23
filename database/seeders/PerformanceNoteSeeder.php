<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class PerformanceNoteSeeder extends Seeder
{
    public function run(): void
    {
        $notes = [
            [
                'title' => 'HOW ATHLETES PREPARE BEFORE THE GAME',
                'category' => 'PERFORMANCE',
                'excerpt' => 'The routines, rituals and gear choices that happen before the whistle.',
            ],
            [
                'title' => 'WHAT MAKES A PERFORMANCE FABRIC DIFFERENT?',
                'category' => 'INNOVATION',
                'excerpt' => 'Inside the weave, the finish and the testing behind FA SPORTS textiles.',
            ],
            [
                'title' => 'THE SCIENCE BEHIND BETTER MOVEMENT',
                'category' => 'PERFORMANCE',
                'excerpt' => 'How flexibility, fit and fabric mechanics combine to support motion.',
            ],
        ];

        foreach ($notes as $i => $note) {
            Article::updateOrCreate(
                ['slug' => str($note['title'])->slug()],
                [
                    'category' => $note['category'],
                    'title' => $note['title'],
                    'excerpt' => $note['excerpt'],
                    'cover_image' => 'images/playbook/'.str($note['title'])->slug().'.jpg',
                    'is_featured' => false,
                    'is_trending' => false,
                    'is_performance_note' => true,
                    'published_at' => now()->subDays($i + 1),
                ]
            );
        }
    }
}
