<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Seeder;

class DisciplineDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'football' => [
                'statement' => 'SPEED. CONTROL. DOMINANCE.',
                'priorities' => ['Speed', 'Mobility', 'Endurance', 'Control'],
                'indicators' => ['speed' => 90, 'power' => 70, 'mobility' => 85, 'precision' => 75, 'protection' => 60, 'endurance' => 85, 'control' => 90],
                'gear_categories' => ['Jerseys', 'Shorts', 'Football Boots', 'Gloves', 'Training Gear', 'Accessories'],
            ],
            'cricket' => [
                'statement' => 'PRECISION UNDER PRESSURE.',
                'priorities' => ['Precision', 'Stability', 'Reaction', 'Protection'],
                'indicators' => ['speed' => 55, 'power' => 60, 'mobility' => 65, 'precision' => 95, 'protection' => 70, 'endurance' => 80, 'control' => 85],
                'gear_categories' => ['Jerseys', 'Trousers', 'Shoes', 'Gloves', 'Protection', 'Training Gear'],
            ],
            'basketball' => [
                'statement' => 'ELEVATE YOUR GAME.',
                'priorities' => ['Explosiveness', 'Mobility', 'Grip', 'Endurance'],
                'indicators' => ['speed' => 80, 'power' => 75, 'mobility' => 90, 'precision' => 70, 'protection' => 55, 'endurance' => 85, 'control' => 75],
                'gear_categories' => ['Jerseys', 'Shorts', 'Shoes', 'Compression', 'Training Gear'],
            ],
            'boxing' => [
                'statement' => 'POWER. PROTECTION. CONTROL.',
                'priorities' => ['Power', 'Protection', 'Footwork', 'Conditioning'],
                'indicators' => ['speed' => 75, 'power' => 95, 'mobility' => 80, 'precision' => 85, 'protection' => 90, 'endurance' => 88, 'control' => 80],
                'gear_categories' => ['Gloves', 'Shorts', 'Protective Equipment', 'Training Gear', 'Apparel'],
            ],
            'running' => [
                'statement' => 'EVERY SECOND COUNTS.',
                'priorities' => ['Lightweight', 'Breathability', 'Endurance', 'Motion'],
                'indicators' => ['speed' => 85, 'power' => 50, 'mobility' => 70, 'precision' => 40, 'protection' => 35, 'endurance' => 95, 'control' => 55],
                'gear_categories' => ['Running Shoes', 'Performance Tops', 'Shorts', 'Compression', 'Accessories'],
            ],
            'training' => [
                'statement' => 'BUILT BEFORE THE PERFORMANCE.',
                'priorities' => ['Durability', 'Flexibility', 'Strength', 'Recovery'],
                'indicators' => ['speed' => 60, 'power' => 80, 'mobility' => 85, 'precision' => 60, 'protection' => 65, 'endurance' => 80, 'control' => 70],
                'gear_categories' => ['Training Tops', 'Shorts', 'Shoes', 'Accessories', 'Equipment'],
            ],
            'fitness' => [
                'statement' => 'MOVE WITHOUT LIMITATION.',
                'priorities' => ['Comfort', 'Mobility', 'Breathability', 'Performance'],
                'indicators' => ['speed' => 55, 'power' => 65, 'mobility' => 85, 'precision' => 50, 'protection' => 45, 'endurance' => 75, 'control' => 60],
                'gear_categories' => ['Performance Apparel', 'Training Shoes', 'Compression', 'Accessories', 'Recovery Gear'],
            ],
        ];

        foreach ($data as $slug => $fields) {
            Discipline::where('slug', $slug)->update($fields);
        }
    }
}
