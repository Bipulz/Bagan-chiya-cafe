<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu - Bagan Chiya Cafe</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    <section class="menu-hero">
        <div class="hero-content">
            <h1>Our Menu</h1>
            <h1><span>Savor the Essence</span></h1>
            <p id="dynamic-date">
                Explore our fresh offerings available
            </p>
        </div>
    </section>

    <section class="menu-section">
        <h2>Menu</h2>

        <div class="menu-category">
            <h3>🍹 Shakes & Lassi</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Vanilla Shake</span><span class="price">Rs. 180</span></li>
                <li class="menu-item"><span>Oreo MilkShake</span><span class="price">Rs. 180</span></li>
                <li class="menu-item"><span>Chocolate Shake</span><span class="price">Rs. 180</span></li>
                <li class="menu-item"><span>Mint Lassi</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Banana Lassi</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Strawberry Lassi</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Chocolate Lassi</span><span class="price">Rs. 150</span></li>
            </ul>
        </div>

        <div class="menu-category">
            <h3>🍋 Lemon & Mojito</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Plain Hot Lemon</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Hot Lemon with Honey</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Lemonade</span><span class="price">Rs. 70</span></li>
                <li class="menu-item"><span>Virgin Mojito</span><span class="price">Rs. 150</span></li>
            </ul>
        </div>

        <div class="menu-category">
            <h3>🥤 Cold Drinks & Juice</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Coke</span><span class="price">Rs. 70</span></li>
                <li class="menu-item"><span>Fanta</span><span class="price">Rs. 70</span></li>
                <li class="menu-item"><span>Sprite</span><span class="price">Rs. 70</span></li>
                <li class="menu-item"><span>Badam Juice</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Kibu</span><span class="price">Rs. 130</span></li>
                <li class="menu-item"><span>Red Bull</span><span class="price">Rs. 130</span></li>
                <li class="menu-item"><span>Xtreme</span><span class="price">Rs. 130</span></li>
                <li class="menu-item"><span>Fruit Gems</span><span class="price">Rs. 140</span></li>
                <li class="menu-item"><span>Somersby Apple Cider</span><span class="price">Rs. 350</span></li>
            </ul>
        </div>

        <div class="menu-category">
            <h3>🍽️ Snacks & Khaja Set</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Bagan Khaja Set</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Onion Pakada</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Mushroom Pakada</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Paneer Pakada</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Aalu Chop</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Samosa</span><span class="price">Rs. 30</span></li>
                <li class="menu-item"><span>Chatpate</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Peanut Sadeko</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Banana Chips</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Bread Omelet</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Aalu JIRA</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Noodles</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Chana Bhujia</span><span class="price">Rs. 60</span></li>
                <li class="menu-item"><span>Egg Roll</span><span class="price">Rs. 120</span></li>
                <li class="menu-item"><span>Thuppa</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>French Fries</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Crispy Sweet Corn</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Roti Tarkari (Aata, Kodo, Fapar)</span><span class="price">Rs. 80</span>
                </li>
            </ul>
        </div>

        <div class="menu-category">
            <h3>💨 Hookah</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Normal Hookah</span><span class="price">Rs. 350</span></li>
                <li class="menu-item"><span>Premium Hookah</span><span class="price">Rs. 450</span></li>
                <li class="menu-item"><span>Bagan Hookah (Mint, Double Apple, Pan Raas)</span><span class="price">Rs.
                        600</span></li>
                <li class="menu-item"><span>Additional coal charge: Normal, Premium</span><span class="price">Rs.
                        20</span></li>
                <li class="menu-item"><span>Additional coal charge: Bagan</span><span class="price">Rs. 50</span>
                </li>
            </ul>
        </div>

        <div class="menu-category">
            <h3>🍵 Bagan Tea Varieties</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Bagan Milk Tea</span><span class="price">Rs. 30</span></li>
                <li class="menu-item"><span>Bagan Black Tea</span><span class="price">Rs. 20</span></li>
                <li class="menu-item"><span>Bagan Lemon Tea</span><span class="price">Rs. 30</span></li>
                <li class="menu-item"><span>Bagan Hajmola Tea</span><span class="price">Rs. 25</span></li>
                <li class="menu-item"><span>Bagan Green Tea</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Bagan Blue Tea</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Bagan Rose Tea</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Bagan Keshar Tea</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Bagan Badam Tea</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Bagan White Tea</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Bagan Moringa Tea</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Bagan Lemon Ice Tea</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Bagan Peach Iced Tea</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Bagan Bubble Tea</span><span class="price">Rs. 150</span></li>
            </ul>
        </div>

        <div class="menu-category">
            <h3>🍯 Sattu & Coffee</h3>
            <ul class="menu-item-list">
                <li class="menu-item"><span>Honey Sattu</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Lemon Sattu</span><span class="price">Rs. 100</span></li>
                <li class="menu-item"><span>Peanut Butter Sattu</span><span class="price">Rs. 180</span></li>
                <li class="menu-item"><span>Chocolate Sattu</span><span class="price">Rs. 150</span></li>
                <li class="menu-item"><span>Milk Coffee</span><span class="price">Rs. 50</span></li>
                <li class="menu-item"><span>Black Coffee</span><span class="price">Rs. 30</span></li>
            </ul>
        </div>
    </section>

    <section class="cta-section">
        <h2>Visit Bagan Chiya Cafe</h2>
        <p>Experience our offerings and join our community. Subscribe to our newsletter for exclusive offers!</p>
        <button class="cta-button">Join Now</button>
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

            dateElement.textContent =
                `Explore our fresh offerings available today, ${dayName}.`;
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
