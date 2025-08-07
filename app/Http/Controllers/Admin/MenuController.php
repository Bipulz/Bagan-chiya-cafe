<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Models\MenuItem;
use Illuminate\Support\Facades\DB;

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

        return view('admin.menu.index', compact('categories', 'menuTitle', 'ctaTitle', 'ctaText', 'ctaLink', 'ctaButton'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
        ]);

        MenuCategory::create([
            'name' => $request->name,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Category added!');
    }

    public function updateCategory(Request $request, MenuCategory $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Category updated!');
    }

    public function destroyCategory(MenuCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.menu.index')->with('success', 'Category deleted!');
    }
    public function storeItem(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:menu_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'note' => 'nullable|string|max:255',
        ]);

        MenuItem::create([
            'menu_category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'note' => $request->note,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Item added!');
    }
    public function updateItem(Request $request, MenuItem $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'note' => 'nullable|string|max:255',
        ]);
        $item->update($request->only('name', 'price', 'note'));
        return redirect()->route('admin.menu.index')->with('success', 'Item updated!');
    }

    public function destroyItem(MenuItem $item)
    {
        $item->delete();
        return redirect()->route('admin.menu.index')->with('success', 'Item deleted!');
    }
    public function updateMenuTitle(Request $request)
    {
        $request->validate([
            'menu_title' => 'required|string|max:255',
        ]);

        DB::table('settings')->updateOrInsert(
            ['key' => 'menu_title'],
            ['value' => $request->menu_title]
        );

        return redirect()->route('admin.menu.index')->with('success', 'Menu title updated!');
    }
    public function updateCta(Request $request)
    {
        $request->validate([
            'cta_title' => 'required|string|max:255',
            'cta_text' => 'required|string|max:1000',
            'cta_link' => 'required|url',
            'cta_button' => 'required|string|max:255',
        ]);

        DB::table('settings')->updateOrInsert(['key' => 'cta_title'], ['value' => $request->cta_title]);
        DB::table('settings')->updateOrInsert(['key' => 'cta_text'], ['value' => $request->cta_text]);
        DB::table('settings')->updateOrInsert(['key' => 'cta_link'], ['value' => $request->cta_link]);
        DB::table('settings')->updateOrInsert(['key' => 'cta_button'], ['value' => $request->cta_button]);

        return redirect()->route('admin.menu.index')->with('success', 'CTA updated!');
    }
    public function updateHero(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:255',
            'hero_description' => 'required|string|max:1000',
        ]);

        DB::table('settings')->updateOrInsert(['key' => 'hero_title'], ['value' => $request->hero_title]);
        DB::table('settings')->updateOrInsert(['key' => 'hero_subtitle'], ['value' => $request->hero_subtitle]);
        DB::table('settings')->updateOrInsert(['key' => 'hero_description'], ['value' => $request->hero_description]);

        return redirect()->route('admin.menu.index')->with('success', 'Hero section updated!');
    }
}
