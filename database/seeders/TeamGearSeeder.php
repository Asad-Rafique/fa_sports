<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Seeder;

class TeamGearSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'football'   => ['Custom Jersey', 'Shorts', 'Socks', 'Football Boots', 'Goalkeeper Gloves', 'Sports Bag'],
            'cricket'    => ['Cricket Jersey', 'Trousers', 'Shoes', 'Batting Gloves', 'Protective Equipment', 'Kit Bag'],
            'basketball' => ['Jersey', 'Shorts', 'Basketball Shoes', 'Socks', 'Warm-Up Jacket', 'Team Bag'],
            'boxing'     => ['Boxing Shorts', 'Performance Top', 'Boxing Gloves', 'Hand Wraps', 'Protective Equipment', 'Training Bag'],
            'running'    => ['Running Top', 'Shorts', 'Running Shoes', 'Socks', 'Lightweight Jacket', 'Race Accessories'],
            'training'   => ['Training Shirt', 'Shorts', 'Tracksuit', 'Training Shoes', 'Gym Bag', 'Gloves'],
            'fitness'    => ['Performance Apparel', 'Shoes', 'Bag', 'Gloves', 'Compression Wear', 'Training Accessories'],
        ];

        foreach ($data as $slug => $gear) {
            Discipline::where('slug', $slug)->update(['team_gear' => $gear]);
        }
    }
}
