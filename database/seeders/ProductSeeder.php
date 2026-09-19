<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $football = Discipline::where('slug', 'football')->first();
        $training = Discipline::where('slug', 'training')->first();
        $running  = Discipline::where('slug', 'running')->first();

        $dark = [
            [
                'series' => 'PERFORMANCE SERIES',
                'name' => 'FA-X PRO JERSEY',
                'discipline_id' => $football?->id,
                'specs' => ['LIGHTWEIGHT', 'BREATHABLE', 'MOISTURE CONTROL', 'ATHLETIC FIT'],
                'price' => 42.00,
                'image' => 'images/products/fa-x-pro-jersey.jpg',
                'is_featured' => true,
                'sort' => 1,
            ],
            [
                'series' => 'TRAINING SERIES',
                'name' => 'FA-GRIP TRAINING GLOVE',
                'discipline_id' => $training?->id,
                'specs' => ['REINFORCED PALM', 'FLEX PANELS', 'ALL-WEATHER GRIP'],
                'price' => 28.00,
                'image' => 'images/products/fa-grip-glove.jpg',
                'is_featured' => true,
                'sort' => 2,
            ],
            [
                'series' => 'MOTION SERIES',
                'name' => 'FA-RUN CARBON SHOE',
                'discipline_id' => $running?->id,
                'specs' => ['CARBON PLATE', 'RESPONSIVE FOAM', 'LOW PROFILE'],
                'price' => 129.00,
                'image' => 'images/products/fa-run-carbon.jpg',
                'is_featured' => true,
                'sort' => 3,
            ],
            [
                'series' => 'TEAMWEAR SERIES',
                'name' => 'FA-SQUAD TRACKSUIT',
                'discipline_id' => $training?->id,
                'specs' => ['THERMAL LINING', 'ZIP VENTS', 'TAPERED CUT'],
                'price' => 68.00,
                'image' => 'images/products/fa-squad-tracksuit.jpg',
                'is_featured' => true,
                'sort' => 4,
            ],
        ];

        foreach ($dark as $item) {
            Product::updateOrCreate(
                ['slug' => str($item['name'])->slug()],
                [
                    'series' => $item['series'],
                    'name' => $item['name'],
                    'discipline_id' => $item['discipline_id'],
                    'description' => null,
                    'specs' => $item['specs'],
                    'price' => $item['price'],
                    'image' => $item['image'],
                    'is_featured' => true,
                    'is_white_section' => false,
                    'sort_order' => $item['sort'],
                ]
            );
        }

        $white = [
            [
                'series' => 'ESSENTIALS',
                'name' => 'FA-CORE SHORT',
                'specs' => ['STRETCH WOVEN', 'SIDE POCKET', 'DRAWCORD'],
                'price' => 24.00,
                'image' => 'images/products/fa-core-short.jpg',
                'sort' => 1,
            ],
            [
                'series' => 'ESSENTIALS',
                'name' => 'FA-BASE COMPRESSION TOP',
                'specs' => ['FOUR-WAY STRETCH', 'FLATLOCK SEAMS'],
                'price' => 22.00,
                'image' => 'images/products/fa-base-top.jpg',
                'sort' => 2,
            ],
            [
                'series' => 'ESSENTIALS',
                'name' => 'FA-CREST CAP',
                'specs' => ['CURVED PEAK', 'SWEAT-WICK BAND'],
                'price' => 16.00,
                'image' => 'images/products/fa-crest-cap.jpg',
                'sort' => 3,
            ],
        ];

        foreach ($white as $item) {
            Product::updateOrCreate(
                ['slug' => str($item['name'])->slug()],
                [
                    'series' => $item['series'],
                    'name' => $item['name'],
                    'discipline_id' => null,
                    'description' => null,
                    'specs' => $item['specs'],
                    'price' => $item['price'],
                    'image' => $item['image'],
                    'is_featured' => false,
                    'is_white_section' => true,
                    'sort_order' => $item['sort'],
                ]
            );
        }
    }
}
