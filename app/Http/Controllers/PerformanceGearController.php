<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Discipline;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PerformanceGearController extends Controller
{
    /**
     * GET /performance-gear
     *
     * Cinematic single-page journey:
     * HERO -> PERFORMANCE STRIP -> BUILT FOR YOUR GAME -> THE PERFORMANCE SYSTEM
     * -> FEATURED STORYTELLING -> WHITE EDITORIAL ("WORK AS HARD AS YOU DO")
     * -> ENGINEERED FOR MOTION -> TEAM LAB -> KIT STUDIO -> MAIN COLLECTION (filterable)
     * -> PERFORMANCE NOTES -> VIDEO LOOKBOOK -> THE CRAFT -> FINAL CTA -> FOOTER
     */
    public function index(Request $request): View
    {
        $disciplines = Discipline::orderBy('sort_order')->get();

        $storytellingProducts = Product::storytelling()->get();

        $categories = ['Performance Apparel', 'Footwear', 'Gloves & Protection', 'Training', 'Accessories'];

        // Smart filters — sport (discipline), category, performance, size, price
        $selectedCategory = $request->query('category');
        $selectedSize      = $request->query('size');
        $selectedSport     = $request->query('sport');
        $maxPrice          = $request->query('max_price');

        $catalog = Product::catalog($selectedCategory)
            ->when($selectedSport, fn ($q) => $q->whereHas('discipline', fn ($d) => $d->where('slug', $selectedSport)))
            ->when($selectedSize, fn ($q) => $q->whereJsonContains('sizes', $selectedSize))
            ->when($maxPrice, fn ($q) => $q->where('price', '<=', $maxPrice))
            ->get();

        $allSizes = collect(['XS', 'S', 'M', 'L', 'XL', 'XXL']);

        $performanceNotes = Article::performanceNotes()->take(3)->get();

        return view('performance-gear', compact(
            'disciplines',
            'storytellingProducts',
            'categories',
            'catalog',
            'allSizes',
            'selectedCategory',
            'selectedSize',
            'selectedSport',
            'maxPrice',
            'performanceNotes'
        ));
    }
}
