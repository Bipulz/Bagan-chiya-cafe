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

    public function updateAbout(Request $request)
    {
        $request->validate([
            'about_title' => 'required|string|max:255',
            'paragraph1' => 'required|string',
            'paragraph2' => 'required|string',
        ]);

        $about = \App\Models\About::latest()->first();
        if ($about) {
            $about->update([
                'about_title' => $request->about_title,
                'paragraph1' => $request->paragraph1,
                'paragraph2' => $request->paragraph2,
            ]);
        } else {
            \App\Models\About::create([
                'about_title' => $request->about_title,
                'paragraph1' => $request->paragraph1,
                'paragraph2' => $request->paragraph2,
            ]);
        }

        return redirect()->route('admin.about.index')->with('success', 'About section updated!');
    }

    public function updateVisit(Request $request)
    {
        $request->validate([
            'map_title' => 'required|string|max:255',
            'visit_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'secondary_location' => 'required|string|max:255',
            'hours' => 'required|string|max:255',
            'map_url' => 'nullable|string',
            'directions_url' => 'required|string',
        ]);

        $about = \App\Models\About::latest()->first();
        if ($about) {
            $about->update([
                'map_title' => $request->map_title,
                'visit_title' => $request->visit_title,
                'location' => $request->location,
                'phone' => $request->phone,
                'secondary_location' => $request->secondary_location,
                'hours' => $request->hours,
                'map_url' => $request->map_url,
                'directions_url' => $request->directions_url,
            ]);
        } else {
            \App\Models\About::create([
                'map_title' => $request->map_title,
                'visit_title' => $request->visit_title,
                'location' => $request->location,
                'phone' => $request->phone,
                'secondary_location' => $request->secondary_location,
                'hours' => $request->hours,
                'map_url' => $request->map_url,
                'directions_url' => $request->directions_url,
            ]);
        }

        return redirect()->route('admin.about.index')->with('success', 'Visit info updated!');
    }
}
