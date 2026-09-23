<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Discipline;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * GET /  — THE ARENA (homepage)
     * Cinematic single-page journey:
     * HERO -> BEFORE THE WHISTLE -> DISCIPLINES -> PERFORMANCE GEAR
     * -> WHITE EDITORIAL PRODUCTS -> TEAM LAB -> PERFORMANCE LAB
     * -> THE CRAFT -> THE PLAYBOOK -> OUR DRIVE -> FINAL CTA / FOOTER
     */
    public function index(): View
    {
        $disciplines = Discipline::orderBy('sort_order')->get();

        $featuredGear = Product::where('is_featured', true)
            ->where('is_white_section', false)
            ->orderBy('sort_order')
            ->take(4)
            ->get();

        $whiteEditorialProducts = Product::where('is_white_section', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        $featuredStory = Article::where('is_featured', true)
            ->latest('published_at')
            ->first();

        $latestStories = Article::where('is_featured', false)
            ->latest('published_at')
            ->take(4)
            ->get();

        $trendingStories = Article::where('is_trending', true)
            ->latest('published_at')
            ->take(8)
            ->get();

        return view('home', compact(
            'disciplines',
            'featuredGear',
            'whiteEditorialProducts',
            'featuredStory',
            'latestStories',
            'trendingStories'
        ));
    }
}
