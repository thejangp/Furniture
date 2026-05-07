<?= view('templates/header') ?>

<section class="hero slide-up-anim">
    <div class="hero-image" style="background-image: url('/images/WhatsApp Image 2026-04-29 at 20.07.52 (1).jpeg');">
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

<section class="featured-products section scroll-anim">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2>Featured Collections</h2>
            <p>Discover our top-tier cabinets and stones crafted for perfection.</p>
        </div>
        <div class="grid grid-3">
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (2).jpeg" alt="Kitchen Cabinets" class="product-image">
                    <a href="/products/kitchen-cabinets" class="quick-view">View Details</a>
                </div>
                <div class="product-info">
                    <h3>Classic Kitchen Cabinets</h3>
                    <p class="price">From $1,200</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (3).jpeg" alt="Quartz Stone" class="product-image">
                    <a href="/products/quartz-stones" class="quick-view">View Details</a>
                </div>
                <div class="product-info">
                    <h3>Premium Quartz Slabs</h3>
                    <p class="price">From $85/sqft</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (4).jpeg" alt="Bathroom Vanity" class="product-image">
                    <a href="/products/bathroom-cabinets" class="quick-view">View Details</a>
                </div>
                <div class="product-info">
                    <h3>Modern Bathroom Vanity</h3>
                    <p class="price">From $850</p>
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
