<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Discipline;
use App\Models\EquipmentCategory;
use App\Models\FootwearType;
use App\Models\GloveType;
use App\Models\TeamOrderStage;
use Illuminate\View\View;

class TeamLabController extends Controller
{
    /**
     * GET /team-lab
     *
     * Cinematic single-page journey:
     * HERO -> STATEMENT STRIP -> EVERYTHING YOUR TEAM NEEDS -> KIT SYSTEM ->
     * CHOOSE YOUR SPORT (counter 01/07) -> THE COMPLETE TEAM KIT (360 view) ->
     * FROM HEAD TO TOE (footwear) -> GLOVE SYSTEM -> TEAM BAG SYSTEM ->
     * THE LOOK BEFORE THE GAME -> MATCH DAY / TRAINING DAY -> TEAM IDENTITY ->
     * TEAM ORDER SYSTEM -> BULK & PROFESSIONAL TEAMS -> TEAM FILM ->
     * TEAM STORIES -> THE CRAFT -> FINAL CTA -> FOOTER
     */
    public function index(): View
    {
        $disciplines = Discipline::orderBy('sort_order')->get();
        $equipmentCategories = EquipmentCategory::orderBy('sort_order')->get();
        $gloveTypes = GloveType::orderBy('sort_order')->get();
        $footwearTypes = FootwearType::orderBy('sort_order')->get();
        $orderStages = TeamOrderStage::orderBy('step_number')->get();
        $teamStories = Article::teamStories()->take(3)->get();

        return view('team-lab', compact(
            'disciplines',
            'equipmentCategories',
            'gloveTypes',
            'footwearTypes',
            'orderStages',
            'teamStories'
        ));
    }
}
