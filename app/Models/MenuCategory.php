<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    protected $fillable = ['name', 'icon'];

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
