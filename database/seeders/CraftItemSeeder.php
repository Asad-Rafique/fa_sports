<?php

namespace Database\Seeders;

use App\Models\CraftItem;
use Illuminate\Database\Seeder;

class CraftItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            // THE MAKING
            ['making', 1, 'SELECT', 'Premium fabrics selected for movement, comfort and durability.'],
            ['making', 2, 'CUT', 'Precision cutting creates the foundation of every garment.'],
            ['making', 3, 'BUILD', 'Panels, seams and details are assembled with purpose.'],
            ['making', 4, 'FINISH', 'Every piece is checked, refined and prepared for the game.'],

            // WHAT'S INSIDE MATTERS (material)
            ['material', null, 'BREATHABLE', 'Designed to keep airflow moving.'],
            ['material', null, 'LIGHTWEIGHT', 'Reduced weight without compromising durability.'],
            ['material', null, 'FLEXIBLE', 'Built to move naturally with the athlete.'],

            // DETAILS MATTER
            ['details', null, 'PRECISION STITCHING', 'Clean construction designed for repeated movement.'],
            ['details', null, 'SMART PANELING', 'Every panel has a purpose.'],
            ['details', null, 'FINISHING', 'Small details create the final difference.'],

            // THE FA STANDARD
            ['standard', 1, 'FIT', 'Engineered to the body, not around it.'],
            ['standard', 2, 'DURABILITY', 'Built to survive full seasons of use.'],
            ['standard', 3, 'COMFORT', 'Nothing gets in the way of the game.'],
            ['standard', 4, 'PERFORMANCE', 'Judged by how it holds up under pressure.'],
        ];

        foreach ($items as $i => [$section, $number, $title, $desc]) {
            CraftItem::updateOrCreate(
                ['section' => $section, 'title' => $title],
                ['number' => $number, 'description' => $desc, 'sort_order' => $i + 1]
            );
        }
    }
}
