<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['menu_category_id', 'name', 'price', 'note'];

    public function category()
    {
        return $this->belongsTo(MenuCategory::class);
    }
}
