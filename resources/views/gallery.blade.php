<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery - Bagan Chiya Cafe</title>
    @include('layouts.links')
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">

</head>

<body>
    @include('layouts.header')
    <section class="gallery-hero">
        <div class="hero-content">
            <h1>Our Gallery</h1>
            <h1><span>Stories in Every Frame</span></h1>
            <p>
                Explore the visual journey of Bagan Chiya Cafe, capturing the essence of our tea heritage and community
                through stunning photography.
            </p>
        </div>
    </section>

    <section class="gallery-section" id="gallery-section">
        <h2 class="gallery-title">Gallery Showcase</h2>
        <div class="enhanced-gallery" id="gallery-grid">
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                    alt="Premium Tea Leaves"
                    onclick="showLightbox(this.src, 'Premium Tea Leaves', 'Hand-picked from Eastern Nepal, August 02, 2025 06:16 PM +0545')">
                <div class="overlay">
                    <h3>Premium Tea Leaves</h3>
                    <p>Hand-picked from Eastern Nepal, August 02, 2025 06:16 PM +0545</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                    alt="Artisanal Preparation"
                    onclick="showLightbox(this.src, 'Artisanal Preparation', 'Crafted with care, July 2025')">
                <div class="overlay">
                    <h3>Artisanal Preparation</h3>
                    <p>Crafted with care, July 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                    alt="Tea Gardens"
                    onclick="showLightbox(this.src, 'Pristine Tea Gardens', 'Himalayan foothills, June 2025')">
                <div class="overlay">
                    <h3>Pristine Tea Gardens</h3>
                    <p>Himalayan foothills, June 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                    alt="Tea Ceremony"
                    onclick="showLightbox(this.src, 'Cultural Ceremony', 'Traditional event, August 01, 2025')">
                <div class="overlay">
                    <h3>Cultural Ceremony</h3>
                    <p>Traditional event, August 01, 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                    alt="Tea Tasting"
                    onclick="showLightbox(this.src, 'Expert Tea Tasting', 'Tasting session, July 2025')">
                <div class="overlay">
                    <h3>Expert Tea Tasting</h3>
                    <p>Tasting session, July 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                    alt="Harvest Season"
                    onclick="showLightbox(this.src, 'Harvest Season', 'Annual harvest, August 2025')">
                <div class="overlay">
                    <h3>Harvest Season</h3>
                    <p>Annual harvest, August 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                    alt="Tea Blending" onclick="showLightbox(this.src, 'Tea Blending', 'Seasonal blend, July 2025')">
                <div class="overlay">
                    <h3>Tea Blending</h3>
                    <p>Seasonal blend, July 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                    alt="Farmer Smiles" onclick="showLightbox(this.src, 'Farmer Smiles', 'Harvest joy, August 2025')">
                <div class="overlay">
                    <h3>Farmer Smiles</h3>
                    <p>Harvest joy, August 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                    alt="Community Gathering"
                    onclick="showLightbox(this.src, 'Community Gathering', 'Cafe event, July 2025')">
                <div class="overlay">
                    <h3>Community Gathering</h3>
                    <p>Cafe event, July 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                    alt="Tea Ritual" onclick="showLightbox(this.src, 'Tea Ritual', 'Traditional ritual, August 2025')">
                <div class="overlay">
                    <h3>Tea Ritual</h3>
                    <p>Traditional ritual, August 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                    alt="Morning Harvest"
                    onclick="showLightbox(this.src, 'Morning Harvest', 'Dawn pick, August 02, 2025 06:16 PM +0545')">
                <div class="overlay">
                    <h3>Morning Harvest</h3>
                    <p>Dawn pick, August 02, 2025 06:16 PM +0545</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                    alt="Tea Workshop" onclick="showLightbox(this.src, 'Tea Workshop', 'Learning session, July 2025')">
                <div class="overlay">
                    <h3>Tea Workshop</h3>
                    <p>Learning session, July 2025</p>
                </div>
            </div>
        </div>
        <div class="lightbox" id="lightbox">
            <span class="close" onclick="closeLightbox()">&times;</span>
            <span class="nav prev" onclick="changeImage(-1)">&#10094;</span>
            <span class="nav next" onclick="changeImage(1)">&#10095;</span>
            <img src="" alt="Lightbox Image">
            <div class="caption" id="lightbox-caption"></div>
        </div>
    </section>

    <section class="behind-the-scenes" id="behind-the-scenes">
        <h2 class="gallery-title">Behind the Scenes</h2>
        <div class="enhanced-gallery" id="behind-the-scenes-grid">
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                    alt="Tea Picking"
                    onclick="showLightbox(this.src, 'Tea Picking', 'Behind the scenes, August 02, 2025 06:16 PM +0545')">
                <div class="overlay">
                    <h3>Tea Picking</h3>
                    <p>Behind the scenes, August 02, 2025 06:16 PM +0545</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                    alt="Processing Tea"
                    onclick="showLightbox(this.src, 'Processing Tea', 'Behind the scenes, July 2025')">
                <div class="overlay">
                    <h3>Processing Tea</h3>
                    <p>Behind the scenes, July 2025</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seasonal-highlights" id="seasonal-highlights">
        <h2 class="gallery-title">Seasonal Highlights</h2>
        <div class="enhanced-gallery" id="seasonal-highlights-grid">
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                    alt="Summer Harvest"
                    onclick="showLightbox(this.src, 'Summer Harvest', 'Seasonal highlight, August 2025')">
                <div class="overlay">
                    <h3>Summer Harvest</h3>
                    <p>Seasonal highlight, August 2025</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                    alt="Winter Blend"
                    onclick="showLightbox(this.src, 'Winter Blend', 'Seasonal highlight, December 2024')">
                <div class="overlay">
                    <h3>Winter Blend</h3>
                    <p>Seasonal highlight, December 2024</p>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-upload" id="photo-upload">
        <div class="photo-upload-content">
            <h2>Share Your Photos</h2>
            <p>Showcase your love for Bagan Chiya Cafe tea! Share your story with a title and description to be featured
                in our gallery.</p>
            <div class="upload-card">
                <form id="photo-upload-form">
                    <div>
                        <label for="name">Your Name</label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div>
                        <label for="title">Photo Title</label>
                        <input type="text" id="title" placeholder="Give your photo a title" required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea id="description" placeholder="Describe your moment" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <section class="cta-section" id="cta-section">
        <h2>Visit Bagan Chiya Cafe</h2>
        <p>Experience the finest teas and join our community. Subscribe to our newsletter for exclusive offers and
            updates!</p>
        <button class="cta-button">Join Now</button>
    </section>
    @include('layouts.footer')


    <script>
        function showLightbox(src, title, description) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = lightbox.querySelector('img');
            const caption = document.getElementById('lightbox-caption');
            lightboxImg.src = src;
            caption.textContent = `${title} - ${description.split(', ')[0]}`;
            lightbox.classList.add('active');
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('active');
        }

        function changeImage(direction) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = lightbox.querySelector('img');
            const images = document.querySelectorAll('.enhanced-gallery img');
            let currentIndex = Array.from(images).findIndex(img => img.src === lightboxImg.src);
            currentIndex = (currentIndex + direction + images.length) % images.length;
            lightboxImg.src = images[currentIndex].src;
            showLightbox(images[currentIndex].src, images[currentIndex].getAttribute('onclick').match(/'([^']+)'/)[1],
                images[currentIndex].getAttribute('onclick').match(/'([^']+)'/)[2]);
        }

        const form = document.getElementById('photo-upload-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Photo submission recorded! (This is a demo alert.)');
            form.reset();
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
