<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery - Bagan Chiya Cafe</title>
    @include('layouts.links')
    <link href="{{ asset('css/gallery.css') }}?ver={{ config('app.asset_version') }}" rel="stylesheet">

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

    <section class="photo-gallery">
        <div class="photo-gallery__container">
            <div class="photo-gallery__header">
                <h1 class="photo-gallery__title">Tea Garden Gallery</h1>
                <p class="photo-gallery__subtitle">Discover the beauty of our tea journey through captivating moments
                    from our gardens, ceremonies, and community gatherings</p>
                <div class="photo-gallery__filters">
                    <button class="photo-gallery__filter-btn active" data-filter="all">All Photos</button>
                    <button class="photo-gallery__filter-btn" data-filter="gardens">Tea Gardens</button>
                    <button class="photo-gallery__filter-btn" data-filter="ceremony">Ceremonies</button>
                    <button class="photo-gallery__filter-btn" data-filter="harvest">Harvest</button>
                    <button class="photo-gallery__filter-btn" data-filter="community">Community</button>
                </div>
            </div>

            <div class="photo-gallery__grid" id="photo-gallery-grid">
                <div class="photo-gallery__item" data-category="gardens" data-index="0">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                        alt="Premium Tea Leaves">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Premium Tea Leaves</h3>
                            <p>Hand-picked from the pristine gardens of Eastern Nepal, showcasing the finest quality
                                leaves that make our signature blends.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Premium</span>
                                <span class="photo-gallery__tag">Nepal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="ceremony" data-index="1">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                        alt="Artisanal Preparation">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Artisanal Preparation</h3>
                            <p>Traditional tea preparation methods passed down through generations, crafted with care
                                and precision.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Traditional</span>
                                <span class="photo-gallery__tag">Artisan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="gardens" data-index="2">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                        alt="Tea Gardens">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Pristine Tea Gardens</h3>
                            <p>Our lush tea gardens nestled in the Himalayan foothills, where every leaf tells a story
                                of dedication and care.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Himalayan</span>
                                <span class="photo-gallery__tag">Organic</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="ceremony" data-index="3">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                        alt="Tea Ceremony">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Cultural Ceremony</h3>
                            <p>Sacred tea ceremonies that celebrate our heritage and the spiritual connection between
                                nature and tradition.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Cultural</span>
                                <span class="photo-gallery__tag">Sacred</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="community" data-index="4">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                        alt="Tea Tasting">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Expert Tea Tasting</h3>
                            <p>Our master tea tasters evaluate each batch to ensure the highest quality and most
                                exquisite flavors.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Expert</span>
                                <span class="photo-gallery__tag">Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="harvest" data-index="5">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                        alt="Harvest Season">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Harvest Season</h3>
                            <p>The annual harvest brings our community together in celebration of nature's bounty and
                                hard work.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Harvest</span>
                                <span class="photo-gallery__tag">Community</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="ceremony" data-index="6">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                        alt="Tea Blending">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Tea Blending</h3>
                            <p>The art of creating perfect seasonal blends, combining different tea varieties for unique
                                flavor profiles.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Blending</span>
                                <span class="photo-gallery__tag">Seasonal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="community" data-index="7">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_1_tiivhu.jpg"
                        alt="Farmer Smiles">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Farmer Smiles</h3>
                            <p>The joy and pride of our tea farmers during harvest season, celebrating another
                                successful year.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Joy</span>
                                <span class="photo-gallery__tag">Pride</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="community" data-index="8">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.54_PM_qsnpft.jpg"
                        alt="Community Gathering">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Community Gathering</h3>
                            <p>Regular cafe events that bring tea lovers together to share stories and celebrate our
                                passion for tea.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Gathering</span>
                                <span class="photo-gallery__tag">Stories</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item" data-category="ceremony" data-index="9">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038925/WhatsApp_Image_2025-07-31_at_6.28.55_PM_h8akma.jpg"
                        alt="Tea Ritual">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Tea Ritual</h3>
                            <p>Ancient rituals that honor the tea plant and the wisdom of generations of tea masters.
                            </p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Ritual</span>
                                <span class="photo-gallery__tag">Ancient</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item hidden" data-category="harvest" data-index="10">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038926/WhatsApp_Image_2025-07-31_at_6.28.53_PM_kywbzw.jpg"
                        alt="Morning Harvest">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Morning Harvest</h3>
                            <p>Dawn harvesting when the dew still clings to leaves, capturing the most delicate flavors.
                            </p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Dawn</span>
                                <span class="photo-gallery__tag">Delicate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery__item hidden" data-category="community" data-index="11">
                    <img src="https://res.cloudinary.com/dzdinuw5d/image/upload/v1754038927/WhatsApp_Image_2025-07-31_at_6.28.55_PM_2_x7xcer.jpg"
                        alt="Tea Workshop">
                    <div class="photo-gallery__overlay">
                        <div class="photo-gallery__overlay-content">
                            <h3>Tea Workshop</h3>
                            <p>Educational sessions where we share our knowledge and passion for tea with enthusiasts
                                and learners.</p>
                            <div class="photo-gallery__overlay-tags">
                                <span class="photo-gallery__tag">Education</span>
                                <span class="photo-gallery__tag">Workshop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="photo-gallery__load-more">
                <button class="photo-gallery__load-more-btn" onclick="loadMorePhotos()">
                    <i class="fas fa-plus"></i> Show more
                </button>
                <button class="photo-gallery__unload-btn hidden" onclick="unloadPhotos()">
                    <i class="fas fa-minus"></i> Show less
                </button>
            </div>

            <div class="photo-gallery__lightbox" id="photo-gallery-lightbox">
                <button class="photo-gallery__close-btn" onclick="closeLightbox()">
                    <i class="fas fa-times"></i>
                </button>
                <button class="photo-gallery__nav-btn photo-gallery__prev-btn" onclick="changeImage(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="photo-gallery__nav-btn photo-gallery__next-btn" onclick="changeImage(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="photo-gallery__lightbox-content">
                    <img src="" alt="Lightbox Image" id="photo-gallery-lightbox-img">
                    <div class="photo-gallery__lightbox-info" id="photo-gallery-lightbox-info">
                        <h3 id="photo-gallery-lightbox-title"></h3>
                        <p id="photo-gallery-lightbox-description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bagan-chiya-cafe">
        <div class="container">
            <header class="header">
                <div class="header-icons">
                    <i class="fas fa-camera camera-icon"></i>
                    <h1 class="header-title">Share Your Photos</h1>
                    <i class="fas fa-camera camera-icon"></i>
                </div>
                <p class="header-description">
                    Showcase your love for Bagan Chiya Cafe! Share your beautiful moments with a story
                    and be featured in our community gallery.
                </p>
            </header>

            <form class="form" action="/submit" method="POST" enctype="multipart/form-data">
                <div class="form-left">
                    <div class="form-group">
                        <label class="label">
                            <i class="fas fa-file-alt label-icon"></i>
                            Photo Title
                        </label>
                        <input type="text" class="input" placeholder="Give your photo a creative title"
                            name="title" required>
                    </div>
                    <div class="form-group">
                        <label class="label">
                            <i class="fas fa-user label-icon"></i>
                            Your Name
                        </label>
                        <input type="text" class="input" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="label">Tell us about this moment</label>
                        <textarea class="textarea"
                            placeholder="Describe your experience, the tea you enjoyed, or what made this moment special..."
                            name="description" required></textarea>
                    </div>
                </div>
                <div class="upload-section">
                    <label class="label">
                        <i class="fas fa-image label-icon"></i>
                        Upload Your Photo
                    </label>
                    <div class="upload-area" onclick="this.querySelector('input').click()">
                        <i class="fas fa-cloud-upload-alt upload-icon"></i>
                        <p class="upload-text">Drop your photo here or click to browse</p>
                        <p class="upload-subtext">PNG, JPG up to 10MB</p>
                        <input type="file" name="photo" accept="image/*" style="display: none;" required>
                    </div>
                </div>
                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-upload btn-icon"></i>
                        SHARE MY PHOTO
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="cta-section">
        <h2>Visit Bagan Chiya Cafe</h2>
        <p>Experience our delicious offerings and join our community of tea lovers. Subscribe to our newsletter for
            exclusive offers and updates!</p>
        <a href="https://www.facebook.com/p/Bagan-%E0%A4%9A%E0%A4%BF%E0%A4%AF%E0%A4%BE-Cafe-61564573427193/?_rdr"
            target="_blank" class="cta-button">
            Join Our Community
        </a>


    </section>
    @include('layouts.footer')


    <script>
        document.querySelector('.bagan-chiya-cafe .upload-area').addEventListener('click', function() {
            this.querySelector('input').click();
        });
    </script>
    <script src="{{ asset('js/app.js') }}?ver={{ config('app.asset_version') }}"></script>
    <script src="{{ asset('js/gallery.js') }}?ver={{ config('app.asset_version') }}"></script>

</body>

</html>
