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
            <?php 
            $groupedStyles = [];
            if (!empty($productsData['door_styles'])) {
                foreach ($productsData['door_styles'] as $style) {
                    $category = $style['category'] ?? 'OTHER';
                    $groupedStyles[$category][] = $style;
                }
            }
            ?>

            <?php foreach ($groupedStyles as $categoryName => $styles): ?>
                <div class="category-group">
                    <h2 class="category-title"><?= $categoryName ?></h2>
                    <div class="door-grid">
                        <?php foreach ($styles as $style): ?>
                            <div class="door-card">
                                <div class="door-image">
                                    <img src="/images/products/door_<?= strtolower($style['code']) ?>.png" alt="<?= $style['name'] ?>" onerror="this.src='/images/placeholder_door.png'">
                                </div>
                                <div class="door-info">
                                    <h3><?= $style['name'] ?></h3>
                                    <div class="style-details">
                                        <div class="detail-row"><strong>Style Code:</strong> <?= $style['code'] ?></div>
                                        <div class="detail-row"><strong>Material:</strong> <?= $style['material'] ?></div>
                                        <div class="detail-row"><strong>Finish:</strong> <?= $style['finish'] ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
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

    .category-group {
        margin-bottom: 80px;
    }

    .category-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.8rem;
        margin-bottom: 50px;
        text-align: center;
        position: relative;
        padding-bottom: 20px;
        color: var(--primary-dark);
        letter-spacing: 1px;
    }

    .category-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--accent-gold);
    }

    .door-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 25px;
    }

    @media (min-width: 1200px) {
        .door-grid {
            grid-template-columns: repeat(6, 1fr);
        }
    }

    .door-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid var(--border-color);
        text-align: left;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 10px rgba(0,0,0,0.02);
    }

    .door-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: var(--accent-gold);
    }

    .door-image {
        height: 220px;
        overflow: hidden;
        background: #fdfdfd;
        position: relative;
    }

    .door-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .door-card:hover .door-image img {
        transform: scale(1.1);
    }

    .door-info {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .door-info h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.15rem;
        margin-bottom: 12px;
        color: var(--primary-dark);
        line-height: 1.3;
        font-weight: 700;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 10px;
    }

    .style-details {
        font-size: 0.85rem;
        color: var(--text-gray);
        line-height: 1.8;
    }

    .detail-row {
        margin-bottom: 4px;
    }

    .detail-row strong {
        color: var(--primary-dark);
        font-weight: 600;
        margin-right: 5px;
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
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        }
        .category-title {
            font-size: 2rem;
        }
    }
</style>

<?= view('templates/footer') ?>
