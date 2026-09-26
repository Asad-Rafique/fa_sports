<?php

namespace App\Http\Controllers;

use App\Models\CustomizeRequest;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    public function index()
    {
        $sports = [
            'Football',
            'Cricket',
            'Basketball',
            'Volleyball',
            'Hockey',
            'Running',
            'Rugby',
            'Other',
        ];

        $kitTypes = [
            'Match Kit',
            'Training Kit',
            'Full Teamwear',
            'Tracksuit',
            'Jacket',
            'Shorts',
            'Custom Set',
        ];

        $fabrics = [
            'Performance Dry',
            'Ultra Light',
            '4-Way Stretch',
            'Premium Teamwear',
            'Not Sure — Recommend For Me',
        ];

        return view('customize', compact(
            'sports',
            'kitTypes',
            'fabrics'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sport' => 'required|string|max:100',
            'kit_type' => 'required|string|max:100',

            'team_name' => 'required|string|max:150',
            'contact_name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:50',

            'primary_color' => 'nullable|string|max:30',
            'secondary_color' => 'nullable|string|max:30',
            'accent_color' => 'nullable|string|max:30',

            'player_name' => 'nullable|string|max:100',
            'player_number' => 'nullable|string|max:20',

            'logo_required' => 'nullable|boolean',
            'player_names' => 'nullable|boolean',
            'player_numbers' => 'nullable|boolean',

            'quantity' => 'required|integer|min:1|max:10000',

            'fabric' => 'nullable|string|max:100',
            'performance_requirements' => 'nullable|string|max:2000',

            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:5120',

            'additional_requirements' => 'nullable|string|max:5000',
        ]);

        $validated['logo_required'] = $request->boolean('logo_required');
        $validated['player_names'] = $request->boolean('player_names');
        $validated['player_numbers'] = $request->boolean('player_numbers');

        if ($request->hasFile('logo')) {
            $validated['logo_path'] = $request
                ->file('logo')
                ->store('customize/logos', 'public');
        }

        unset($validated['logo']);

        $validated['status'] = 'new';

        CustomizeRequest::create($validated);

        return redirect()
            ->route('customize')
            ->with(
                'success',
                'Your customization request has been received. FA SPORTS will contact you shortly.'
            );
    }
}