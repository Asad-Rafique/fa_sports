<?php

namespace Database\Seeders;

use App\Models\GlobalRegion;
use Illuminate\Database\Seeder;

class ContactGlobalRegionSeeder extends Seeder
{
    public function run(): void
    {
        $points = [
            ['HEAD OFFICE', 'Sialkot, Pakistan', 'Design, development & business operations', 32, 46],
            ['MANUFACTURING', 'Sialkot, Pakistan', 'Full production facility', 34, 48],
            ['EXPORT', 'Multiple regions', 'International shipping & fulfilment', 55, 40],
            ['GLOBAL PARTNERS', 'Growing network', 'Distributors, clubs & academies abroad', 65, 55],
        ];

        foreach ($points as $i => [$region, $market, $connection, $x, $y]) {
            GlobalRegion::updateOrCreate(
                ['region' => $region, 'context' => 'contact'],
                [
                    'market' => $market,
                    'partnership' => $connection,
                    'map_x' => $x,
                    'map_y' => $y,
                    'sort_order' => $i + 1,
                ]
            );
        }
    }
}
