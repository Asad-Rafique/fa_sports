<?php

namespace Database\Seeders;

use App\Models\FootwearType;
use Illuminate\Database\Seeder;

class FootwearTypeSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['FOOTBALL BOOTS',      'Moulded studs and a soft touch upper for grip and control on grass.'],
            ['TRAINING SHOES',      'Cushioned support built for daily conditioning and agility work.'],
            ['RUNNING SHOES',       'Lightweight, responsive builds engineered for distance and pace.'],
            ['BASKETBALL SHOES',    'Lateral support and cushioning for explosive court movement.'],
            ['INDOOR SPORTS SHOES', 'Non-marking grip soles built for fast indoor surfaces.'],
        ];

        foreach ($items as $i => [$name, $desc]) {
            FootwearType::updateOrCreate(
                ['slug' => str($name)->slug()],
                [
                    'name' => $name,
                    'description' => $desc,
                    'image' => 'images/team-lab/footwear/'.str($name)->slug().'.jpg',
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}
