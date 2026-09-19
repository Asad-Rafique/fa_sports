<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'FOOTBALL',   'tagline' => 'Ninety minutes. Zero hesitation.',   'sort' => 1],
            ['name' => 'CRICKET',    'tagline' => 'Built for the long innings.',         'sort' => 2],
            ['name' => 'BASKETBALL', 'tagline' => 'Cut. Rise. Finish.',                  'sort' => 3],
            ['name' => 'BOXING',     'tagline' => 'Discipline before impact.',           'sort' => 4],
            ['name' => 'RUNNING',    'tagline' => 'Every stride, engineered.',           'sort' => 5],
            ['name' => 'TRAINING',   'tagline' => 'Where the game gets built.',          'sort' => 6],
            ['name' => 'FITNESS',    'tagline' => 'Strength has a uniform.',             'sort' => 7],
        ];

        foreach ($items as $item) {
            Discipline::updateOrCreate(
                ['slug' => str($item['name'])->slug()],
                [
                    'name' => $item['name'],
                    'tagline' => $item['tagline'],
                    'cover_image' => 'images/disciplines/'.str($item['name'])->slug().'.jpg',
                    'cover_video' => 'videos/disciplines/'.str($item['name'])->slug().'.mp4',
                    'sort_order' => $item['sort'],
                ]
            );
        }
    }
}
