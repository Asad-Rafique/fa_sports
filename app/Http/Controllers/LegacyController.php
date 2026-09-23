<?php

namespace App\Http\Controllers;

use App\Models\ArchiveItem;
use App\Models\FutureInitiative;
use App\Models\GlobalRegion;
use App\Models\Principle;
use App\Models\Statistic;
use App\Models\TimelineMilestone;
use Illuminate\View\View;

class LegacyController extends Controller
{
    /**
     * GET /legacy — THE FA LEGACY
     *
     * HERO -> OPENING STATEMENT -> FA ORIGIN -> THE FA TIMELINE (interactive) ->
     * THEN / NOW -> THE EVOLUTION -> THE FA ARCHIVE -> CRAFT & KNOWLEDGE ->
     * PERFORMANCE PHILOSOPHY -> WHY FA SPORTS -> THE GLOBAL JOURNEY ->
     * FA PERFORMANCE NUMBERS -> THE FA CODE -> TODAY (portals) -> THE FUTURE ->
     * LEGACY STATEMENT -> FINAL EXPERIENCE -> FOOTER
     */
    public function index(): View
    {
        $timeline = TimelineMilestone::published()->get();
        $archive = ArchiveItem::orderBy('sort_order')->get();
        $statistics = Statistic::orderBy('sort_order')->get();
        $philosophy = Principle::philosophy()->get();
        $code = Principle::code()->get();
        $regions = GlobalRegion::orderBy('sort_order')->get();
        $futureInitiatives = FutureInitiative::orderBy('sort_order')->get();

        return view('legacy', compact(
            'timeline',
            'archive',
            'statistics',
            'philosophy',
            'code',
            'regions',
            'futureInitiatives'
        ));
    }
}
