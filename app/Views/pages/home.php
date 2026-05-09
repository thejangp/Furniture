<?= view('templates/header') ?>

<section class="hero slide-up-anim">
    <div class="hero-image" style="background-image: url('/images/hero.png');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Premium Stones & Cabinets</h1>
                <p>Elevate your space with our curated selection of kitchen and bathroom cabinets, quartz, and granite stones.</p>
                <div class="hero-buttons">
                    <a href="/products" class="btn btn-primary">Shop Now</a>
                    <a href="/gallery" class="btn btn-outline">Explore Gallery</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-us section scroll-anim" style="background: linear-gradient(135deg, #1a1a1a 0%, #2c2c2c 100%); color: #fff; position: relative; overflow: hidden;">
    <!-- Decorative background elements -->
    <div style="position: absolute; top: -50%; left: -10%; width: 50%; height: 200%; background: radial-gradient(circle, rgba(197,160,89,0.05) 0%, rgba(0,0,0,0) 70%); transform: rotate(30deg); pointer-events: none;"></div>
    <div style="position: absolute; bottom: -50%; right: -10%; width: 50%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.03) 0%, rgba(0,0,0,0) 70%); transform: rotate(-30deg); pointer-events: none;"></div>
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2>Why Choose Us</h2>
            <p>We bring your dream spaces to life with unmatched quality and service.</p>
        </div>
        <div class="grid grid-3 text-center" style="position: relative; z-index: 1;">
            <div class="feature-box" style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); backdrop-filter: blur(10px);">
                <h3 style="color: var(--accent-gold); margin-bottom: 10px;">Premium Materials</h3>
                <p>From high-grade MDF and PET to stunning Quartz slabs, we source only the finest materials for durability and elegance.</p>
            </div>
            <div class="feature-box" style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); backdrop-filter: blur(10px);">
                <h3 style="color: var(--accent-gold); margin-bottom: 10px;">Expert Craftsmanship</h3>
                <p>Our cabinets are meticulously crafted to ensure flawless finishes, smooth operation, and long-lasting beauty.</p>
            </div>
            <div class="feature-box" style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); backdrop-filter: blur(10px);">
                <h3 style="color: var(--accent-gold); margin-bottom: 10px;">Custom & Affordable</h3>
                <p>We offer tailored layouts and affordable packages, like our Série Essentielle, to fit your exact needs and budget.</p>
            </div>
        </div>
    </div>
</section>

<section class="featured-products section scroll-anim">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2>Featured Collections</h2>
            <p>Discover our top-tier cabinets and stones crafted for perfection.</p>
        </div>
        <div class="grid grid-3">
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="/images/featured_kitchen.png" alt="Kitchen Cabinets" class="product-image">
                    <a href="/products/kitchen-cabinets" class="quick-view">View Details</a>
                </div>
                <div class="product-info">
                    <h3>Classic Kitchen Cabinets</h3>
                    <p class="price">From $1,200</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="/images/featured_quartz.png" alt="Quartz Stone" class="product-image">
                    <a href="/products/quartz-stones" class="quick-view">View Details</a>
                </div>
                <div class="product-info">
                    <h3>Premium Quartz Slabs</h3>
                    <p class="price">From $85/sqft</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="/images/featured_kitchen_2.png" alt="Modern Kitchen Cabinets" class="product-image">
                    <a href="/products/kitchen-cabinets" class="quick-view">View Details</a>
                </div>
                <div class="product-info">
                    <h3>Modern Kitchen Cabinets</h3>
                    <p class="price">From $1,500</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials section alternate-bg scroll-anim">
    <div class="container text-center">
        <h2 class="mb-5">What Our Clients Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial">
                <p class="quote">"The quality of the quartz and the kitchen cabinets exceeded our expectations. Our remodel looks incredible!"</p>
                <p class="author">- Michael T., Montreal</p>
            </div>
        </div>
    </div>
</section>

<?= view('templates/footer') ?>
