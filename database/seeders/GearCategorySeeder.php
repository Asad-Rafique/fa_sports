<?php

namespace Database\Seeders;

use App\Models\GearCategory;
use Illuminate\Database\Seeder;

class GearCategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [1, 'MATCH KITS',     'Complete competition kits across every discipline FA SPORTS covers.'],
            [2, 'APPAREL',        'Training shirts, tracksuits, jackets and compression wear.'],
            [3, 'FOOTWEAR',       'Boots and shoes engineered for grip, speed and support.'],
            [4, 'GLOVES',         'Goalkeeper, boxing, batting and training gloves.'],
            [5, 'BAGS',           'Duffels, kit bags, backpacks and equipment bags.'],
            [6, 'PROTECTION',     'Guards, pads and supports for contact and control.'],
            [7, 'TRAINING GEAR',  'Equipment and accessories for the work before the game.'],
            [8, 'ACCESSORIES',    'Socks, caps, wristbands and the small details that finish a kit.'],
        ];

        foreach ($items as [$number, $name, $desc]) {
            GearCategory::updateOrCreate(
                ['slug' => str($name)->slug()],
                [
                    'number' => $number,
                    'name' => $name,
                    'description' => $desc,
                    'image' => 'images/gear-index/categories/'.str($name)->slug().'.jpg',
                    'sort_order' => $number,
                ]
            );
        }
    }
}
