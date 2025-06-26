<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'challenge',
        'technologies',
        'solution',
        'results',
        'image',
        'url',
        'github_url',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
