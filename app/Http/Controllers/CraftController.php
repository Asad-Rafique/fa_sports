<?php

namespace App\Http\Controllers;

use App\Models\CraftItem;
use Illuminate\View\View;

class CraftController extends Controller
{
    /**
     * GET /craft — THE CRAFT
     *
     * HERO -> THE MAKING -> WHAT'S INSIDE MATTERS -> DETAILS MATTER ->
     * THE FA STANDARD -> FINAL CTA
     */
    public function index(): View
    {
        $making = CraftItem::section('making')->get();
        $material = CraftItem::section('material')->get();
        $details = CraftItem::section('details')->get();
        $standard = CraftItem::section('standard')->get();

        return view('pages.craft', compact(
            'making',
            'material',
            'details',
            'standard'
        ));
    }
}