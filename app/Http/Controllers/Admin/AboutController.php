<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $about = \App\Models\About::latest()->first();
        return view('admin.about.index', compact('about'));
    }


    public function updateHero(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:255',
            'hero_description' => 'required|string|max:1000',
        ]);

        $about = \App\Models\About::latest()->first();
        if ($about) {
            $about->update([
                'title' => $request->hero_title,
                'subtitle' => $request->hero_subtitle,
                'description' => $request->hero_description,
            ]);
        } else {
            \App\Models\About::create([
                'title' => $request->hero_title,
                'subtitle' => $request->hero_subtitle,
                'description' => $request->hero_description,
            ]);
        }

        return redirect()->route('admin.about.index')->with('success', 'About hero updated!');
    }
}
