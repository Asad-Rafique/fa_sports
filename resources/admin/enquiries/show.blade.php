<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enquiry #{{ $inquiry->id }} — FA SPORTS Admin</title>
    <style>
        body{ font-family: -apple-system, "Segoe UI", sans-serif; background:#f4f4f5; margin:0; padding:32px; color:#111; }
        .card{ background:#fff; border-radius:8px; padding:28px; max-width:720px; }
        h1{ font-size:20px; margin:0 0 4px; }
        .meta{ color:#777; font-size:13px; margin-bottom:24px; }
        dl{ display:grid; grid-template-columns: 160px 1fr; gap:10px 16px; margin:0 0 24px; }
        dt{ color:#777; font-size:12px; }
        dd{ margin:0; font-size:14px; }
        textarea, select{ width:100%; padding:10px; border:1px solid #ccc; border-radius:4px; font-family:inherit; }
        button{ background:#e2141f; color:#fff; border:none; padding:10px 20px; border-radius:4px; cursor:pointer; font-weight:700; margin-top:12px; }
        a.back{ color:#e2141f; font-size:13px; }
    </style>
</head>
<body>
    <p><a class="back" href="{{ route('admin.enquiries.index') }}">&larr; Back to all enquiries</a></p>

    <div class="card">
        <h1>Enquiry from {{ $inquiry->name }}</h1>
        <p class="meta">Submitted {{ $inquiry->created_at->format('d M Y, H:i') }}</p>

        <dl>
            <dt>Route</dt><dd>{{ $inquiry->route }}</dd>
            <dt>Organization type</dt><dd>{{ $inquiry->organization_type }}</dd>
            <dt>Enquiry type</dt><dd>{{ $inquiry->enquiry_type }}</dd>
            <dt>Project name</dt><dd>{{ $inquiry->project_name }}</dd>
            <dt>Sport</dt><dd>{{ $inquiry->sport }}</dd>
            <dt>Quantity</dt><dd>{{ $inquiry->quantity }}</dd>
            <dt>Target market</dt><dd>{{ $inquiry->target_market }}</dd>
            <dt>Required date</dt><dd>{{ optional($inquiry->required_date)->format('d M Y') }}</dd>
            <dt>Project requirements</dt><dd>{{ $inquiry->project_requirements }}</dd>
            <dt>Company</dt><dd>{{ $inquiry->company }}</dd>
            <dt>Email</dt><dd><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></dd>
            <dt>Phone</dt><dd>{{ $inquiry->phone }}</dd>
            <dt>Country / City</dt><dd>{{ $inquiry->country }}, {{ $inquiry->city }}</dd>
            <dt>Message</dt><dd>{{ $inquiry->message }}</dd>
            <dt>Attachment</dt>
            <dd>
                @if ($inquiry->attachment)
                    <a href="{{ route('admin.enquiries.attachment', $inquiry) }}">Download attachment</a>
                @else
                    None
                @endif
            </dd>
        </dl>

        <form method="POST" action="{{ route('admin.enquiries.update', $inquiry) }}">
            @csrf
            @method('PATCH')

            <label>Status</label>
            <select name="status">
                @foreach (['new','reviewing','responded','closed'] as $s)
                    <option value="{{ $s }}" @selected($inquiry->status === $s)>{{ ucfirst($s) }}</option>
                @endforeach
            </select>

            <label style="display:block; margin-top:16px;">Internal notes</label>
            <textarea name="admin_notes" rows="4">{{ $inquiry->admin_notes }}</textarea>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
