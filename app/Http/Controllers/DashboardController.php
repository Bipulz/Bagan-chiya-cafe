<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardHero;
use App\Models\Dashboard;

class DashboardController extends Controller
{

public function index()
{
    $hero = \App\Models\DashboardHero::first();
    $stats = \App\Models\Dashboard::all();

    return view('welcome', [
        'hero' => $hero,
        'stats' => $stats,
    ]);
}
}
