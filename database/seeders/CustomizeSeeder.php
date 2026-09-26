<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomizeRequest;

class CustomizeSeeder extends Seeder
{
    public function run(): void
    {
        CustomizeRequest::create([
            'sport' => 'Football',
            'kit_type' => 'Match Kit',

            'team_name' => 'FA Academy',
            'contact_name' => 'FA Sports Team',
            'email' => 'info@fasports.com',
            'phone' => '+92 300 0000000',

            'primary_color' => '#E10600',
            'secondary_color' => '#000000',
            'accent_color' => '#FFFFFF',

            'player_name' => 'FA PLAYER',
            'player_number' => '10',

            'logo_required' => true,
            'player_names' => true,
            'player_numbers' => true,

            'quantity' => 20,

            'fabric' => 'Performance Dry',

            'performance_requirements' =>
                'Breathability, moisture control, lightweight construction and 4-way flexibility.',

            'additional_requirements' =>
                'Premium red, black and white team identity with clean modern graphics.',

            'status' => 'new',
        ]);
    }
}