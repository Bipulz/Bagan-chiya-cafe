@extends('admin.layouts.base')
@section('content')
    <div class="main-content">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <div class="badge">
                    <i class="fas fa-leaf badge-icon"></i>
                    <span>{{ $badgeText }}</span>
                </div>
                <h1 class="welcome-message">{{ $heroTitle }}</h1>
                <p class="description">
                    {{ $heroDescription }}
                </p>
                <div class="cta">
                    <a href="{{ $primaryCtaLink }}" class="btn primary">
                        <span>{{ $primaryCtaText }}</span>
                        <i class="fas fa-arrow-right btn-icon"></i>
                    </a>
                    <a href="{{ $secondaryCtaLink }}" class="btn secondary">
                        <span>{{ $secondaryCtaText }}</span>
                        <i class="fas fa-book btn-icon"></i>
                    </a>
                </div>
                <div class="stats">
                    @foreach($stats as $stat)
                        <div class="stat">
                            <i class="fas {{ $stat->stat_icon }} stat-icon"></i>
                            <div class="stat-number">{{ $stat->stat_number }}</div>
                            <div>{{ $stat->stat_label }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="actions">
                    <button class="edit-hero-btn" onclick="openEditHeroOverlay('{{ $badgeText }}', '{{ $heroTitle }}', '{{ $heroDescription }}', '{{ $primaryCtaText }}', '{{ $primaryCtaLink }}', '{{ $secondaryCtaText }}', '{{ $secondaryCtaLink }}', '{{ json_encode($stats) }}')">
                        <i class="fas fa-edit"></i> Edit Hero
                    </button>
                </div>
            </div>
        </section>

        <!-- Overlay for Edit Hero Section -->
        <div class="overlay" id="editHeroOverlay">
            <div class="overlay-content">
                <button class="close-btn" onclick="closeEditHeroOverlay()"><i class="fas fa-times"></i></button>
                <div class="form-section">
                    <h2>Edit Hero Section</h2>
                    <form id="editHeroForm" method="POST" action="{{ route('admin.hero.update') }}">
                        @csrf
                        @if ($errors->any())
                            <div class="error-message">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group-section">
                            <h3>Content</h3>
                            <div class="form-group">
                                <label>Heading</label>
                                <input id="editBadgeText" name="badge_text" type="text" value="{{ old('badge_text', $badgeText) }}" required />
                                @error('badge_text')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Welcome</label>
                                <input id="editWelcome" name="welcome" type="text" value="{{ old('welcome', $heroTitle) }}" required />
                                @error('welcome')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="editHeroDescription" name="hero_description" required>{{ old('hero_description', $heroDescription) }}</textarea>
                                @error('hero_description')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>CTA 1 Text</label>
                                <input id="editPrimaryCtaText" name="primary_cta_text" type="text" value="{{ old('primary_cta_text', $primaryCtaText) }}" required />
                                @error('primary_cta_text')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>CTA 1 Link</label>
                                <input id="editPrimaryCtaLink" name="primary_cta_link" type="url" value="{{ old('primary_cta_link', $primaryCtaLink) }}" required />
                                @error('primary_cta_link')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>CTA 2 Text</label>
                                <input id="editSecondaryCtaText" name="secondary_cta_text" type="text" value="{{ old('secondary_cta_text', $secondaryCtaText) }}" required />
                                @error('secondary_cta_text')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>CTA 2 Link</label>
                                <input id="editSecondaryCtaLink" name="secondary_cta_link" type="url" value="{{ old('secondary_cta_link', $secondaryCtaLink) }}" required />
                                @error('secondary_cta_link')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group-section">
                            <h3>Stats</h3>
                            <div id="statsContainer">
                                @for($i = 0; $i < 3; $i++)
                                    <div class="stat-group" data-index="{{ $i }}">
                                        <h4>Stat {{ $i + 1 }}</h4>
                                        <div class="form-group">
                                            <label>Icon (Font Awesome Class)</label>
                                            <input name="stats[{{ $i }}][icon]" type="text" class="stat-icon" value="{{ old('stats.' . $i . '.icon', $stats[$i]->stat_icon ?? '') }}" required />
                                            <a href="https://fontawesome.com/search?o=r&m=free" target="_blank" class="icon-link">View Font Awesome Icons</a>
                                            @error('stats.' . $i . '.icon')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Number</label>
                                            <input name="stats[{{ $i }}][number]" type="text" class="stat-number" value="{{ old('stats.' . $i . '.number', $stats[$i]->stat_number ?? '') }}" required />
                                            @error('stats.' . $i . '.number')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Info</label>
                                            <input name="stats[{{ $i }}][info]" type="text" class="stat-info" value="{{ old('stats.' . $i . '.info', $stats[$i]->stat_label ?? '') }}" required />
                                            @error('stats.' . $i . '.info')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <button type="submit" id="saveHeroBtn"><i class="fas fa-save"></i> Save Hero</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <style>
            /* Same styles as provided, no changes needed */
            .main-content {
                padding: 16px;
                background: radial-gradient(circle, #ffffff 0%, #f9faf9 100%);
                margin: 12px;
                border-radius: 10px;
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
            }

            .hero {
                padding: 16px;
                background: #ffffff;
                border-radius: 10px;
                margin-bottom: 16px;
                border-left: 3px solid #2a8b4e;
                text-align: center;
            }

            .hero-content {
                max-width: 1000px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .badge {
                display: inline-flex;
                align-items: center;
                gap: 5px;
                background: #e6f0e9;
                padding: 6px 12px;
                border-radius: 16px;
                font-size: 0.85em;
                color: #2a8b4e;
                margin-bottom: 12px;
            }

            .badge-icon {
                font-size: 1em;
            }

            .welcome-message {
                font-size: 1.8em;
                font-weight: 500;
                color: #1a3c34;
                line-height: 1.2;
                margin-bottom: 8px;
            }

            .welcome-message span {
                color: #2a8b4e;
                font-weight: 600;
            }

            .description {
                font-size: 0.95em;
                color: #4a5568;
                max-width: 700px;
                margin: 8px auto 12px;
                line-height: 1.6;
            }

            .cta {
                display: flex;
                gap: 12px;
                flex-wrap: wrap;
                justify-content: center;
                margin: 12px 0;
            }

            .btn {
                padding: 6px 12px;
                font-size: 0.85em;
                border-radius: 16px;
                border: none;
                cursor: pointer;
                display: inline-flex;
                align-items: center;
                gap: 5px;
                font-weight: 500;
                transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
                text-transform: uppercase;
            }

            .btn.primary {
                background: linear-gradient(135deg, #2a8b4e 0%, #1a5630 100%);
                color: #ffffff;
            }

            .btn.secondary {
                background: #ffffff;
                border: 1px solid #2a8b4e;
                color: #2a8b4e;
            }

            .btn:hover {
                transform: scale(1.01);
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            }

            .btn.primary:hover {
                background: linear-gradient(135deg, #3da65f 0%, #2a8b4e 100%);
            }

            .btn.secondary:hover {
                background: #e6f0e9;
            }

            .btn-icon {
                font-size: 0.9em;
                transition: transform 0.2s ease;
            }

            .btn:hover .btn-icon {
                transform: translateX(4px);
            }

            .stats {
                display: flex;
                gap: 24px;
                justify-content: center;
                margin-top: 24px;
            }

            .stat {
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 4px;
            }

            .stat-icon {
                font-size: 1.5em;
                color: #2a8b4e;
                margin-bottom: 4px;
            }

            .stat-number {
                font-size: 1.4em;
                font-weight: 500;
                color: #1a3c34;
            }

            .stat div:last-child {
                font-size: 0.9em;
                color: #4a5568;
            }

            .actions {
                display: flex;
                justify-content: center;
                margin-top: 12px;
            }

            .edit-hero-btn {
                background: linear-gradient(135deg, #2a8b4e 0%, #1a5630 100%);
                color: #ffffff;
                font-weight: 500;
                font-size: 0.85em;
                padding: 6px 12px;
                border: none;
                border-radius: 16px;
                cursor: pointer;
                display: flex;
                align-items: center;
                gap: 5px;
                transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            }
    

            .edit-hero-btn:hover {
                background: linear-gradient(135deg, #3da65f 0%, #2a8b4e 100%);
                transform: scale(1.01);
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            }

            .edit-hero-btn:active {
                transform: scale(1);
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.4);
                z-index: 1000;
                justify-content: center;
                align-items: center;
                animation: fadeIn 0.2s ease;
            }

            .overlay.active {
                display: flex;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            .overlay-content {
                background: #ffffff;
                padding: 16px;
                border-radius: 10px;
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
                width: 90%;
                max-width: 500px;
                max-height: 80vh;
                overflow-y: auto;
                position: relative;
                animation: slideIn 0.2s ease;
            }

            @keyframes slideIn {
                from {
                    transform: translateY(10px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .overlay-content .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                background: none;
                border: none;
                font-size: 1.2em;
                color: #1a3c34;
                cursor: pointer;
                transition: color 0.2s ease, transform 0.2s ease;
            }

            .overlay-content .close-btn:hover {
                color: #2a8b4e;
                transform: scale(1.1);
            }

            .overlay-content .form-section {
                background: #f9faf9;
                padding: 12px;
                border-radius: 8px;
                border-left: 3px solid #2a8b4e;
            }

            .overlay-content .form-section h2 {
                font-size: 1.2em;
                font-weight: 500;
                color: #2a8b4e;
                margin-bottom: 12px;
            }

            .overlay-content .form-section .form-group-section {
                margin-bottom: 16px;
                padding: 12px;
                background: #ffffff;
                border-radius: 6px;
                border: 1px solid #e6f0e9;
            }

            .overlay-content .form-section .form-group-section h3 {
                font-size: 1em;
                font-weight: 500;
                color: #2a8b4e;
                margin-bottom: 12px;
            }

            .overlay-content .form-section .form-group {
                margin-bottom: 12px;
            }

            .overlay-content .form-section label {
                font-size: 0.85em;
                font-weight: 500;
                color: #1a3c34;
                margin-bottom: 6px;
                display: block;
            }

            .overlay-content .form-section input,
            .overlay-content .form-section textarea {
                width: 100%;
                padding: 8px;
                border: 1px solid #b8d7bc;
                border-radius: 6px;
                font-size: 0.9em;
                color: #1a3c34;
                background: #ffffff;
                transition: border-color 0.2s ease, box-shadow 0.2s ease;
            }

            .overlay-content .form-section input.error,
            .overlay-content .form-section textarea.error {
                border-color: #dc2626;
                box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.15);
            }

            .overlay-content .form-section textarea {
                resize: vertical;
                min-height: 80px;
            }

            .overlay-content .form-section input:focus,
            .overlay-content .form-section textarea:focus {
                border-color: #3da65f;
                box-shadow: 0 0 0 2px rgba(61, 166, 95, 0.15);
                outline: none;
            }

            .overlay-content .form-section .icon-link {
                display: inline-block;
                margin-top: 4px;
                font-size: 0.75em;
                color: #2a8b4e;
                text-decoration: none;
                transition: color 0.2s ease;
            }

            .overlay-content .form-section .icon-link:hover {
                color: #3da65f;
            }

            .overlay-content .form-section button {
                width: 100%;
                padding: 8px;
                background: linear-gradient(135deg, #2a8b4e 0%, #1a5630 100%);
                color: #ffffff;
                font-weight: 500;
                font-size: 0.85em;
                border: none;
                border-radius: 16px;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 5px;
                transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            }

            .overlay-content .form-section button:disabled {
                background: #b8d7bc;
                cursor: not-allowed;
                transform: none;
                box-shadow: none;
            }

            .overlay-content .form-section button:hover:not(:disabled) {
                background: linear-gradient(135deg, #3da65f 0%, #2a8b4e 100%);
                transform: scale(1.01);
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            }

            .overlay-content .form-section button:active:not(:disabled) {
                transform: scale(1);
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            .overlay-content .form-section .stat-group {
                border-top: 1px solid #e6f0e9;
                padding-top: 12px;
                margin-top: 12px;
            }

            .overlay-content .form-section .stat-group:first-child {
                border-top: none;
                padding-top: 0;
                margin-top: 0;
            }

            .overlay-content .form-section .stat-group h4 {
                font-size: 0.95em;
                font-weight: 500;
                color: #2a8b4e;
                margin-bottom: 8px;
            }

            .error-message {
                color: #dc2626;
                font-size: 0.85em;
                margin-bottom: 12px;
            }

            /* Desktop (default: width >= 1024px) */
            @media (max-width: 1024px) {
                .main-content {
                    margin: 10px;
                    padding: 12px;
                }

                .stats {
                    gap: 16px;
                }
            }

            /* Tablet (640px <= width < 1024px) */
            @media (max-width: 640px) {
                .main-content {
                    margin: 8px;
                    padding: 10px;
                }

                .welcome-message {
                    font-size: 1.4em;
                }

                .description {
                    font-size: 0.9em;
                }

                .stats {
                    flex-direction: column;
                    gap: 12px;
                }
            }

            /* Mobile (width < 640px) */
            @media (max-width: 480px) {
                .main-content {
                    margin: 4px;
                    padding: 8px;
                }

                .welcome-message {
                    font-size: 1.2em;
                }

                .description {
                    font-size: 0.85em;
                }

                .btn {
                    padding: 5px 10px;
                    font-size: 0.8em;
                }

                .edit-hero-btn {
                    padding: 5px 10px;
                    font-size: 0.8em;
                }

                .overlay-content {
                    padding: 12px;
                    width: 95%;
                }

                .overlay-content .form-section {
                    padding: 10px;
                }

                .overlay-content .form-section button {
                    padding: 6px;
                    font-size: 0.8em;
                }

                .stats {
                    margin-top: 16px;
                }

                .stat-number {
                    font-size: 1.2em;
                }

                .stat div:last-child {
                    font-size: 0.85em;
                }
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            function openEditHeroOverlay(badgeText, welcome, description, primaryCtaText, primaryCtaLink, secondaryCtaText, secondaryCtaLink, statsJson) {
                try {
                    closeAllOverlays();
                    document.getElementById('editBadgeText').value = badgeText || '';
                    document.getElementById('editWelcome').value = welcome || '';
                    document.getElementById('editHeroDescription').value = description || '';
                    document.getElementById('editPrimaryCtaText').value = primaryCtaText || '';
                    document.getElementById('editPrimaryCtaLink').value = primaryCtaLink || '';
                    document.getElementById('editSecondaryCtaText').value = secondaryCtaText || '';
                    document.getElementById('editSecondaryCtaLink').value = secondaryCtaLink || '';

                    let stats = [];
                    try {
                        stats = JSON.parse(statsJson) || [];
                    } catch (e) {
                        console.error('Error parsing statsJson:', e);
                        stats = [];
                    }

                    const statsContainer = document.getElementById('statsContainer');
                    const statGroups = statsContainer.querySelectorAll('.stat-group');
                    statGroups.forEach((group, index) => {
                        const iconInput = group.querySelector('.stat-icon');
                        const numberInput = group.querySelector('.stat-number');
                        const infoInput = group.querySelector('.stat-info');
                        if (index < stats.length) {
                            iconInput.value = stats[index].icon || '';
                            numberInput.value = stats[index].number || '';
                            infoInput.value = stats[index].info || '';
                        } else {
                            iconInput.value = '';
                            numberInput.value = '';
                            infoInput.value = '';
                        }
                    });

                    document.getElementById('editHeroOverlay').classList.add('active');
                } catch (e) {
                    console.error('Error opening hero overlay:', e);
                }
            }

            function closeEditHeroOverlay() {
                document.getElementById('editHeroOverlay').classList.remove('active');
                document.getElementById('editHeroForm').reset();
            }

            function closeAllOverlays() {
                try {
                    document.querySelectorAll('.overlay').forEach(overlay => {
                        overlay.classList.remove('active');
                    });
                } catch (e) {
                    console.error('Error closing overlays:', e);
                }
            }
        </script>
    @endpush
@endsection