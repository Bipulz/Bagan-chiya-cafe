<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'story_id',
        'icon',
        'title',
        'description',
    ];

    public function story()
    {
        return $this->belongsTo(\App\Models\Story::class);
    }
}