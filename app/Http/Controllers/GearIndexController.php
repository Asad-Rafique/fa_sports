<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\GearCategory;
use App\Models\MaterialSample;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GearIndexController extends Controller
{
    /**
     * GET /gear-index
     *
     * Product-only catalogue journey:
     * HERO -> CATEGORY TICKER -> CATEGORY NAVIGATION (01-08) ->
     * MATCH KIT ARCHIVE -> APPAREL EDIT -> FOOTWEAR LAB -> GLOVE ARCHIVE ->
     * BAG ROOM -> PROTECTION SYSTEM -> TRAINING COLLECTION -> ACCESSORY INDEX ->
     * PRODUCT INDEX (filterable, with detail modal + compare) ->
     * MATERIAL ARCHIVE -> NEW TO THE INDEX -> PRODUCT FILM ->
     * PLAYBOOK / TEAM LAB / KIT STUDIO CONNECTIONS -> FINAL CTA -> FOOTER
     */
    public function index(Request $request): View
    {
        $categories = GearCategory::orderBy('sort_order')->get();
        $disciplines = Discipline::orderBy('sort_order')->get();
        $materials = MaterialSample::orderBy('sort_order')->get();

        $active = Product::query()->active();

        $matchKitProducts    = (clone $active)->catalog('Match Kits')->get();
        $apparelProducts     = (clone $active)->catalog('Apparel')->get();
        $footwearProducts    = (clone $active)->catalog('Footwear')->get();
        $gloveProducts       = (clone $active)->catalog('Gloves')->get();
        $bagProducts         = (clone $active)->catalog('Bags')->get();
        $protectionProducts  = (clone $active)->catalog('Protection')->get();
        $trainingGearProducts = (clone $active)->catalog('Training Gear')->get();
        $accessoryProducts   = (clone $active)->catalog('Accessories')->get();

        $newProducts = (clone $active)->newIn()->take(8)->get();

        // Smart filters for the main Product Index
        $selectedCategory = $request->query('category');
        $selectedSport     = $request->query('sport');
        $selectedType      = $request->query('product_type');
        $selectedMaterial  = $request->query('material');
        $selectedLevel     = $request->query('performance_level');
        $selectedColor     = $request->query('color');
        $onlyNew           = $request->boolean('new');
        $onlyFeatured      = $request->boolean('featured');

        $catalog = (clone $active)
            ->when($selectedCategory, fn ($q) => $q->where('category', $selectedCategory))
            ->when($selectedSport, fn ($q) => $q->whereHas('discipline', fn ($d) => $d->where('slug', $selectedSport)))
            ->when($selectedType, fn ($q) => $q->where('product_type', $selectedType))
            ->when($selectedMaterial, fn ($q) => $q->where('material', $selectedMaterial))
            ->when($selectedLevel, fn ($q) => $q->where('performance_level', $selectedLevel))
            ->when($selectedColor, fn ($q) => $q->whereJsonContains('colors', $selectedColor))
            ->when($onlyNew, fn ($q) => $q->where('is_new', true))
            ->when($onlyFeatured, fn ($q) => $q->where('is_featured', true))
            ->orderBy('sort_order')
            ->get();

        $productTypes = Product::query()->whereNotNull('product_type')->distinct()->pluck('product_type');
        $materialOptions = Product::query()->whereNotNull('material')->distinct()->pluck('material');
        $performanceLevels = ['Standard', 'Pro', 'Elite'];
        $colorOptions = ['Black', 'White', 'Red'];

        return view('gear-index', compact(
            'categories',
            'disciplines',
            'materials',
            'matchKitProducts',
            'apparelProducts',
            'footwearProducts',
            'gloveProducts',
            'bagProducts',
            'protectionProducts',
            'trainingGearProducts',
            'accessoryProducts',
            'newProducts',
            'catalog',
            'productTypes',
            'materialOptions',
            'performanceLevels',
            'colorOptions',
            'selectedCategory',
            'selectedSport',
            'selectedType',
            'selectedMaterial',
            'selectedLevel',
            'selectedColor',
            'onlyNew',
            'onlyFeatured'
        ));
    }
}
