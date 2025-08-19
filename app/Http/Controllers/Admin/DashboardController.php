<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DashboardHero;
use App\Models\Dashboard;
use App\Models\WhyUsCard;
use App\Models\Testimonial;
use App\Models\SpecialOffer;
use App\Models\AdditionalSection;
use Illuminate\Http\Request;

// Manages admin dashboard content
class DashboardController extends Controller
{
    // Show dashboard with all sections
    public function index()
    {
        $hero = DashboardHero::first(); 
        $stats = Dashboard::all(); 
        // Map stats for frontend
        $mappedStats = $stats->map(function ($stat) {
            return [
                'icon' => $stat->stat_icon,
                'number' => $stat->stat_number,
                'info' => $stat->stat_label,
            ];
        });

        $whyUsCards = WhyUsCard::all();
        $whyUsHeading = $whyUsCards->first()->heading ?? 'Why Choose Us'; 

        $testimonials = Testimonial::all(); 
        $testimonialsTitle = $testimonials->first()->section_title ?? 'What Our Customers Say'; 

        $specialOfferCards = SpecialOffer::all(); 
        $specialOfferTitle = $specialOfferCards->first()->section_title ?? 'Special Offer'; 

        $additionalSections = AdditionalSection::orderBy('order')->get()->toArray(); 

        // Return view with all data
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
            'whyUsCards' => $whyUsCards,
            'whyUsHeading' => $whyUsHeading,
            'testimonials' => $testimonials,
            'testimonialsTitle' => $testimonialsTitle,
            'specialOfferCards' => $specialOfferCards,
            'specialOfferTitle' => $specialOfferTitle,
            'additionalSections' => $additionalSections,
        ]);
    }

    // Update hero section and stats
    public function updateHero(Request $request)
    {
        $hero = DashboardHero::first() ?? new DashboardHero(); // Get or create hero

        // Update hero fields
        $hero->badge_text = $request->input('badge_text');
        $hero->hero_title = $request->input('welcome');
        $hero->hero_description = $request->input('hero_description');
        $hero->primary_cta_text = $request->input('primary_cta_text');
        $hero->primary_cta_link = $request->input('primary_cta_link');
        $hero->secondary_cta_text = $request->input('secondary_cta_text');
        $hero->secondary_cta_link = $request->input('secondary_cta_link');
        $hero->save();

        Dashboard::truncate(); // Clear existing stats
        // Add new stats
        foreach ($request->input('stats', []) as $stat) {
            if (!empty($stat['icon']) && is_numeric($stat['number']) && !empty($stat['info'])) {
                Dashboard::create([
                    'stat_icon' => $stat['icon'],
                    'stat_number' => $stat['number'],
                    'stat_label' => $stat['info'],
                ]);
            }
        }

        return redirect()->route('admin.dashboard.index')->with('success', 'Hero and stats updated!');
    }

    // Update "Why Choose Us" section
    public function updateWhyUs(Request $request)
    {
        $heading = $request->input('heading', 'Why Choose Us'); // Get heading or default
        WhyUsCard::truncate(); // Clear existing cards

        // Add new cards
        foreach ($request->input('cards', []) as $card) {
            WhyUsCard::create([
                'heading' => $heading,
                'icon' => $card['icon'] ?? '',
                'title' => $card['title'] ?? '',
                'description' => $card['description'] ?? '',
            ]);
        }

        return redirect()->route('admin.dashboard.index')->with('success', 'Why Choose Us updated!');
    }



public function updateTestimonials(Request $request)
{
    $request->validate([
        'testimonials_title' => 'required|string|max:255',
        'testimonials' => 'required|array',
        'testimonials.*.text' => 'required|string',
        'testimonials.*.rating' => 'required|numeric|min:0|max:5',
        'testimonials.*.author' => 'required|string|max:255',
    ]);

    $sectionTitle = $request->input('testimonials_title');
    $submittedIds = [];

    foreach ($request->input('testimonials') as $testimonial) {
        if (!empty($testimonial['id'])) {
            $existingTestimonial = Testimonial::find($testimonial['id']);
            if ($existingTestimonial) {
                $existingTestimonial->update([
                    'section_title' => $sectionTitle,
                    'text' => $testimonial['text'],
                    'rating' => $testimonial['rating'],
                    'author' => $testimonial['author'],
                ]);
                $submittedIds[] = $existingTestimonial->id;
            }
        } else {
            $newTestimonial = Testimonial::create([
                'section_title' => $sectionTitle,
                'text' => $testimonial['text'],
                'rating' => $testimonial['rating'],
                'author' => $testimonial['author'],
            ]);
            $submittedIds[] = $newTestimonial->id;
        }
    }

    // Delete testimonials not present in the submitted list
    if (count($submittedIds)) {
        Testimonial::whereNotIn('id', $submittedIds)->delete();
    } else {
        Testimonial::truncate();
    }

    // Update section title for all testimonials
    Testimonial::query()->update(['section_title' => $sectionTitle]);

    return redirect()->route('admin.dashboard.index')->with('success', 'Testimonials updated!');
}
    // Update special offers section
    public function updateSpecialOffer(Request $request)
    {
        $sectionTitle = $request->input('special_offer_title', 'Special Offers');
        $submittedIds = [];

        // Update or create special offers
        foreach ($request->input('special_offers', []) as $offerData) {
            if (!empty($offerData['id'])) {
                $offer = SpecialOffer::find($offerData['id']);
                if ($offer) {
                    $offer->update([
                        'title' => $offerData['title'],
                        'description' => $offerData['description'],
                        'price' => $offerData['price'],
                        'original_price' => $offerData['original_price'] ?? null,
                        'discount_code' => $offerData['discount_code'] ?? null,
                        'discount_percentage' => $offerData['discount_percentage'] ?? null,
                        'section_title' => $sectionTitle,
                    ]);
                    $submittedIds[] = $offer->id;
                }
            } else {
                $newOffer = SpecialOffer::create([
                    'title' => $offerData['title'],
                    'description' => $offerData['description'],
                    'price' => $offerData['price'],
                    'original_price' => $offerData['original_price'] ?? null,
                    'discount_code' => $offerData['discount_code'] ?? null,
                    'discount_percentage' => $offerData['discount_percentage'] ?? null,
                    'section_title' => $sectionTitle,
                ]);
                $submittedIds[] = $newOffer->id;
            }
        }

        // Delete old offers
        SpecialOffer::whereNotIn('id', $submittedIds)->delete();
        SpecialOffer::query()->update(['section_title' => $sectionTitle]);

        return redirect()->back()->with('success', 'Special offers updated!');
    }

    // Update additional sections
    public function updateAdditionalSections(Request $request)
    {
        $sections = $request->input('sections', []);
        $submittedIds = [];

        // Update or create sections
        foreach ($sections as $sectionData) {
            if (!empty($sectionData['id'])) {
                $section = AdditionalSection::find($sectionData['id']);
                if ($section) {
                    $section->update([
                        'title' => $sectionData['title'],
                        'description' => $sectionData['description'],
                        'link_text' => $sectionData['link_text'],
                        'link_url' => $sectionData['link_url'],
                        'icon' => $sectionData['icon'],
                        'target' => $sectionData['target'],
                        'order' => $sectionData['order'] ?? 0,
                    ]);
                    $submittedIds[] = $section->id;
                }
            } else {
                $newSection = AdditionalSection::create([
                    'title' => $sectionData['title'],
                    'description' => $sectionData['description'],
                    'link_text' => $sectionData['link_text'],
                    'link_url' => $sectionData['link_url'],
                    'icon' => $sectionData['icon'],
                    'target' => $sectionData['target'],
                    'order' => $sectionData['order'] ?? 0,
                ]);
                $submittedIds[] = $newSection->id;
            }
        }

        // Delete old sections
        if (count($submittedIds)) {
            AdditionalSection::whereNotIn('id', $submittedIds)->delete();
        } else {
            AdditionalSection::truncate();
        }

        return redirect()->route('admin.dashboard.index')->with('success', 'Additional sections updated!');
    }
}