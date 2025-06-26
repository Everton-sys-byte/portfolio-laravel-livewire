<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'description',
        'type'
    ];
}
