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

<section class="comparison-section section scroll-anim">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2>The YSD Advantage</h2>
            <p>See how YSD Cabinets stands out against Big Box retailers and mass-market malls.</p>
        </div>
        
        <div class="table-responsive">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>YSD Cabinets</th>
                        <th>Meatball Mall</th>
                        <th>Big Box</th>
                        <th>Custom Millwork</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Price Range</td>
                        <td class="highlight">$</td>
                        <td>$$</td>
                        <td>$$$</td>
                        <td>$$$$</td>
                    </tr>
                    <tr>
                        <td>Delivery Time</td>
                        <td class="highlight">3-7 Days</td>
                        <td>3-6 Weeks</td>
                        <td>4-8 Weeks</td>
                        <td>8-16 Weeks</td>
                    </tr>
                    <tr>
                        <td>Quality & Durability</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-check">✔</span></td>
                    </tr>
                    <tr>
                        <td>Full 3/4 AA Plywood Box</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-question">?</span></td>
                    </tr>
                    <tr>
                        <td>Solid Wood Face Frames</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-question">?</span></td>
                    </tr>
                    <tr>
                        <td>Dovetail Drawers</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-question">?</span></td>
                    </tr>
                    <tr>
                        <td>Soft Close Hardware <small>(Lifetime Warranty)</small></td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-question">?</span></td>
                    </tr>
                    <tr>
                        <td>Expert Design Service</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-check">✔</span></td>
                    </tr>
                    <tr>
                        <td>Local Showroom Support</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-check">✔</span></td>
                    </tr>
                    <tr>
                        <td>Assembly Required</td>
                        <td class="highlight"><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-check">✔</span></td>
                        <td><span class="icon icon-question">?</span></td>
                        <td><span class="icon icon-x">✖</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
    .comparison-section {
        padding: 100px 0;
        background-color: #fff;
    }

    .table-responsive {
        overflow-x: auto;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05);
    }

    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
        background: #fff;
        min-width: 800px;
    }

    .comparison-table th {
        background-color: #D4AF37;
        color: #fff;
        padding: 25px 20px;
        font-weight: 600;
        font-size: 1.1rem;
        border: none;
    }

    .comparison-table td {
        padding: 18px 20px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.95rem;
        color: #444;
    }

    .comparison-table th:first-child,
    .comparison-table td:first-child {
        text-align: left;
        padding-left: 30px;
        color: #1a1a1a;
        font-weight: 500;
        width: 25%;
    }

    .comparison-table th.highlight,
    .comparison-table td.highlight {
        background-color: rgba(49, 100, 130, 0.04);
        position: relative;
    }

    .comparison-table tr:hover td {
        background-color: #fcfcfc;
    }

    .comparison-table tr:hover td.highlight {
        background-color: rgba(49, 100, 130, 0.08);
    }

    /* Icon Styles */
    .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
    }

    .icon-check {
        background-color: #4CAF50;
    }

    .icon-x {
        background-color: #F44336;
    }

    .icon-question {
        background-color: #FFB300;
    }

    small {
        display: block;
        font-size: 0.75rem;
        color: #888;
        font-weight: 400;
        margin-top: 2px;
    }

    @media (max-width: 768px) {
        .comparison-table th, .comparison-table td {
            padding: 15px 10px;
        }
    }
</style>

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
