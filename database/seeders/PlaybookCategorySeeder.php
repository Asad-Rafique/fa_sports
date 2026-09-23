<?php

namespace Database\Seeders;

use App\Models\PlaybookCategory;
use Illuminate\Database\Seeder;

class PlaybookCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [1, 'PERFORMANCE', 'How fabric, fit and movement come together on the field.'],
            [2, 'TEAMWEAR', 'Stories on identity, kits and building a team as one system.'],
            [3, 'MINDSET', 'The preparation and discipline that happen before the game.'],
            [4, 'CRAFT', 'The manufacturing precision behind every piece FA SPORTS makes.'],
        ];

        foreach ($categories as [$number, $name, $desc]) {
            PlaybookCategory::updateOrCreate(
                ['slug' => str($name)->slug()],
                ['number' => $number, 'name' => $name, 'description' => $desc, 'sort_order' => $number]
            );
        }
    }
}
