<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GearIndexProductSeeder extends Seeder
{
    public function run(): void
    {
        $sportId = fn (string $slug) => Discipline::where('slug', $slug)->value('id');

        $products = [
            // ---------- MATCH KITS ----------
            ['name' => 'FA-X PRO MATCH JERSEY',   'category' => 'Match Kits', 'product_type' => 'Jersey',   'sport' => 'football',   'material' => 'Technical Mesh',       'level' => 'Elite',    'price' => 52,  'new' => true,  'featured' => true],
            ['name' => 'FA-CREST MATCH SHORTS',    'category' => 'Match Kits', 'product_type' => 'Shorts',   'sport' => 'football',   'material' => 'Performance Fabric',   'level' => 'Pro',      'price' => 28,  'new' => false, 'featured' => false],
            ['name' => 'FA-WICKET CRICKET WHITES', 'category' => 'Match Kits', 'product_type' => 'Jersey',   'sport' => 'cricket',    'material' => 'Performance Fabric',   'level' => 'Pro',      'price' => 58,  'new' => false, 'featured' => false],
            ['name' => 'FA-COURT BASKETBALL JERSEY','category'=> 'Match Kits', 'product_type' => 'Jersey',   'sport' => 'basketball', 'material' => 'Technical Mesh',       'level' => 'Pro',      'price' => 46,  'new' => true,  'featured' => false],
            ['name' => 'FA-RING BOXING SHORTS',     'category' => 'Match Kits','product_type' => 'Shorts',   'sport' => 'boxing',     'material' => 'Performance Fabric',   'level' => 'Elite',    'price' => 38,  'new' => false, 'featured' => false],

            // ---------- APPAREL ----------
            ['name' => 'FA-VENT TRAINING SHIRT',   'category' => 'Apparel', 'product_type' => 'Training Shirt', 'sport' => 'training', 'material' => 'Technical Mesh',     'level' => 'Standard', 'price' => 24, 'new' => false, 'featured' => false],
            ['name' => 'FA-SQUAD TRACKSUIT',        'category' => 'Apparel', 'product_type' => 'Tracksuit',      'sport' => 'training', 'material' => 'Performance Fabric', 'level' => 'Pro',      'price' => 72, 'new' => false, 'featured' => true],
            ['name' => 'FA-SHIELD SPORTS JACKET',   'category' => 'Apparel', 'product_type' => 'Jacket',         'sport' => 'running',  'material' => 'Water-Resistant Shell','level' => 'Elite',    'price' => 64, 'new' => true,  'featured' => false],
            ['name' => 'FA-CORE COMPRESSION TOP',   'category' => 'Apparel', 'product_type' => 'Compression Wear','sport' => 'fitness',  'material' => 'Performance Fabric', 'level' => 'Pro',      'price' => 26, 'new' => false, 'featured' => false],

            // ---------- FOOTWEAR ----------
            ['name' => 'FA-PITCH FOOTBALL BOOT',    'category' => 'Footwear', 'product_type' => 'Football Boots', 'sport' => 'football',   'material' => 'Synthetic Leather', 'level' => 'Elite', 'price' => 96,  'new' => true,  'featured' => true],
            ['name' => 'FA-RUN CARBON RUNNER',      'category' => 'Footwear', 'product_type' => 'Running Shoes',  'sport' => 'running',    'material' => 'Rubber Sole',       'level' => 'Elite', 'price' => 134, 'new' => false, 'featured' => true],
            ['name' => 'FA-COURT LOW BASKETBALL',   'category' => 'Footwear', 'product_type' => 'Basketball Shoes','sport' => 'basketball', 'material' => 'Rubber Sole',       'level' => 'Pro',    'price' => 89,  'new' => false, 'featured' => false],
            ['name' => 'FA-STRIDE TRAINING SHOE',   'category' => 'Footwear', 'product_type' => 'Training Shoes', 'sport' => 'training',   'material' => 'Foam Padding',       'level' => 'Standard','price' => 78,  'new' => false, 'featured' => false],
            ['name' => 'FA-FLOOR INDOOR SHOE',      'category' => 'Footwear', 'product_type' => 'Indoor Shoes',   'sport' => 'fitness',    'material' => 'Grip Surfaces',      'level' => 'Standard','price' => 68,  'new' => true,  'featured' => false],

            // ---------- GLOVES ----------
            ['name' => 'FA-WALL GOALKEEPER GLOVE',  'category' => 'Gloves', 'product_type' => 'Goalkeeper Gloves', 'sport' => 'football', 'material' => 'Grip Surfaces', 'level' => 'Elite', 'price' => 42, 'new' => false, 'featured' => true],
            ['name' => 'FA-STRIKE BOXING GLOVE',    'category' => 'Gloves', 'product_type' => 'Boxing Gloves',     'sport' => 'boxing',    'material' => 'Foam Padding',   'level' => 'Elite', 'price' => 46, 'new' => false, 'featured' => false],
            ['name' => 'FA-BAT BATTING GLOVE',      'category' => 'Gloves', 'product_type' => 'Batting Gloves',    'sport' => 'cricket',   'material' => 'Foam Padding',   'level' => 'Pro',   'price' => 34, 'new' => true,  'featured' => false],
            ['name' => 'FA-GRIP TRAINING GLOVE',    'category' => 'Gloves', 'product_type' => 'Training Gloves',   'sport' => 'training',  'material' => 'Grip Surfaces',  'level' => 'Standard','price' => 22,'new' => false, 'featured' => false],

            // ---------- BAGS ----------
            ['name' => 'FA-CARRY DUFFEL BAG',       'category' => 'Bags', 'product_type' => 'Duffel Bag',       'sport' => null,      'material' => 'Water-Resistant Shell', 'level' => 'Pro', 'price' => 38, 'new' => false, 'featured' => true],
            ['name' => 'FA-SQUAD KIT BAG',          'category' => 'Bags', 'product_type' => 'Football Kit Bag', 'sport' => 'football','material' => 'Reinforced Stitching',  'level' => 'Pro', 'price' => 44, 'new' => false, 'featured' => false],
            ['name' => 'FA-MOVE BACKPACK',          'category' => 'Bags', 'product_type' => 'Backpack',         'sport' => null,      'material' => 'Water-Resistant Shell', 'level' => 'Standard','price' => 32,'new' => true, 'featured' => false],
            ['name' => 'FA-GEAR EQUIPMENT BAG',     'category' => 'Bags', 'product_type' => 'Equipment Bag',    'sport' => 'training', 'material' => 'Reinforced Stitching', 'level' => 'Elite', 'price' => 56, 'new' => false, 'featured' => false],

            // ---------- PROTECTION ----------
            ['name' => 'FA-SHIN GUARD PRO',         'category' => 'Protection', 'product_type' => 'Shin Guards',    'sport' => 'football', 'material' => 'Foam Padding', 'level' => 'Pro',   'price' => 19, 'new' => false, 'featured' => false],
            ['name' => 'FA-KNEE SUPPORT',           'category' => 'Protection', 'product_type' => 'Knee Protection','sport' => 'training',  'material' => 'Performance Fabric', 'level' => 'Standard','price' => 17,'new' => false, 'featured' => false],
            ['name' => 'FA-ELBOW GUARD',            'category' => 'Protection', 'product_type' => 'Elbow Protection','sport' => 'basketball','material' => 'Foam Padding', 'level' => 'Standard','price' => 16,'new' => true, 'featured' => false],
            ['name' => 'FA-STRIKE HEAD GUARD',      'category' => 'Protection', 'product_type' => 'Protective Equipment', 'sport' => 'boxing', 'material' => 'Foam Padding', 'level' => 'Elite', 'price' => 48, 'new' => false, 'featured' => false],

            // ---------- TRAINING GEAR ----------
            ['name' => 'FA-BUILD RESISTANCE SET',   'category' => 'Training Gear', 'product_type' => 'Training Equipment', 'sport' => 'training', 'material' => 'Grip Surfaces', 'level' => 'Standard', 'price' => 21, 'new' => false, 'featured' => false],
            ['name' => 'FA-AGILITY LADDER',         'category' => 'Training Gear', 'product_type' => 'Training Equipment', 'sport' => 'training', 'material' => 'Reinforced Stitching', 'level' => 'Standard', 'price' => 18, 'new' => false, 'featured' => false],
            ['name' => 'FA-FOCUS TRAINING VEST',    'category' => 'Training Gear', 'product_type' => 'Training Accessories', 'sport' => 'training', 'material' => 'Technical Mesh', 'level' => 'Standard', 'price' => 27, 'new' => true, 'featured' => false],

            // ---------- ACCESSORIES ----------
            ['name' => 'FA-GRIP MATCH SOCK',        'category' => 'Accessories', 'product_type' => 'Socks',      'sport' => null, 'material' => 'Performance Fabric', 'level' => 'Standard', 'price' => 9,  'new' => false, 'featured' => false],
            ['name' => 'FA-CREST CAP',              'category' => 'Accessories', 'product_type' => 'Caps',       'sport' => null, 'material' => 'Technical Mesh',     'level' => 'Standard', 'price' => 16, 'new' => false, 'featured' => false],
            ['name' => 'FA-FOCUS WRISTBAND',        'category' => 'Accessories', 'product_type' => 'Wristbands', 'sport' => null, 'material' => 'Performance Fabric', 'level' => 'Standard', 'price' => 7,  'new' => true,  'featured' => false],
            ['name' => 'FA-HYDRATE SPORTS BOTTLE',  'category' => 'Accessories', 'product_type' => 'Sports Bottles','sport' => null,'material' => 'Water-Resistant Shell','level' => 'Standard', 'price' => 12, 'new' => false, 'featured' => false],
        ];

        foreach ($products as $i => $p) {
            $slug = str($p['name'])->slug();

            Product::updateOrCreate(
                ['slug' => $slug],
                [
                    'discipline_id' => $p['sport'] ? $sportId($p['sport']) : null,
                    'category' => $p['category'],
                    'product_type' => $p['product_type'],
                    'material' => $p['material'],
                    'performance_level' => $p['level'],
                    'series' => null,
                    'name' => $p['name'],
                    'description' => null,
                    'specs' => [$p['material'], $p['level'].' PERFORMANCE LEVEL'],
                    'technical_specs' => [
                        'Material' => $p['material'],
                        'Performance Level' => $p['level'],
                        'Sport' => $p['sport'] ? ucfirst($p['sport']) : 'All Sports',
                    ],
                    'colors' => ['Black', 'White', 'Red'],
                    'sizes' => in_array($p['category'], ['Bags', 'Accessories']) ? ['One Size'] : ['S', 'M', 'L', 'XL'],
                    'price' => $p['price'],
                    'image' => 'images/gear-index/products/'.$slug.'.jpg',
                    'gallery' => [
                        'images/gear-index/products/'.$slug.'-1.jpg',
                        'images/gear-index/products/'.$slug.'-2.jpg',
                    ],
                    'performance_index' => null,
                    'show_performance_index' => false,
                    'compare_metrics' => [
                        'weight' => rand(60, 95),
                        'durability' => rand(65, 95),
                        'flexibility' => rand(60, 95),
                        'breathability' => rand(55, 95),
                        'grip' => rand(60, 95),
                        'performance_level' => $p['level'] === 'Elite' ? 95 : ($p['level'] === 'Pro' ? 82 : 68),
                    ],
                    'is_featured' => $p['featured'],
                    'is_storytelling' => false,
                    'is_new' => $p['new'],
                    'status' => 'active',
                    'is_white_section' => false,
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}
