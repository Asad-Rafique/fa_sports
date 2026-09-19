<?php

namespace Database\Seeders;

use App\Models\MaterialSample;
use Illuminate\Database\Seeder;

class MaterialSampleSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Technical Mesh',           'Open-weave panels engineered for airflow without losing structure.'],
            ['Performance Fabric',       'Four-way stretch fabric that moves with the body under load.'],
            ['Reinforced Stitching',     'Flatlock and bar-tack seams built to survive full-contact use.'],
            ['Synthetic Leather',        'Durable, weather-resistant overlays with a natural grip feel.'],
            ['Rubber Sole',              'Compound outsoles tuned for traction across playing surfaces.'],
            ['Foam Padding',             'Shock-absorbing foam used across gloves, guards and footwear.'],
            ['Grip Surfaces',            'Textured palm and sole zones engineered for control under pressure.'],
            ['Water-Resistant Shell',    'Weatherproof outer layers that shed moisture without added weight.'],
        ];

        foreach ($items as $i => [$name, $desc]) {
            MaterialSample::updateOrCreate(
                ['slug' => str($name)->slug()],
                [
                    'name' => $name,
                    'description' => $desc,
                    'image' => 'images/gear-index/materials/'.str($name)->slug().'.jpg',
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}
