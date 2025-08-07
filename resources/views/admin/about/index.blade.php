@extends('admin.layouts.base')
@section('content')
    <section class="about-hero">
        <div class="hero-content">
            <h1>{{ $about->title ?? 'About Us' }}</h1>
            <h1><span>{{ $about->subtitle ?? 'Our Story' }}</span></h1>
            <p id="dynamic-date">
                {{ $about->description ?? 'Discover the heart of Bagan Chiya Cafe, where tradition meets taste in every cup and bite.' }}
            </p>

            <div class="actions">
                <button class="edit-hero-btn"
                    onclick="openEditHeroOverlay('{{ $about->title ?? 'About Us' }}', '{{ $about->subtitle ?? 'Our Story' }}', '{{ $about->description ?? 'Discover the heart of Bagan Chiya Cafe, where tradition meets taste in every cup and bite.' }}')">
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
                <form id="editHeroForm" method="POST" action="{{ route('admin.visitus.hero.update') }}">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input id="editHeroTitle" name="hero_title" type="text" value="{{ $about->title ?? 'About Us' }}"
                            required />
                    </div>
                    <div class="form-group">
                        <label>Subtitle</label>
                        <input id="editHeroSubtitle" name="hero_subtitle" type="text"
                            value="{{ $about->subtitle ?? 'Our Story' }}" required />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editHeroDescription" name="hero_description" required>{{ $about->description ?? 'Discover the heart of Bagan Chiya Cafe, where tradition meets taste in every cup and bite.' }}</textarea>
                    </div>
                    <button type="submit"><i class="fas fa-save"></i> Save Hero</button>
                </form>
            </div>
        </div>
    </div>


    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
            .about-hero {
                padding: 16px;
                background: #ffffff;
                border-radius: 10px;
                margin-bottom: 16px;
                border-left: 3px solid #2a8b4e;
            }

            .hero-content {
                text-align: center;
            }

            .hero-content h1 {
                font-size: 1.5em;
                color: #1a3c34;
            }

            .hero-content h1 span {
                color: #2a8b4e;
            }

            .hero-content p {
                font-size: 0.9em;
                color: #4a5568;
                margin: 8px 0;
            }

            .hero-content .actions {
                display: flex;
                justify-content: center;
                margin-top: 8px;
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
                max-width: 450px;
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
                margin-bottom: 8px;
            }

            .overlay-content .form-group {
                margin-bottom: 8px;
            }

            .overlay-content .form-section label {
                font-size: 0.85em;
                font-weight: 500;
                color: #1a3c34;
                margin-bottom: 5px;
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

            .overlay-content .form-section button:hover {
                background: linear-gradient(135deg, #3da65f 0%, #2a8b4e 100%);
                transform: scale(1.01);
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            }

            .overlay-content .form-section button:active {
                transform: scale(1);
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const dateElement = document.getElementById('dynamic-date');
                const today = new Date('2025-08-07T11:57:00+05:45');
                const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                const dayName = days[today.getDay()];
                dateElement.textContent = `${dateElement.textContent} Available today, ${dayName}.`;
            });

            function openEditHeroOverlay(title, subtitle, description) {
                closeAllOverlays();
                document.getElementById('editHeroTitle').value = title;
                document.getElementById('editHeroSubtitle').value = subtitle;
                document.getElementById('editHeroDescription').value = description;
                document.getElementById('editHeroOverlay').classList.add('active');
            }

            function closeEditHeroOverlay() {
                document.getElementById('editHeroOverlay').classList.remove('active');
            }

            function closeAllOverlays() {
                document.querySelectorAll('.overlay').forEach(overlay => {
                    overlay.classList.remove('active');
                });
            }
        </script>
    @endpush
@endsection
