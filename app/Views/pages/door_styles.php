<?= view('templates/header') ?>

<main class="door-styles-page">
    <!-- Clean Hero Section -->
    <section class="door-hero">
        <div class="container">
            <div class="hero-content fade-in">
                <h1>Door Collection</h1>
                <p>Explore our wide range of premium door styles and finishes, from classic shaker to modern minimalist textures.</p>
            </div>
        </div>
    </section>

    <!-- Color Gallery Section -->
    <section class="color-gallery-section">
        <div class="container">
            <div class="door-grid">
                <?php if (!empty($productsData['door_styles'])): ?>
                    <?php foreach ($productsData['door_styles'] as $style): ?>
                        <div class="door-card">
                            <div class="door-image">
                                <img src="/images/products/door_<?= strtolower($style['code']) ?>.png" alt="<?= $style['name'] ?>" onerror="this.src='/images/placeholder_door.png'">
                            </div>
                            <div class="door-info">
                                <span class="style-code"><?= $style['code'] ?></span>
                                <h3><?= $style['name'] ?></h3>
                                <div class="style-meta">
                                    <span class="meta-tag"><?= $style['material'] ?></span>
                                    <span class="meta-separator">•</span>
                                    <span class="meta-tag"><?= $style['finish'] ?></span>
                                </div>
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

    .door-styles-page {
        font-family: 'Inter', sans-serif;
        color: var(--primary-dark);
        background: #fff;
    }

    /* Hero Section */
    .door-hero {
        padding: 180px 0 120px;
        position: relative;
        background-color: var(--primary-dark);
        color: #fff;
        text-align: center;
        overflow: hidden;
    }

    .door-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-image: 
            url('/images/products/door_ssw.png'),
            url('/images/products/door_pmb.png'),
            url('/images/products/door_pma.png'),
            url('/images/products/door_bss.png'),
            url('/images/products/door_pgw.png');
        background-size: 25% auto, 25% auto, 25% auto, 25% auto, 25% auto;
        background-position: -5% center, 25% center, 50% center, 75% center, 105% center;
        background-repeat: repeat-y;
        opacity: 0.35;
        z-index: 0;
        transform: scale(1.1);
    }
    
    .door-hero .container {
        position: relative;
        z-index: 1;
    }

    .door-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 4.5rem;
        margin-bottom: 20px;
        color: #fff;
        letter-spacing: 2px;
    }

    .door-hero p {
        font-size: 1.25rem;
        color: #eee;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
        opacity: 0.9;
    }

    /* Gallery Section */
    .color-gallery-section {
        padding: 80px 0 120px;
    }

    .door-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 20px;
    }

    @media (min-width: 1200px) {
        .door-grid {
            grid-template-columns: repeat(6, 1fr);
        }
    }

    .door-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid var(--border-color);
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .door-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        border-color: var(--accent-gold);
    }

    .door-image {
        height: 240px;
        overflow: hidden;
        background: #fdfdfd;
    }

    .door-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .door-card:hover .door-image img {
        transform: scale(1.05);
    }

    .door-info {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .style-code {
        display: block;
        color: var(--accent-gold);
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .door-info h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.1rem;
        margin-bottom: 8px;
        color: var(--primary-dark);
        line-height: 1.2;
    }

    .style-meta {
        font-size: 0.75rem;
        color: var(--text-gray);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .meta-separator {
        color: var(--accent-gold);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .fade-in {
        animation: fadeIn 1s ease forwards;
    }

    @media (max-width: 768px) {
        .door-hero h1 {
            font-size: 2.5rem;
        }
        .door-grid {
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        }
    }
</style>

<?= view('templates/footer') ?>
