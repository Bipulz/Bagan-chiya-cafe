<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Bagan Chiya Cafe</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/visitus.css') }}" rel="stylesheet">

</head>

<body>
    @include('layouts.header')
    <section class="about-hero">
        <div class="hero-content">
            <h1>About Us</h1>
            <h1><span>Our Story</span></h1>
            <p>
                Discover the heart of Bagan Chiya Cafe, where tradition meets taste in every cup and bite.
            </p>
        </div>
    </section>

    <section class="about-section">
        <h2>About Bagan Chiya Cafe</h2>
        <div class="about-content">
            <p>
                Welcome to Bagan Chiya Cafe, a haven of warmth and flavor nestled in the heart of Damak. Established
                with a passion for authentic tea and delightful snacks, we aim to bring the rich cultural essence of
                Nepal to every cup and bite. Our cozy ambiance and friendly service make us a beloved spot for locals
                and travelers alike.
            </p>
            <p>
                At Bagan Chiya Cafe, we pride ourselves on using fresh, locally sourced ingredients to craft our menu.
                Whether you're here for a relaxing tea break or a quick snack, we’re committed to providing an
                unforgettable experience.
            </p>
        </div>
    </section>

    <div class="visit-hours-section">
        <div class="map-title">
            <h2>Find Us</h2>
        </div>
        <div class="map-section">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.6235166550614!2d87.6943016!3d26.6605341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e58f43084cd795%3A0xfba72fa9ab56d109!2sBagan%20Chiya%20Cafe!5e0!3m2!1sen!2snp!4v1754150145394!5m2!1sen!2snp"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map-overlay">
                    Google Maps | © OpenStreetMap contributors
                </div>
            </div>
        </div>

        <div class="info-section">
            <div class="header">
                <h1 class="title">Visit & Hours</h1>

                <div class="location">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    Mahendra Hwy, Damak 57217
                </div>

                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <a href="tel:+9814099804" style="color: #d1e8d4; text-decoration: none;">981-4099804</a>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-location contact-icon"></i>
                        MM6V+6P Damak
                    </div>
                </div>

                <a href="https://www.google.com/maps/dir/?api=1&destination=26.66053913786134, 87.69431236087694"
                    target="_blank" class="directions-btn">
                    Get Directions
                </a>
            </div>

            <div class="hours-list">
                <p>Everyday: 8AM - 8PM</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
