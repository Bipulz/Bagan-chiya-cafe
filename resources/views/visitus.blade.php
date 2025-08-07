<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Bagan Chiya Cafe</title>
    @include('layouts.links')
    <link href="{{ asset('css/visitus.css') }}?ver={{ config('app.asset_version') }}" rel="stylesheet">

</head>

<body>
    @include('layouts.header')
    <section class="about-hero">
        <div class="hero-content">
            <h1>{{ $about->title ?? 'About Us' }}</h1>
            <h1><span>{{ $about->subtitle ?? 'Our Story' }}</span></h1>
            <p>{{ $about->description ?? 'Discover the heart of Bagan Chiya Cafe, where tradition meets taste in every cup and bite.' }}
            </p>
        </div>
    </section>

    <section class="about-section">
        <h2>{{ $about->about_title ?? '' }}</h2>
        <div class="about-content">
            @if (!empty($about->paragraph1))
                <p>{{ $about->paragraph1 }}</p>
            @endif
            @if (!empty($about->paragraph2))
                <p>{{ $about->paragraph2 }}</p>
            @endif
        </div>
    </section>

    <div class="visit-hours-section">
        <div class="map-title">
            <h2>{{ $about->map_title ?? 'Find Us' }}</h2>
        </div>
        <div class="map-section">
            <div class="map-container">
                @if (!empty($about->map_url))
                    {!! $about->map_url !!}
                @endif
                <div class="map-overlay">
                    Google Maps | © OpenStreetMap contributors
                </div>
            </div>
        </div>

        <div class="info-section">
            <div class="header">
                <h1 class="title">{{ $about->visit_title ?? 'Visit & Hours' }}</h1>
                <div class="location">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    {{ $about->location ?? '' }}
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <a href="tel:{{ $about->phone ?? '' }}" style="color: #d1e8d4; text-decoration: none;">
                            {{ $about->phone ?? '' }}
                        </a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-location contact-icon"></i>
                        {{ $about->secondary_location ?? '' }}
                    </div>
                </div>
                <a href="{{ $about->directions_url ?? '#' }}" target="_blank" class="directions-btn">
                    Get Directions
                </a>
            </div>
            <div class="hours-list">
                <p>{{ $about->hours ?? '' }}</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}?ver={{ config('app.asset_version') }}"></script>
</body>

</html>
