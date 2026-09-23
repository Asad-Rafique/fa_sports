<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PerformanceGearProductSeeder extends Seeder
{
    public function run(): void
    {
        $football = Discipline::where('slug', 'football')->first();
        $training = Discipline::where('slug', 'training')->first();
        $running  = Discipline::where('slug', 'running')->first();
        $boxing   = Discipline::where('slug', 'boxing')->first();

        /* ---------- FEATURED STORYTELLING (large cinematic, one-by-one) ---------- */
        $storytelling = [
            [
                'name' => 'FA PRO PERFORMANCE JERSEY',
                'category' => 'Performance Apparel',
                'discipline_id' => $football?->id,
                'specs' => ['LIGHTWEIGHT FABRIC', 'MOISTURE MANAGEMENT', 'BREATHABLE CONSTRUCTION', 'FLEXIBLE MOVEMENT', 'PROFESSIONAL FIT'],
                'colors' => ['Black', 'White', 'Red'],
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'price' => 48.00,
                'image' => 'images/gear/fa-pro-performance-jersey.jpg',
                'performance_index' => ['speed' => 88, 'mobility' => 92, 'breathability' => 90, 'durability' => 82, 'comfort' => 91],
                'sort' => 1,
            ],
            [
                'name' => 'FA-RUN CARBON FOOTWEAR',
                'category' => 'Footwear',
                'discipline_id' => $running?->id,
                'specs' => ['CARBON PLATE', 'RESPONSIVE FOAM', 'LOW PROFILE', 'LOCKED-IN FIT'],
                'colors' => ['Black', 'Red'],
                'sizes' => ['UK6', 'UK7', 'UK8', 'UK9', 'UK10', 'UK11'],
                'price' => 134.00,
                'image' => 'images/gear/fa-run-carbon-footwear.jpg',
                'performance_index' => ['speed' => 95, 'mobility' => 85, 'breathability' => 70, 'durability' => 88, 'comfort' => 80],
                'sort' => 2,
            ],
            [
                'name' => 'FA-GRIP IMPACT GLOVE',
                'category' => 'Gloves & Protection',
                'discipline_id' => $boxing?->id,
                'specs' => ['REINFORCED PALM', 'IMPACT PADDING', 'FLEX PANELS', 'ALL-WEATHER GRIP'],
                'colors' => ['Black', 'White'],
                'sizes' => ['S', 'M', 'L'],
                'price' => 32.00,
                'image' => 'images/gear/fa-grip-impact-glove.jpg',
                'performance_index' => ['speed' => 70, 'mobility' => 88, 'breathability' => 65, 'durability' => 90, 'comfort' => 84],
                'sort' => 3,
            ],
            [
                'name' => 'FA-SQUAD TRAINING TRACKSUIT',
                'category' => 'Training',
                'discipline_id' => $training?->id,
                'specs' => ['THERMAL LINING', 'ZIP VENTS', 'TAPERED CUT', 'FOUR-WAY STRETCH'],
                'colors' => ['Black', 'Red', 'White'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'price' => 72.00,
                'image' => 'images/gear/fa-squad-training-tracksuit.jpg',
                'performance_index' => ['speed' => 75, 'mobility' => 90, 'breathability' => 80, 'durability' => 85, 'comfort' => 93],
                'sort' => 4,
            ],
        ];

        foreach ($storytelling as $item) {
            Product::updateOrCreate(
                ['slug' => str($item['name'])->slug()],
                [
                    'series' => 'PERFORMANCE SERIES',
                    'name' => $item['name'],
                    'category' => $item['category'],
                    'discipline_id' => $item['discipline_id'],
                    'specs' => $item['specs'],
                    'colors' => $item['colors'],
                    'sizes' => $item['sizes'],
                    'price' => $item['price'],
                    'image' => $item['image'],
                    'gallery' => [$item['image']],
                    'performance_index' => $item['performance_index'],
                    'show_performance_index' => true,
                    'is_featured' => true,
                    'is_storytelling' => true,
                    'is_white_section' => false,
                    'sort_order' => $item['sort'],
                ]
            );
        }

        /* ---------- MAIN CATALOG (asymmetric grid, across all 5 categories) ---------- */
        $catalog = [
            ['FA-CORE COMPRESSION BASE', 'Performance Apparel', ['4-WAY STRETCH', 'FLATLOCK SEAMS'], 26.00, 1],
            ['FA-VENT TRAINING TEE', 'Performance Apparel', ['MESH VENTS', 'QUICK-DRY'], 22.00, 2],
            ['FA-SHIELD RAIN JACKET', 'Performance Apparel', ['WATER RESISTANT', 'PACKABLE'], 58.00, 3],
            ['FA-STRIDE TRAINER', 'Footwear', ['CUSHIONED SOLE', 'BREATHABLE MESH'], 89.00, 4],
            ['FA-PITCH BOOT', 'Footwear', ['MOULDED STUDS', 'SOFT TOUCH UPPER'], 96.00, 5],
            ['FA-COURT LOW', 'Footwear', ['LATERAL SUPPORT', 'GRIP OUTSOLE'], 78.00, 6],
            ['FA-STRIKE BOXING GLOVE', 'Gloves & Protection', ['SHOCK ABSORBING', 'WRIST WRAP'], 44.00, 7],
            ['FA-SHIN GUARD PRO', 'Gloves & Protection', ['LIGHTWEIGHT SHELL', 'SECURE STRAP'], 19.00, 8],
            ['FA-GRIP FIELD GLOVE', 'Gloves & Protection', ['TACKY PALM', 'BREATHABLE BACK'], 24.00, 9],
            ['FA-BUILD RESISTANCE SET', 'Training', ['3 RESISTANCE LEVELS', 'PORTABLE'], 21.00, 10],
            ['FA-FOCUS TRAINING VEST', 'Training', ['ADJUSTABLE FIT', 'HIGH VISIBILITY'], 27.00, 11],
            ['FA-AGILITY LADDER', 'Training', ['QUICK SETUP', 'DURABLE RUNGS'], 18.00, 12],
            ['FA-CREST CAP', 'Accessories', ['CURVED PEAK', 'SWEAT-WICK BAND'], 16.00, 13],
            ['FA-CARRY KIT BAG', 'Accessories', ['VENTED BOOT POCKET', 'REINFORCED BASE'], 34.00, 14],
            ['FA-GRIP SOCK', 'Accessories', ['ANTI-SLIP SOLE', 'CUSHIONED HEEL'], 9.00, 15],
        ];

        foreach ($catalog as [$name, $category, $specs, $price, $sort]) {
            Product::updateOrCreate(
                ['slug' => str($name)->slug()],
                [
                    'series' => null,
                    'name' => $name,
                    'category' => $category,
                    'discipline_id' => null,
                    'specs' => $specs,
                    'colors' => ['Black', 'White', 'Red'],
                    'sizes' => ['S', 'M', 'L', 'XL'],
                    'price' => $price,
                    'image' => 'images/gear/catalog/'.str($name)->slug().'.jpg',
                    'gallery' => ['images/gear/catalog/'.str($name)->slug().'.jpg'],
                    'performance_index' => [
                        'speed' => rand(65, 95),
                        'mobility' => rand(65, 95),
                        'breathability' => rand(60, 95),
                        'durability' => rand(70, 95),
                        'comfort' => rand(70, 95),
                    ],
                    'show_performance_index' => $sort % 3 === 0, // only some products carry the index badge
                    'is_featured' => false,
                    'is_storytelling' => false,
                    'is_white_section' => false,
                    'sort_order' => $sort,
                ]
            );
        }
    }
}
