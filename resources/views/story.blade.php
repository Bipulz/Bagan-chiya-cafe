<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Story - Bagan Chiya Cafe</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/story.css') }}" rel="stylesheet">

    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    <section class="story-hero">
        <div class="hero-content">
            <div class="badge">
                <i class="fas fa-leaf badge-icon"></i>
                <span>Since Mangsir • Born in Damak</span>
            </div>
            <h1>Our Story<span>Bagan Chiya Cafe</span></h1>
            <p class="description">
                From the heart of Damak to your cup - discover the passionate journey of Bagan Chiya Cafe, where
                authentic Nepali tea culture meets modern innovation and community spirit.
            </p>
        </div>
    </section>

    <section class="story-content">
        <div class="story-container">
            <div class="journey-section">
                <h2 class="section-title">The Journey Begins</h2>
                <p class="journey-intro">
                    Every great story has humble beginnings. Ours started in the vibrant town of Damak, where the aroma
                    of fresh tea leaves and the warmth of community spirit inspired us to create something
                    extraordinary.
                </p>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="year">2022</div>
                    <div class="location">Born in Damak</div>
                    <p class="description">
                        In the heart of Damak, Jhapa, Bagan Chiya Cafe opened its doors. Founded by passionate tea
                        enthusiasts who recognized the incredible potential of Nepal's eastern tea heritage, our cafe
                        became a beacon of authentic Nepali tea culture.
                    </p>
                    <a href="#" class="visit">Visit</a>
                </div>
                <div class="timeline-item">
                    <div class="year">2023</div>
                    <div class="location">Mastering Our Craft</div>
                    <p class="description">
                        Each tea blend is meticulously handcrafted using leaves sourced directly from the pristine tea
                        gardens of Ilam, Dhankuta, and Panchthar. Our master tea blenders honor centuries-old
                        techniques, ensuring every cup carries the authentic essence of Nepal's mountainous terroir.
                    </p>
                    <a href="#" class="visit">Visit</a>
                </div>
                <div class="timeline-item">
                    <div class="year">2024</div>
                    <div class="location">Growing Community</div>
                    <p class="description">
                        From our roots in Damak, we've cultivated strong partnerships with over 50 local tea farmers
                        across Eastern Nepal. Our commitment to fair trade practices and sustainable farming has created
                        a network of growers who share our passion for quality.
                    </p>
                    <a href="#" class="visit">Visit</a>
                </div>
                <div class="timeline-item">
                    <div class="year">2025</div>
                    <div class="location">A Cultural Hub</div>
                    <p class="description">
                        Today, Bagan Chiya Cafe stands as more than just a tea house - it's a cultural sanctuary in
                        Damak where stories flow as freely as our tea. Here, diverse communities gather to celebrate
                        traditions over steaming cups.
                    </p>
                    <a href="#" class="visit">Visit</a>
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
                    <h2>Our Mission</h2>
                    <p>
                        We are dedicated to preserving Nepal's tea heritage while building sustainable futures for our
                        farming communities. Through every cup, we connect tea lovers worldwide to the authentic flavors
                        of the Himalayas.
                    </p>
                </div>
            </div>

            <div class="values-section">
                <h2 class="section-title">Our Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Sustainability</h3>
                        <p>
                            We practice environmentally conscious farming and processing methods that protect Nepal's
                            pristine landscapes for future generations.
                        </p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Fair Partnership</h3>
                        <p>
                            Our direct relationships with local farmers ensure fair compensation and sustainable
                            livelihoods, creating a network of prosperity.
                        </p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>Authentic Quality</h3>
                        <p>
                            Every blend reflects our unwavering commitment to excellence, combining traditional methods
                            with rigorous quality standards.
                        </p>
                    </div>
                </div>
            </div>

            <div class="team-section">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="journey-intro">
                    The passionate individuals behind every perfect cup, dedicated to sharing Nepal's tea culture with
                    the world.
                </p>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Tea Master</h3>
                        <p>With over 20 years of experience in tea cultivation and blending, our tea master ensures
                            every batch meets the highest standards.</p>
                    </div>
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Community Relations</h3>
                        <p>Building bridges between our cafe and local farming communities, fostering relationships that
                            benefit everyone.</p>
                    </div>
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <h3>Cafe Experience</h3>
                        <p>Creating memorable experiences for every guest who walks through our doors, sharing the
                            stories behind each cup.</p>
                    </div>
                </div>
            </div>

            <div class="cta-section">
                <h2 class="section-title">Visit Us in Damak</h2>
                <p class="journey-intro">
                    Experience the authentic taste of Nepal's finest teas in the heart of where our story began.
                </p>
                <a href="#" class="btn-enhanced">
                    <i class="fas fa-home"></i>
                    <span>Back to Home</span>
                </a>
            </div>
        </div>

    </section>
    @include('layouts.footer')

    <script>
        // Re-enable IntersectionObserver for timeline reveal
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
