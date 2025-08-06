<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categories = \App\Models\MenuCategory::with('items')->get();
        $menuTitle = DB::table('settings')->where('key', 'menu_title')->value('value') ?? 'Menu';
        return view('menu', compact('categories', 'menuTitle'));
    }
}
