<?= view('templates/header') ?>

<main class="specials-page">
    <section class="specials-hero">
        <div class="container">
            <h1 class="fade-in">Special Offers</h1>
            <p class="fade-in delay-1">Explore our exclusive kitchen packages designed for style and value.</p>
        </div>
    </section>

    <section class="offers-list">
        <div class="container">
            <?php
            $specialOffers = [
                [
                    'title' => 'Elite Series',
                    'price' => '7,000 $',
                    'details' => [
                        'L-shaped Kitchen',
                        '20 linear feet',
                        'Shaker doors & handles included',
                        'Grade H laminate countertop included'
                    ],
                    'image' => 'special_1.png',
                    'color_theme' => '#f5f5f5',
                    'accent' => '#333'
                ],
                [
                    'title' => 'Elite Series (Premium Backsplash)',
                    'price' => '7,500 $',
                    'details' => [
                        '10\' x 10\' Kitchen Layout',
                        '20 linear feet of cabinetry',
                        'Shaker doors & handles included',
                        'Grade H laminate countertop included'
                    ],
                    'image' => 'special_2.png',
                    'color_theme' => '#f9f4f0',
                    'accent' => '#8b5e3c'
                ],
                [
                    'title' => 'Premium Shaker Series',
                    'price' => '7,052 $',
                    'details' => [
                        '10\' x 10\' Kitchen Layout',
                        '20 linear feet of cabinetry',
                        'Grey Shaker doors & handles included',
                        'Grade H laminate countertop included'
                    ],
                    'image' => 'special_3.png',
                    'color_theme' => '#eceff1',
                    'accent' => '#455a64'
                ],
                [
                    'title' => 'Premium Series',
                    'price' => '7,052 $',
                    'details' => [
                        '10\' x 10\' Kitchen Layout',
                        '20 linear feet of cabinetry',
                        'Flat panel doors & handles included',
                        'Grade H laminate countertop included'
                    ],
                    'image' => 'special_4.png',
                    'color_theme' => '#f0f4f8',
                    'accent' => '#2c3e50'
                ],
                [
                    'title' => 'Essential Series',
                    'price' => '9,100 $',
                    'details' => [
                        'U-shaped Kitchen 15\' x 15\'',
                        '30 linear feet of cabinetry',
                        'Natural wood texture doors & handles included',
                        'Grade H laminate countertop included'
                    ],
                    'image' => 'special_5.png',
                    'color_theme' => '#fdfbf7',
                    'accent' => '#5d4037'
                ]
            ];

            foreach ($specialOffers as $index => $offer):
                $isEven = ($index % 2 != 0);
            ?>
                <div class="offer-item <?= $isEven ? 'row-reverse' : '' ?> fade-in-up">
                    <div class="offer-image">
                        <img src="/images/specials/<?= $offer['image'] ?>" alt="<?= $offer['title'] ?>">
                    </div>
                    <div class="offer-details" style="background-color: <?= $offer['color_theme'] ?>;">
                        <div class="details-content">
                            <h2 style="color: <?= $offer['accent'] ?>;"><?= $offer['title'] ?></h2>
                            <div class="price-tag"><?= $offer['price'] ?></div>
                            <ul class="features-list">
                                <?php foreach ($offer['details'] as $detail): ?>
                                    <li><i class="fas fa-check"></i> <?= $detail ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="delivery-note">
                                <p>* Delivery & Installation extra</p>
                                <p>* 3D renderings may vary from reality</p>
                            </div>
                            <a href="/contact" class="btn-quote" style="background-color: <?= $offer['accent'] ?>;">Get a Free Quote</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<style>
    .specials-page {
        padding-top: 80px;
        background: #fff;
        font-family: 'Inter', sans-serif;
    }

    .specials-hero {
        background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
        color: #fff;
        padding: 100px 0;
        text-align: center;
        margin-bottom: 60px;
    }

    .specials-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        margin-bottom: 20px;
        letter-spacing: 2px;
    }

    .specials-hero p {
        font-size: 1.2rem;
        opacity: 0.8;
        max-width: 600px;
        margin: 0 auto;
    }

    .offers-list {
        padding-bottom: 100px;
    }

    .offer-item {
        display: flex;
        margin-bottom: 60px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(0,0,0,0.08);
        min-height: 450px;
    }

    .offer-item.row-reverse {
        flex-direction: row-reverse;
    }

    .offer-image {
        flex: 1.2;
        overflow: hidden;
    }

    .offer-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .offer-item:hover .offer-image img {
        transform: scale(1.05);
    }

    .offer-details {
        flex: 1;
        display: flex;
        align-items: center;
        padding: 50px;
        position: relative;
    }

    .details-content {
        width: 100%;
    }

    .offer-details h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.4rem;
        margin-bottom: 15px;
    }

    .price-tag {
        font-size: 2rem;
        font-weight: 700;
        color: #D4AF37;
        margin-bottom: 30px;
        display: inline-block;
        border-bottom: 3px solid #D4AF37;
    }

    .features-list {
        list-style: none;
        padding: 0;
        margin-bottom: 40px;
    }

    .features-list li {
        margin-bottom: 15px;
        font-size: 1.1rem;
        color: #444;
        display: flex;
        align-items: center;
    }

    .features-list li i {
        margin-right: 15px;
        color: #D4AF37;
    }

    .delivery-note {
        margin-bottom: 30px;
        font-size: 0.9rem;
        color: #777;
        font-style: italic;
    }

    .delivery-note p {
        margin-bottom: 5px;
    }

    .btn-quote {
        display: inline-block;
        padding: 15px 40px;
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .btn-quote:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        opacity: 0.9;
    }

    /* Animations */
    .fade-in {
        animation: fadeIn 1s ease forwards;
        opacity: 0;
    }

    .fade-in-up {
        animation: fadeInUp 1s ease forwards;
        opacity: 0;
    }

    .delay-1 { animation-delay: 0.3s; }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 992px) {
        .offer-item {
            flex-direction: column !important;
            min-height: auto;
        }
        .offer-image {
            height: 350px;
        }
        .offer-details {
            padding: 40px 30px;
        }
        .offer-details h2 {
            font-size: 2rem;
        }
    }
</style>

<?= view('templates/footer') ?>
