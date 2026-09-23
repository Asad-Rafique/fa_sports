<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\PlaybookCategory;
use App\Models\PlaybookInsight;
use App\Models\Principle;
use Illuminate\View\View;

class PlaybookController extends Controller
{
    /**
     * GET /playbook — THE PLAYBOOK
     *
     * HERO -> PLAYBOOK INDEX -> FEATURED STORY -> PLAYBOOK PRINCIPLES ->
     * INSIDE THE GAME -> FINAL CTA
     */
    public function index(): View
    {
        $categories = PlaybookCategory::orderBy('sort_order')->get();
        $featuredStory = Article::playbookFeatured()->first();
        $principles = Principle::playbook()->get();
        $insights = PlaybookInsight::orderBy('sort_order')->get();

        return view('playbook', compact('categories', 'featuredStory', 'principles', 'insights'));
    }
}
