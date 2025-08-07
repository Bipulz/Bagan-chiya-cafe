<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu - Bagan Chiya Cafe</title>
    @include('layouts.links')
    <link href="{{ asset('css/menu.css') }}?ver={{ config('app.asset_version') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    <section class="menu-hero">
        <div class="hero-content">
            <h1>{{ $heroTitle }}</h1>
            <h1><span>{{ $heroSubtitle }}</span></h1>
            <p id="dynamic-date">
                {{ $heroDescription }}
            </p>
        </div>
    </section>
    <section class="menu-section">
        <h2>{{ $menuTitle }}</h2>
        <div class="menu-categories">
            @foreach ($categories as $category)
                <div class="menu-category">
                    <h3>
                        <i class="fas {{ $category->icon }}"></i> {{ $category->name }}
                    </h3>
                    <ul class="menu-item-list">
                        @foreach ($category->items as $item)
                            <li class="menu-item">
                                <span>{{ $item->name }}</span>
                                <span class="price">
                                    Rs. {{ number_format($item->price, 2) }}
                                    @if ($item->note)
                                        <small style="font-size: 0.8em;">({{ $item->note }})</small>
                                    @endif
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>


    <section class="cta-section">
        <h2>{{ $ctaTitle }}</h2>
        <p>{{ $ctaText }}</p>
        <a href="{{ $ctaLink }}" target="_blank" class="cta-button">
            {{ $ctaButton }}
        </a>
    </section>
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateElement = document.getElementById('dynamic-date');
            const today = new Date();
            const options = {
                weekday: 'long'
            };
            const dayName = today.toLocaleDateString('en-US', options);
            dateElement.textContent = `Explore our fresh offerings available today, ${dayName}.`;
        });
    </script>
    <script src="?ver={{ config('app.asset_version') }}"></script>
</body>

</html>
