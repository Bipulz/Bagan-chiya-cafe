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
        return view('admin.menu.index', compact('categories', 'menuTitle'));
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
}
