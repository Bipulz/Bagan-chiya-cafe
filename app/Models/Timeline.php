<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'story_id',
        'year',
        'location',
        'description',
        'link',
    ];

    public function story()
    {
        return $this->belongsTo(\App\Models\Story::class);
    }
}