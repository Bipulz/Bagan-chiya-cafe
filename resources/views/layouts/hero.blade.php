<section class="hero">
    <div class="hero-content">
        <div class="badge">
            <i class="fas fa-leaf badge-icon"></i>
            <span>{{ $hero->badge_text ?? '' }}</span>
        </div>
        <h1 class="welcome-message">
            {{ $hero->hero_title ?? '' }} <span>Bagan Chiya Cafe</span>
        </h1>
        <p class="description">
            {{ $hero->hero_description ?? '' }}
        </p>
        <div class="cta">
            <a href="{{ $hero->primary_cta_link ?? '#' }}" class="btn primary">
                <span>{{ $hero->primary_cta_text ?? '' }}</span>
                <i class="fas fa-arrow-right btn-icon"></i>
            </a>
            <a href="{{ $hero->secondary_cta_link ?? '#' }}" class="btn secondary">
                <span>{{ $hero->secondary_cta_text ?? '' }}</span>
                <i class="fas fa-book btn-icon"></i>
            </a>
        </div>
        <div class="stats">
            @if(!empty($stats))
                @foreach($stats as $stat)
                    <div class="stat">
                        <i class="fas {{ $stat->stat_icon ?? '' }} stat-icon"></i>
                        <div class="stat-number">{{ $stat->stat_number ?? '' }}</div>
                        <div>{{ $stat->stat_label ?? '' }}</div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>