<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\Faq;
use App\Models\GlobalRegion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * GET /connect — CONNECT WITH FA
     */
    public function index(): View
    {
        $faqs = Faq::forPage('connect')->get();
        $regions = GlobalRegion::forContact()->get();

        return view('connect', compact('faqs', 'regions'));
    }

    /**
     * POST /connect — handles the 6-step enquiry form submission.
     * Rate-limited via the 'throttle:5,1' middleware on the route.
     */
    public function store(Request $request): RedirectResponse
    {
        // Honeypot — a hidden field real visitors never fill in.
        if ($request->filled(config('contact.honeypot_field'))) {
            // Silently pretend success so bots don't learn the field is monitored.
            return redirect()->route('connect')->with('success', true);
        }

        $maxKb = config('contact.max_attachment_mb') * 1024;

        $validated = $request->validate([
            'route' => ['nullable', 'string', 'in:team-club,custom-sportswear,oem-private-label,general'],
            'organization_type' => ['nullable', 'string', 'max:100'],
            'enquiry_type' => ['nullable', 'string', 'max:100'],

            'project_name' => ['nullable', 'string', 'max:150'],
            'sport' => ['nullable', 'string', 'max:100'],
            'quantity' => ['nullable', 'string', 'max:50'],
            'target_market' => ['nullable', 'string', 'max:150'],
            'required_date' => ['nullable', 'date'],
            'project_requirements' => ['nullable', 'string', 'max:3000'],

            'name' => ['required', 'string', 'max:150'],
            'company' => ['nullable', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:40'],
            'country' => ['nullable', 'string', 'max:100'],
            'city' => ['nullable', 'string', 'max:100'],

            'message' => ['required', 'string', 'max:5000'],
            'attachment' => ['nullable', 'file', 'max:'.$maxKb, 'mimes:pdf,jpg,jpeg,png,ai,eps,zip'],
        ]);

        if ($request->hasFile('attachment')) {
            // Stored on the PRIVATE disk — never publicly browsable by URL.
            $validated['attachment'] = $request->file('attachment')->store('attachments', 'local');
        }

        ContactInquiry::create($validated + ['status' => 'new']);

        return redirect()->route('connect')->with('success', true);
    }
}
