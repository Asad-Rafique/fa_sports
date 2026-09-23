<?php

namespace Database\Seeders;

use App\Models\EquipmentCategory;
use Illuminate\Database\Seeder;

class EquipmentCategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['MATCH KITS',    'Jerseys, shorts and trousers built for competition.'],
            ['TRAINING WEAR', 'Tops, shorts and tracksuits for the work before the game.'],
            ['FOOTWEAR',      'Boots, trainers and court shoes for every surface.'],
            ['GLOVES',        'Goalkeeper, boxing, batting and protection gloves.'],
            ['BAGS',          'Kit bags, duffels and backpacks built for travel.'],
            ['SOCKS',         'Compression and match socks in team colours.'],
            ['PROTECTION',    'Guards, pads and padding for contact sports.'],
            ['ACCESSORIES',   'Caps, hats and the small details that finish a kit.'],
        ];

        foreach ($items as $i => [$name, $desc]) {
            EquipmentCategory::updateOrCreate(
                ['slug' => str($name)->slug()],
                [
                    'name' => $name,
                    'description' => $desc,
                    'image' => 'images/team-lab/equipment/'.str($name)->slug().'.jpg',
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}
