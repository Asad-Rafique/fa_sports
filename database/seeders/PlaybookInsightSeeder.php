<?php

namespace Database\Seeders;

use App\Models\PlaybookInsight;
use Illuminate\Database\Seeder;

class PlaybookInsightSeeder extends Seeder
{
    public function run(): void
    {
        $insights = [
            ['FIT', '360°', 'Freedom of movement built around the athlete.'],
            ['CONTROL', '0.3s', 'Fast moisture control when intensity rises.'],
            ['DURABILITY', '300+', 'Built to perform through repeated use.'],
        ];

        foreach ($insights as $i => [$label, $metric, $desc]) {
            PlaybookInsight::updateOrCreate(
                ['label' => $label],
                ['metric' => $metric, 'description' => $desc, 'sort_order' => $i + 1]
            );
        }
    }
}
