<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            ['Can I request custom teamwear?', 'Yes — use the Team & Club or Custom Sportswear route and tell us your sport, quantities and timeline.'],
            ['Do you work with international teams?', 'Yes, FA SPORTS works with clubs, academies and organizations outside Pakistan as well.'],
            ['Do you offer OEM manufacturing?', 'Yes — the OEM / Private Label route is built specifically for brands, retailers and distributors.'],
            ['Can I request bulk production?', 'Yes, bulk and team-scale production is a core part of what FA SPORTS does.'],
            ['Can I send my own design?', 'Yes — you can attach a reference file in Step 5 of the enquiry form.'],
            ['How can I request a quotation?', 'Submit an enquiry through any of the four routes above; a quotation follows after review.'],
            ['What information should I include?', 'Sport, estimated quantity, target market, timeline and any specific product requirements help the most.'],
            ['Can businesses contact FA SPORTS for private-label production?', 'Yes — that is exactly what the OEM / Private Label route is for.'],
        ];

        foreach ($faqs as $i => [$question, $answer]) {
            Faq::updateOrCreate(
                ['question' => $question, 'page' => 'connect'],
                ['answer' => $answer, 'sort_order' => $i + 1]
            );
        }
    }
}
