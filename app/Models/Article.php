<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'slug',
        'excerpt',
        'cover_image',
        'is_featured',
        'is_trending',
        'is_performance_note',
        'is_discipline_story',
        'team_story',
        'playbook_featured',
        'published_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_trending' => 'boolean',
        'is_performance_note' => 'boolean',
        'is_discipline_story' => 'boolean',
        'team_story' => 'boolean',
        'playbook_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function scopePerformanceNotes($query)
    {
        return $query
            ->where('is_performance_note', true)
            ->orderByDesc('published_at');
    }

    public function scopeDisciplineStories($query)
    {
        return $query
            ->where('is_discipline_story', true)
            ->orderByDesc('published_at');
    }

    public function scopeTeamStories($query)
    {
        return $query
            ->where('team_story', true)
            ->orderByDesc('published_at');
    }

    public function scopePlaybookFeatured($query)
    {
        return $query
            ->where('playbook_featured', true)
            ->orderByDesc('published_at');
    }
}