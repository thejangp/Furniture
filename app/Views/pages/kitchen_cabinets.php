<?= view('templates/header') ?>

<main class="kitchen-cabinets-page">
    <!-- Hero Section -->
    <section class="hero-cabinets">
        <div class="container">
            <div class="hero-content fade-in">
                <h1>Kitchen Cabinetry</h1>
                <p>Discover our meticulously crafted collection of premium kitchen cabinets, blending timeless elegance with modern functionality.</p>
            </div>
        </div>
    </section>

    <!-- Product Catalog Section -->
    <section class="product-catalog">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="premium-title">Cabinet Styles & Specifications</h2>
            </div>

            <!-- Category Tabs -->
            <div class="catalog-tabs">
                <?php if (!empty($productsData['categories'])): ?>
                    <div class="tab-buttons">
                        <?php foreach ($productsData['categories'] as $index => $cat): ?>
                            <button class="tab-btn <?= $index === 0 ? 'active' : '' ?>" onclick="openCategory(event, '<?= str_replace(' ', '', $cat['name']) ?>')">
                                <?= $cat['name'] ?>
                            </button>
                        <?php endforeach; ?>
                    </div>

                    <?php foreach ($productsData['categories'] as $index => $cat): ?>
                        <div id="<?= str_replace(' ', '', $cat['name']) ?>" class="tab-content <?= $index === 0 ? 'show' : '' ?>">
                            <div class="product-grid">
                                <?php if (!empty($cat['products'])): ?>
                                    <?php foreach ($cat['products'] as $product): ?>
                                        <div class="product-card">
                                            <div class="product-drawing">
                                                <img src="/images/products/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                                            </div>
                                            <div class="product-details">
                                                <h4><?= $product['name'] ?></h4>
                                                <div class="item-codes">
                                                    <?php 
                                                        // Sort and group codes
                                                        sort($product['codes']);
                                                        foreach ($product['codes'] as $code): 
                                                    ?>
                                                        <span class="code-badge"><?= $code ?></span>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="no-products">More products coming soon to this category.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<style>
    :root {
        --primary-dark: #1a1a1a;
        --accent-gold: #c5a059;
        --bg-light: #f9f9f9;
        --text-gray: #666;
        --border-color: #eee;
    }

    .kitchen-cabinets-page {
        font-family: 'Inter', sans-serif;
        color: var(--primary-dark);
        background: #fff;
    }

    /* Hero Section */
    .hero-cabinets {
        padding: 160px 0 100px;
        background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/images/hero.png');
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
    }

    .hero-content h1 {
        font-family: 'Playfair Display', serif;
        font-size: 4.5rem;
        margin-bottom: 20px;
        letter-spacing: 2px;
    }

    .hero-content p {
        font-size: 1.25rem;
        max-width: 700px;
        margin: 0 auto;
        opacity: 0.9;
        line-height: 1.6;
    }

    /* Section Headers */
    .section-header {
        margin-bottom: 60px;
    }

    .premium-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.8rem;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .premium-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 2px;
        background: var(--accent-gold);
    }

    .section-subtitle {
        color: var(--text-gray);
        font-size: 1.1rem;
    }

    /* Door Styles Grid */
    .door-styles-section {
        padding: 100px 0;
        background: var(--bg-light);
    }

    .door-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
    }

    .door-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border: 1px solid var(--border-color);
    }

    .door-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        border-color: var(--accent-gold);
    }

    .door-image {
        height: 350px;
        overflow: hidden;
        background: #eee;
    }

    .door-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .door-card:hover .door-image img {
        transform: scale(1.05);
    }

    .door-info {
        padding: 25px;
        text-align: center;
    }

    .door-info h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.4rem;
        margin-bottom: 8px;
    }

    .style-code {
        color: var(--accent-gold);
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .style-detail {
        font-size: 0.85rem;
        color: var(--text-gray);
    }

    /* Product Catalog Section */
    .product-catalog {
        padding: 100px 0;
    }

    .tab-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 50px;
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 20px;
    }

    .tab-btn {
        background: none;
        border: none;
        padding: 10px 25px;
        font-size: 1rem;
        font-weight: 500;
        color: var(--text-gray);
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    .tab-btn:hover {
        color: var(--primary-dark);
    }

    .tab-btn.active {
        color: var(--primary-dark);
        font-weight: 700;
    }

    .tab-btn.active::after {
        content: '';
        position: absolute;
        bottom: -21px;
        left: 0;
        width: 100%;
        height: 3px;
        background: var(--primary-dark);
    }

    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease;
    }

    .tab-content.show {
        display: block;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 40px;
    }

    .product-card {
        background: #fff;
        padding: 30px;
        border: 1px solid #f0f0f0;
        border-radius: 12px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .product-card:hover {
        border-color: var(--accent-gold);
        box-shadow: 0 15px 35px rgba(0,0,0,0.03);
    }

    .product-drawing {
        width: 100%;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
    }

    .product-drawing img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .product-details {
        text-align: center;
        width: 100%;
    }

    .product-details h4 {
        font-family: 'Playfair Display', serif;
        font-size: 1.2rem;
        margin-bottom: 15px;
        color: var(--primary-dark);
    }

    .item-codes {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
    }

    .code-badge {
        background: #f0f0f0;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        color: #555;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .product-card:hover .code-badge {
        background: var(--accent-gold);
        color: #fff;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .fade-in {
        animation: fadeInUp 1s ease forwards;
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 3rem;
        }
        .premium-title {
            font-size: 2.2rem;
        }
        .door-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    function openCategory(evt, categoryName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("show");
        }
        tablinks = document.getElementsByClassName("tab-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        document.getElementById(categoryName).classList.add("show");
        evt.currentTarget.classList.add("active");
    }
</script>

<?= view('templates/footer') ?>
