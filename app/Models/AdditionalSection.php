<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link_text',
        'link_url',
        'icon',
        'target',
        'order', 
    ];
}