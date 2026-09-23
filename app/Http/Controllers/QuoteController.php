<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    /**
     * GET /request-a-quote — REQUEST A QUOTE
     */
    public function index(): View
    {
        return view('quote');
    }

    /**
     * POST /request-a-quote — validate + save the quote request.
     * Rate-limited via 'throttle:5,1' on the route.
     */
    public function store(Request $request): RedirectResponse
    {
        // Honeypot — hidden field real visitors never fill in.
        if ($request->filled('website')) {
            return redirect()->route('quote')->with('success', true);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'company' => ['nullable', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:40'],
            'country' => ['nullable', 'string', 'max:100'],

            'product_interests' => ['nullable', 'array'],
            'product_interests.*' => ['string', 'in:Performance Apparel,Team Kits,Training Wear,Footwear,Gloves,Accessories,Custom Sportswear'],

            'requirements' => ['required', 'string', 'max:5000'],

            'preferred_contact' => ['nullable', 'string', 'in:email,whatsapp,phone'],
        ]);

        QuoteRequest::create($validated + ['status' => 'new']);

        return redirect()->route('quote')->with('success', true);
    }
}
