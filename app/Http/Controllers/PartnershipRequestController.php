<?php

namespace App\Http\Controllers;

use App\Models\PartnershipRequest;
use Illuminate\Http\Request;

class PartnershipRequestController extends Controller
{
    /**
     * Show Partner & Distributor page.
     */
    public function index()
    {
        return view('partnership');
    }

    /**
     * Store Partner / Distributor request.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => [
                'required',
                'in:partner,distributor',
            ],

            'full_name' => [
                'required',
                'string',
                'max:100',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
            ],

            'phone' => [
                'required',
                'string',
                'max:40',
            ],

            'company_name' => [
                'required',
                'string',
                'max:150',
            ],

            'country_region' => [
                'required',
                'string',
                'max:100',
            ],

            'business_type' => [
                'nullable',
                'string',
                'max:100',
            ],

            'message' => [
                'required',
                'string',
                'max:2000',
            ],
        ]);

        PartnershipRequest::create([
            'type' => $validated['type'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company_name' => $validated['company_name'],
            'country_region' => $validated['country_region'],
            'business_type' => $validated['business_type'] ?? null,
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return redirect()
            ->route('partnership')
            ->with(
                'success',
                $validated['type'] === 'partner'
                    ? 'Your Partner application has been received. Our team will contact you shortly.'
                    : 'Your Distributor application has been received. Our team will contact you shortly.'
            );
    }
}