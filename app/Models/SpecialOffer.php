<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $fillable = [
        'section_title',
        'title',
        'description',
        'price',
        'original_price',
        'discount_code',
        'discount_percentage',
    ];
}