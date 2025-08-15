<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Models\Timeline;
use App\Models\Value;
use App\Models\TeamMember;


class StoryController extends Controller
{
 public function index()
{
    $story = \App\Models\Story::first();
    $timelineItems = $story ? $story->timelines()->orderBy('year')->get() : collect();
    $values = $story ? $story->values : collect();
    $teamMembers = $story ? $story->teamMembers : collect(); 

    return view('admin.story.index', [
        'badgeText' => $story->hero_badge ?? 'Since Mangsir • Born in Damak',
        'heroTitle' => $story->hero_title ?? 'Our Story',
        'heroSubtitle' => $story->hero_subtitle ?? '',
        'heroDescription' => $story->hero_description ?? '',
        'journeyTitle' => $story->journey_title ?? '',
        'journeyIntro' => $story->journey_intro ?? '',
        'timelineItems' => $timelineItems,
        'story' => $story,
        'values' => $values,
        'teamMembers' => $teamMembers, 
        'teamTitle' => $story->team_title ?? 'Meet Our Team',
        'teamIntro' => $story->team_intro ?? '',
        'ctaTitle' => $story->cta_title ?? 'Visit Us in Damak',
        'ctaDescription' => $story->cta_description ?? 'Experience the authentic taste of Nepal\'s finest teas in the heart of where our story began.',
        'ctaLink' => $story->cta_link ?? asset(''),
        'ctaButtonText' => $story->cta_button_text ?? 'Back to Home',
    ]);
}
    public function edit()
    {
        $story = Story::first();
        return view('admin.story.edit', compact('story'));
    }

    public function update(Request $request)
    {
        $story = Story::first();
        if (!$story) {
            $story = Story::create($request->all());
        } else {
            $story->update($request->all());
        }
        return redirect()->route('admin.story.index');
    }

    public function updateHero(Request $request)
    {
        $story = Story::first();
        $data = [
            'hero_badge' => $request->input('badge_text'),
            'hero_title' => $request->input('hero_title'),
            'hero_subtitle' => $request->input('hero_subtitle'),
            'hero_description' => $request->input('hero_description'),
        ];
        if (!$story) {
            $story = Story::create($data);
        } else {
            $story->update($data);
        }
        return redirect()->route('admin.story.index');
    }
    public function updateJourney(Request $request)
{
    $story = \App\Models\Story::first();
    $data = [
        'journey_title' => $request->input('journey_title'),
        'journey_intro' => $request->input('journey_intro'),
    ];
    if (!$story) {
        $story = \App\Models\Story::create($data);
    } else {
        $story->update($data);
    }
    return redirect()->route('admin.story.index');
}

public function storeTimeline(Request $request)
{
    $story = \App\Models\Story::first();
    \App\Models\Timeline::create([
        'story_id' => $story->id,
        'year' => $request->input('year'),
        'location' => $request->input('location'), 
        'description' => $request->input('description'),
        'link' => $request->input('link'),
    ]);
    return redirect()->route('admin.story.index');
}

public function updateTimeline(Request $request, Timeline $timeline)
{
    $timeline->update([
        'year' => $request->input('year'),
        'title' => null,
        'location' => $request->input('location'),
        'description' => $request->input('description'),
        'link' => $request->input('link'),
    ]);
    return redirect()->route('admin.story.index');
}
public function destroyTimeline(Timeline $timeline)
{
    $timeline->delete();
    return redirect()->route('admin.story.index');
}


public function updateMission(Request $request)
{
    $story = Story::first();
    $data = [
        'mission_title' => $request->input('mission_title'),
        'mission_text' => $request->input('mission_text'),
    ];
    if (!$story) {
        $story = Story::create($data);
    } else {
        $story->update($data);
    }
    return redirect()->route('admin.story.index');
}

public function updateValuesTitle(Request $request)
{
    $story = Story::first();
    $data = [
        'values_title' => $request->input('values_title'),
    ];
    if (!$story) {
        $story = Story::create($data);
    } else {
        $story->update($data);
    }
    return redirect()->route('admin.story.index');
}
public function storeValue(Request $request)
{
    $story = Story::first();
    $data = [
        'story_id' => $story ? $story->id : null,
        'icon' => $request->input('icon'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ];
    \App\Models\Value::create($data);
    return redirect()->route('admin.story.index');
}
public function destroyValue(Value $value)
{
    $value->delete();
    return redirect()->route('admin.story.index');
}
public function updateValue(Request $request, Value $value)
{
    $value->update([
        'icon' => $request->input('icon'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ]);
    return redirect()->route('admin.story.index');
}
public function updateTeamTitle(Request $request)
{
    $story = \App\Models\Story::first();
    $data = [
        'team_title' => $request->input('team_title'),
        'team_intro' => $request->input('team_intro'),
    ];
    if (!$story) {
        $story = \App\Models\Story::create($data);
    } else {
        $story->update($data);
    }
    return redirect()->route('admin.story.index');
}


public function storeTeam(Request $request)
{
    $request->validate([
        'icon' => 'required|string',
        'title' => 'required|string',
        'description' => 'required|string',
    ]);

    $story = \App\Models\Story::first();
    if (!$story) {
        return redirect()->back()->with('error', 'No story found. Please create a story first.');
    }

    \App\Models\TeamMember::create([
        'story_id' => $story->id,
        'icon' => $request->input('icon'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ]);
    return redirect()->route('admin.story.index')->with('success', 'Team member added!');
}
public function show()
{
    $story = \App\Models\Story::first();
    $timelineItems = $story ? $story->timelines()->orderBy('year')->get() : collect();
    $values = $story ? $story->values : collect();
    $teamMembers = $story ? $story->teamMembers : collect();

    return view('story', [
        'story' => $story,
        'timelineItems' => $timelineItems,
        'values' => $values,
        'teamMembers' => $teamMembers,
    ]);
}

public function updateTeam(Request $request, \App\Models\TeamMember $teamMember)
{
    $request->validate([
        'icon' => 'required|string',
        'title' => 'required|string',
        'description' => 'required|string',
    ]);
    $teamMember->update([
        'icon' => $request->input('icon'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ]);
    return redirect()->route('admin.story.index')->with('success', 'Team member updated!');
}

public function destroyTeam(\App\Models\TeamMember $teamMember)
{
    $teamMember->delete();
    return redirect()->route('admin.story.index')->with('success', 'Team member deleted!');
}

public function updateCta(Request $request)
{
    $story = \App\Models\Story::first();
    $data = [
        'cta_title' => $request->input('cta_title'),
        'cta_description' => $request->input('cta_description'),
        'cta_link' => $request->input('cta_link'),
        'cta_button_text' => $request->input('cta_button_text'),
    ];
    if (!$story) {
        $story = \App\Models\Story::create($data);
    } else {
        $story->update($data);
    }
    return redirect()->route('admin.story.index')->with('success', 'CTA updated!');
}
}