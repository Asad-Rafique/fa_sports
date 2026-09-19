<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutMember;

class AboutMemberSeeder extends Seeder
{
    public function run(): void
    {
        AboutMember::updateOrCreate(
            ['name' => 'Muhammad Shafeeq'],
            [
                'position' => 'Founder & Managing Director',
                'department' => 'Leadership',
                'image' => 'images/about/member1.jpg',
                'bio' => 'Muhammad Shafeeq leads FA SPORTS with a clear vision to build high-quality sportswear and complete teamwear solutions. His focus is on developing a strong sports brand built around performance, quality and long-term relationships.',
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        AboutMember::updateOrCreate(
            ['name' => 'Faizan Ali'],
            [
                'position' => 'Head of Operations',
                'department' => 'Operations',
                'image' => 'images/about/member2.jpg',
                'bio' => 'Faizan Ali oversees the operational side of FA SPORTS, helping maintain smooth coordination between production, quality and delivery while keeping every stage of the process organized and efficient.',
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        AboutMember::updateOrCreate(
            ['name' => 'Ali Shan'],
            [
                'position' => 'Head of Product & Design',
                'department' => 'Product & Design',
                'image' => 'images/about/member3.jpg',
                'bio' => 'Ali Shan focuses on product development and design, bringing together performance, functionality and visual identity to create sportswear that looks distinctive and performs on the field.',
                'sort_order' => 3,
                'is_active' => true,
            ]
        );

        AboutMember::updateOrCreate(
            ['name' => 'Ahsan Ali'],
            [
                'position' => 'Business Development Manager',
                'department' => 'Business Development',
                'image' => 'images/about/member4.jpg',
                'bio' => 'Ahsan Ali works on building relationships and developing new business opportunities for FA SPORTS, connecting the brand with teams, organizations and partners across different markets.',
                'sort_order' => 4,
                'is_active' => true,
            ]
        );
    }
}