<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Story - Bagan Chiya Cafe</title>
    @include('layouts.links')
    <link href="{{ asset('css/story.css') }}?ver={{ config('app.asset_version') }}" rel="stylesheet">


</head>

<body>
    @include('layouts.header')
  
<section class="story-hero">
    <div class="hero-content">
        <div class="badge">
            <i class="fas fa-leaf badge-icon"></i>
            <span>{{ $story->hero_badge ?? '' }}</span>
        </div>
        <h1>{{ $story->hero_title ?? '' }}<span>Bagan Chiya Cafe</span></h1>
        <p class="description">
            {{ $story->hero_description ?? '' }}
        </p>
    </div>
</section>

    <section class="story-content"> 
       <div class="story-container">
    <div class="journey-section">
        <h2 class="section-title">{{ $story->journey_title ?? '' }}</h2>
        <p class="journey-intro">
            {{ $story->journey_intro ?? '' }}
        </p>
    </div>

   <div class="timeline">
    @foreach($timelineItems as $item)
   <div class="timeline-item" ...>
    <div class="year">{{ $item->year }}</div>
    
<div class="title">{{ $item->location }}</div>
    <p class="description">{{ $item->description }}</p>
    @if($item->link)
        <a href="{{ $item->link }}" class="visit">Visit</a>
    @endif
    
</div>
    @endforeach
</div>
</div>

            <div class="gallery-section">
                <h2 class="section-title">Our Tea Heritage</h2>
                <div class="enhanced-gallery">
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                            alt="Premium Tea Leaves">
                        <div class="gallery-overlay">
                            <h4>Premium Tea Leaves</h4>
                            <p>Hand-picked from Eastern Nepal's finest high-altitude gardens</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                            alt="Artisanal Preparation">
                        <div class="gallery-overlay">
                            <h4>Artisanal Preparation</h4>
                            <p>Traditional methods perfected with modern precision and care</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                            alt="Tea Gardens">
                        <div class="gallery-overlay">
                            <h4>Pristine Tea Gardens</h4>
                            <p>Sourced from Nepal's breathtaking Himalayan foothills</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                            alt="Tea Ceremony">
                        <div class="gallery-overlay">
                            <h4>Cultural Ceremony</h4>
                            <p>Honoring Nepal's timeless tea traditions and rituals</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                            alt="Tea Tasting">
                        <div class="gallery-overlay">
                            <h4>Expert Tea Tasting</h4>
                            <p>Curated experiences that awaken all your senses</p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="mission-section">
    <div class="mission-content">
        <h2>{{ $story->mission_title ?? 'Our Mission' }}</h2>
        <p>
            {{ $story->mission_text ?? "We are dedicated to preserving Nepal's tea heritage while building sustainable futures for our farming communities. Through every cup, we connect tea lovers worldwide to the authentic flavors of the Himalayas." }}
        </p>
    </div>
</div>

<div class="values-section">
    <h2 class="section-title">{{ $story->values_title ?? 'Our Values' }}</h2>
    <div class="values-grid">
        @foreach($values as $value)
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas {{ $value->icon }}"></i>
                </div>
                <h3>{{ $value->title }}</h3>
                <p>{{ $value->description }}</p>
            </div>
        @endforeach
    </div>
</div>
            
        <div class="team-section">
    <h2 class="section-title">{{ $story->team_title ?? 'Meet Our Team' }}</h2>
    <p class="journey-intro">
        {{ $story->team_intro ?? "The passionate individuals behind every perfect cup, dedicated to sharing Nepal's tea culture with the world." }}
    </p>
    <div class="team-grid">
        @if(isset($teamMembers) && count($teamMembers) > 0)
            @foreach($teamMembers as $member)
                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas {{ $member->icon }}"></i>
                    </div>
                    <h3>{{ $member->title }}</h3>
                    <p>{{ $member->description }}</p>
                </div>
            @endforeach
        @else
            <p class="no-items">No team members found. Add a new team member to get started.</p>
        @endif
    </div>
</div>

<div class="cta-section">
    <h2 class="section-title">{{ $story->cta_title ?? 'Visit Us in Damak' }}</h2>
    <p class="journey-intro">
        {{ $story->cta_description ?? "Experience the authentic taste of Nepal's finest teas in the heart of where our story began." }}
    </p>
    <a href="{{ $story->cta_link ?? asset('') }}" class="btn-enhanced">
        <i class="fas fa-home"></i>
        <span>{{ $story->cta_button_text ?? 'Back to Home' }}</span>
    </a>
</div>

    </section>
    @include('layouts.footer')

    <script>
        
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                observer.observe(item);
            });
        });
    </script>
    <script src="{{ asset('js/app.js') }}?ver={{ config('app.asset_version') }}"></script>
</body>

</html>
