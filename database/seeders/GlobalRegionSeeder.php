<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GlobalRegion;

class GlobalRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'region' => 'South Asia',
                'market' => 'Pakistan, India, Bangladesh, Sri Lanka',
                'product_system' => 'Teamwear, Match Kits, Training Gear, Performance Apparel',
                'partnership' => 'Manufacturing, Teamwear, Distribution',
                'map_x' => 72,
                'map_y' => 48,
                'sort_order' => 1,
            ],

            [
                'region' => 'Middle East',
                'market' => 'UAE, Saudi Arabia, Qatar, Oman, Kuwait',
                'product_system' => 'Custom Teamwear, Football Kits, Cricket Kits, Training Gear',
                'partnership' => 'Clubs, Academies, Distributors',
                'map_x' => 61,
                'map_y' => 43,
                'sort_order' => 2,
            ],

            [
                'region' => 'Europe',
                'market' => 'United Kingdom, Germany, France, Italy, Spain',
                'product_system' => 'Performance Apparel, Match Kits, Training Systems',
                'partnership' => 'Clubs, Brands, Teamwear Partners',
                'map_x' => 47,
                'map_y' => 32,
                'sort_order' => 3,
            ],

            [
                'region' => 'North America',
                'market' => 'United States, Canada, Mexico',
                'product_system' => 'Teamwear, Training Apparel, Custom Sportswear',
                'partnership' => 'Teams, Academies, Sports Organizations',
                'map_x' => 24,
                'map_y' => 35,
                'sort_order' => 4,
            ],

            [
                'region' => 'Africa',
                'market' => 'South Africa, Nigeria, Kenya, Ghana, Morocco',
                'product_system' => 'Football Kits, Teamwear, Training Gear',
                'partnership' => 'Clubs, Academies, Regional Partners',
                'map_x' => 48,
                'map_y' => 59,
                'sort_order' => 5,
            ],

            [
                'region' => 'Oceania',
                'market' => 'Australia, New Zealand',
                'product_system' => 'Teamwear, Cricket Kits, Performance Apparel',
                'partnership' => 'Clubs, Schools, Teamwear Partners',
                'map_x' => 82,
                'map_y' => 70,
                'sort_order' => 6,
            ],
        ];

        foreach ($regions as $region) {
            GlobalRegion::create($region);
        }
    }
}