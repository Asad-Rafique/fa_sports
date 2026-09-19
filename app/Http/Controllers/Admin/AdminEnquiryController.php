<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminEnquiryController extends Controller
{
    /**
     * GET /admin/enquiries — list, search, filter enquiries.
     */
    public function index(Request $request): View
    {
        $inquiries = ContactInquiry::query()
            ->status($request->query('status'))
            ->search($request->query('q'))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.enquiries.index', compact('inquiries'));
    }

    /**
     * GET /admin/enquiries/{inquiry} — full enquiry detail.
     */
    public function show(ContactInquiry $inquiry): View
    {
        return view('admin.enquiries.show', compact('inquiry'));
    }

    /**
     * PATCH /admin/enquiries/{inquiry} — update status and/or internal notes.
     */
    public function update(Request $request, ContactInquiry $inquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:new,reviewing,responded,closed'],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        $inquiry->update($validated);

        return back()->with('status', 'Enquiry updated.');
    }

    /**
     * GET /admin/enquiries/{inquiry}/attachment — securely download the attached file.
     */
    public function downloadAttachment(ContactInquiry $inquiry)
    {
        abort_unless($inquiry->attachment, 404);

        return Storage::disk('local')->download($inquiry->attachment);
    }
}
