<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Story - Bagan Chiya Cafe</title>
    <link href="https://fonts.googleapis.com/css2?family=Great_Vibes&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/story.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    <section class="story-hero">
        <div class="story-hero-content">
            <div class="badge">
                <span class="badge-icon">🌿</span>
                <span>Our Heritage</span>
            </div>
            <h1>Our Story</h1>
            <p class="description">
                Discover the journey of Bagan Chiya Cafe, where tradition meets passion in every cup.
            </p>
        </div>
    </section>
    <section class="story-content">
        <div class="content-block">
            <h2>Our Beginnings</h2>
            <p>
                Founded in the lush highlands of Nepal over 15 years ago, Bagan Chiya Cafe began as a family endeavor to
                share the authentic flavors of Nepali tea with the world. Inspired by the rich tea culture, we set out
                to preserve and celebrate our heritage.
            </p>
        </div>
        <div class="content-block">
            <h2>Our Craft</h2>
            <p>
                Each tea blend is handcrafted with care, using leaves sourced directly from local farmers. Our process
                honors centuries-old techniques, ensuring every sip carries the essence of Nepal’s pristine landscapes.
            </p>
        </div>
        <div class="gallery">
            <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                alt="Tea Leaves">
            <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                alt="Tea Preparation">
            <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                alt="Tea Garden">
            <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                alt="Tea Ceremony">
            <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                alt="Tea Tasting">
        </div>
        <div class="content-block">
            <h2>Our Mission</h2>
            <p>
                We are committed to sustainability, community, and quality. By supporting local farmers and preserving
                traditional methods, we aim to create a meaningful connection between our teas and their origins.
            </p>
            <a href="{{ route('home') }}" class="btn primary">Back to Home</a>
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
