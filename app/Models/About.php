<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'about_title',
        'paragraph1',
        'paragraph2',
        'map_title',
        'visit_title',
        'location',
        'phone',
        'secondary_location',
        'hours',
        'map_url',
        'directions_url'
    ];
}
