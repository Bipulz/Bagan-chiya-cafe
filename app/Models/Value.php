<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
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