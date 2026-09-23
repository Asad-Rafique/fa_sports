<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FA SPORTS Admin — Enquiries</title>
    <style>
        body{ font-family: -apple-system, "Segoe UI", sans-serif; background:#f4f4f5; margin:0; padding:32px; color:#111; }
        h1{ font-size:22px; margin:0 0 20px; }
        .filters{ display:flex; gap:12px; margin-bottom:20px; }
        .filters input, .filters select{ padding:8px 10px; border:1px solid #ccc; border-radius:4px; }
        table{ width:100%; border-collapse:collapse; background:#fff; border-radius:6px; overflow:hidden; }
        th, td{ text-align:left; padding:10px 14px; border-bottom:1px solid #eee; font-size:13px; }
        th{ background:#0a0a0b; color:#fff; font-weight:600; }
        .status{ display:inline-block; padding:3px 8px; border-radius:3px; font-size:11px; font-weight:700; }
        .status-new{ background:#e2141f; color:#fff; }
        .status-reviewing{ background:#f4d35e; color:#111; }
        .status-responded{ background:#2e7d32; color:#fff; }
        .status-closed{ background:#999; color:#fff; }
        a{ color:#e2141f; }
        .pagination{ margin-top:16px; }
    </style>
</head>
<body>
    <h1>FA SPORTS — Enquiries</h1>

    <form class="filters" method="GET">
        <input type="text" name="q" placeholder="Search name, company, email..." value="{{ request('q') }}">
        <select name="status">
            <option value="">All statuses</option>
            @foreach (['new','reviewing','responded','closed'] as $s)
                <option value="{{ $s }}" @selected(request('status') === $s)>{{ ucfirst($s) }}</option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Date</th><th>Name</th><th>Company</th><th>Route</th><th>Enquiry Type</th><th>Status</th><th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->created_at->format('d M Y') }}</td>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->company }}</td>
                    <td>{{ $inquiry->route }}</td>
                    <td>{{ $inquiry->enquiry_type }}</td>
                    <td><span class="status status-{{ $inquiry->status }}">{{ strtoupper($inquiry->status) }}</span></td>
                    <td><a href="{{ route('admin.enquiries.show', $inquiry) }}">View</a></td>
                </tr>
            @empty
                <tr><td colspan="7">No enquiries yet.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">{{ $inquiries->links() }}</div>
</body>
</html>
