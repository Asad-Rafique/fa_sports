<?php

namespace Database\Seeders;

use App\Models\Principle;
use Illuminate\Database\Seeder;

class PlaybookPrincipleSeeder extends Seeder
{
    public function run(): void
    {
        $principles = [
            [
                'PREPARE',
                'The work before the whistle decides what happens after it.',
            ],
            [
                'MOVE',
                'Gear should disappear the moment the game begins.',
            ],
            [
                'PERFORM',
                'Every detail is judged by how it holds up under pressure.',
            ],
            [
                'PERSIST',
                'Consistency across a season matters more than a single match.',
            ],
        ];

        foreach ($principles as $i => [$title, $statement]) {
            Principle::updateOrCreate(
                [
                    'group' => 'playbook',
                    'title' => $title,
                ],
                [
                    'number' => $i + 1,
                    'statement' => $statement,
                    'is_playbook' => true,
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}