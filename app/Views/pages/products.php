<?= view('templates/header') ?>

<div class="page-header slide-up-anim" style="background-image: url('/images/WhatsApp Image 2026-04-29 at 20.07.52 (5).jpeg');">
    <div class="overlay">
        <h1>Our Collections</h1>
    </div>
</div>

<section class="section container scroll-anim">
    <div class="filters">
        <button class="filter-btn active">All</button>
        <button class="filter-btn">Kitchen Cabinets</button>
        <button class="filter-btn">Bathroom Cabinets</button>
        <button class="filter-btn">Quartz Stones</button>
        <button class="filter-btn">Granite Stones</button>
        <button class="filter-btn">Sinks</button>
    </div>

    <div class="grid grid-4 product-grid">
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (2).jpeg" alt="Kitchen Cabinet 1">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Classic White Kitchen</h3>
                <p class="desc">Premium wood, soft-close hinges</p>
                <p class="price">From $1,500</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (4).jpeg" alt="Bathroom Vanity">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Modern Double Vanity</h3>
                <p class="desc">Includes quartz countertop</p>
                <p class="price">$1,200</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (3).jpeg" alt="Quartz Slab">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Calacatta Quartz</h3>
                <p class="desc">Stain resistant, high gloss</p>
                <p class="price">$95/sqft</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (6).jpeg" alt="Granite Slab">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Black Galaxy Granite</h3>
                <p class="desc">Natural stone, highly durable</p>
                <p class="price">$75/sqft</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (7).jpeg" alt="Stainless Sink">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Stainless Steel Undermount Sink</h3>
                <p class="desc">16-gauge, noise reduction</p>
                <p class="price">$250</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (8).jpeg" alt="Kitchen Cabinet 2">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Shaker Style Cabinets</h3>
                <p class="desc">Solid wood doors</p>
                <p class="price">From $1,100</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (9).jpeg" alt="Accessories">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Cabinet Hardware Set</h3>
                <p class="desc">Brushed nickel finish</p>
                <p class="price">$45</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img-wrapper">
                <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (10).jpeg" alt="Bathroom Cabinet">
                <div class="quick-view">Details</div>
            </div>
            <div class="product-info">
                <h3>Single Sink Vanity</h3>
                <p class="desc">Floating design, oak finish</p>
                <p class="price">$650</p>
            </div>
        </div>
    </div>
</section>

<?= view('templates/footer') ?>
