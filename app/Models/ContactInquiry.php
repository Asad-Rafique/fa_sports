<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    protected $fillable = [
        'route', 'organization_type', 'enquiry_type',
        'project_name', 'sport', 'quantity', 'target_market', 'required_date', 'project_requirements',
        'name', 'company', 'email', 'phone', 'country', 'city',
        'message', 'attachment',
        'status', 'admin_notes',
    ];

    protected $casts = [
        'required_date' => 'date',
    ];

    public function scopeStatus($query, ?string $status)
    {
        return $query->when($status, fn ($q) => $q->where('status', $status));
    }

    public function scopeSearch($query, ?string $term)
    {
        return $query->when($term, function ($q) use ($term) {
            $q->where(function ($q2) use ($term) {
                $q2->where('name', 'like', "%{$term}%")
                    ->orWhere('company', 'like', "%{$term}%")
                    ->orWhere('email', 'like', "%{$term}%")
                    ->orWhere('project_name', 'like', "%{$term}%");
            });
        });
    }
}
