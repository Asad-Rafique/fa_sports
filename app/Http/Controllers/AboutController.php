<?php

namespace App\Http\Controllers;

use App\Models\AboutMember;

class AboutController extends Controller
{
    public function index()
    {
        $members = AboutMember::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('about', compact('members'));
    }
}