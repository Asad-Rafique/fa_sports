<?php

namespace Database\Seeders;

use App\Models\GloveType;
use Illuminate\Database\Seeder;

class GloveTypeSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['GOALKEEPER GLOVES', ['GRIP', 'IMPACT', 'FLEX']],
            ['BOXING GLOVES',     ['IMPACT', 'PROTECTION', 'DURABILITY']],
            ['TRAINING GLOVES',   ['GRIP', 'FLEX', 'DURABILITY']],
            ['BATTING GLOVES',    ['CONTROL', 'FLEX', 'PROTECTION']],
            ['PROTECTION GLOVES', ['IMPACT', 'PROTECTION', 'CONTROL']],
        ];

        foreach ($items as $i => [$name, $labels]) {
            GloveType::updateOrCreate(
                ['slug' => str($name)->slug()],
                [
                    'name' => $name,
                    'image' => 'images/team-lab/gloves/'.str($name)->slug().'.jpg',
                    'labels' => $labels,
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}
