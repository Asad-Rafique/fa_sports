<?php

namespace Database\Seeders;

use App\Models\TeamOrderStage;
use Illuminate\Database\Seeder;

class TeamOrderStageSeeder extends Seeder
{
    public function run(): void
    {
        $stages = [
            [1, 'DISCOVER', 'We learn your sport, squad size, timeline and identity.'],
            [2, 'DESIGN',   'Colours, crest, pattern and player details are built into a full kit design.'],
            [3, 'SAMPLE',   'A physical sample is produced for fit and fabric approval.'],
            [4, 'APPROVE',  'Final sign-off on design, sizing and quantities before production.'],
            [5, 'PRODUCE',  'Full-team production runs through cutting, printing and stitching.'],
            [6, 'DELIVER',  'Quality-checked kits are packed and delivered to your team.'],
        ];

        foreach ($stages as [$step, $name, $desc]) {
            TeamOrderStage::updateOrCreate(
                ['step_number' => $step],
                ['name' => $name, 'description' => $desc]
            );
        }
    }
}
