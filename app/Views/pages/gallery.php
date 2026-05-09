<?= view('templates/header') ?>

<div class="page-header slide-up-anim" style="background-image: url('/images/hero.png');">
    <div class="overlay">
        <h1>Inspiration Gallery</h1>
    </div>
</div>

<section class="section container scroll-anim">
    <div class="text-center mb-5">
        <p class="lead">Explore high-resolution lifestyle images of luxury interiors designed with Lumina pieces.</p>
    </div>
    <div class="masonry-grid">
        <div class="masonry-item">
            <img src="/images/hero.png" alt="Living Room Interior">
            <div class="masonry-overlay">Modern Living</div>
        </div>
        <div class="masonry-item">
            <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (2).jpeg" alt="Kitchen Project">
            <div class="masonry-overlay">Classic Kitchen Project</div>
        </div>
        <div class="masonry-item">
            <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (3).jpeg" alt="Quartz Slab">
            <div class="masonry-overlay">Premium Quartz</div>
        </div>
        <div class="masonry-item">
            <img src="/images/WhatsApp Image 2026-04-29 at 20.07.52 (4).jpeg" alt="Bathroom Vanity">
            <div class="masonry-overlay">Modern Vanity</div>
        </div>
    </div>
</section>

<?= view('templates/footer') ?>
