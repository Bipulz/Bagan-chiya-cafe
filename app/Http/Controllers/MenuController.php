<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categories = MenuCategory::with('items')->get();
        $menuTitle = DB::table('settings')->where('key', 'menu_title')->value('value') ?? 'Menu';
        $ctaTitle = DB::table('settings')->where('key', 'cta_title')->value('value') ?? 'Visit Bagan Chiya Cafe';
        $ctaText = DB::table('settings')->where('key', 'cta_text')->value('value') ?? 'Experience our delicious offerings and join our community of tea lovers. Subscribe to our newsletter for exclusive offers and updates!';
        $ctaLink = DB::table('settings')->where('key', 'cta_link')->value('value') ?? 'https://www.facebook.com/p/Bagan-%E0%A4%9A%E0%A4%BF%E0%A4%AF%E0%A4%BE-Cafe-61564573427193/?_rdr';
        $ctaButton = DB::table('settings')->where('key', 'cta_button')->value('value') ?? 'Join Our Community';
        $heroTitle = DB::table('settings')->where('key', 'hero_title')->value('value') ?? 'Our Menu';
        $heroSubtitle = DB::table('settings')->where('key', 'hero_subtitle')->value('value') ?? 'Savor the Essence';
        $heroDescription = DB::table('settings')->where('key', 'hero_description')->value('value') ?? 'Explore our fresh offerings available today, Sunday.';

        return view('menu', compact('categories', 'menuTitle', 'ctaTitle', 'ctaText', 'ctaLink', 'ctaButton', 'heroTitle', 'heroSubtitle', 'heroDescription'));
    }
}
