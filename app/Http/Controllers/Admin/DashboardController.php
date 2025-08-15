<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DashboardHero;
use App\Models\Dashboard; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
public function index()
{
    $hero = DashboardHero::first();
    $stats = Dashboard::all();

    // Map stats for JS
    $mappedStats = $stats->map(function($s) {
        return [
            'icon' => $s->stat_icon,
            'number' => $s->stat_number,
            'info' => $s->stat_label,
        ];
    });

    return view('admin.dashboard.index', [
        'badgeText' => $hero->badge_text ?? '',
        'heroTitle' => $hero->hero_title ?? '',
        'heroDescription' => $hero->hero_description ?? '',
        'primaryCtaText' => $hero->primary_cta_text ?? '',
        'primaryCtaLink' => $hero->primary_cta_link ?? '',
        'secondaryCtaText' => $hero->secondary_cta_text ?? '',
        'secondaryCtaLink' => $hero->secondary_cta_link ?? '',
        'stats' => $stats,
        'mappedStats' => $mappedStats,
    ]);
}
    public function updateHero(Request $request)
    {
        $hero = DashboardHero::first();
        if (!$hero) {
            $hero = new DashboardHero();
        }

        $hero->badge_text = $request->input('badge_text');
        $hero->hero_title = $request->input('welcome');
        $hero->hero_description = $request->input('hero_description');
        $hero->primary_cta_text = $request->input('primary_cta_text');
        $hero->primary_cta_link = $request->input('primary_cta_link');
        $hero->secondary_cta_text = $request->input('secondary_cta_text');
        $hero->secondary_cta_link = $request->input('secondary_cta_link');
        $hero->save();

        // Replace all stats
        $stats = $request->input('stats', []);
        Dashboard::truncate();

        foreach ($stats as $stat) {
            if (!empty($stat['icon']) && is_numeric($stat['number']) && !empty($stat['info'])) {
                Dashboard::create([
                    'stat_icon' => $stat['icon'],
                    'stat_number' => $stat['number'],
                    'stat_label' => $stat['info'],
                ]);
            }
        }

        return redirect()->route('admin.dashboard.index')->with('success', 'Hero and stats updated successfully!');
    }
}