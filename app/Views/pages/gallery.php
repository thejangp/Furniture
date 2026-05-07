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
            <img src="/images/dining.png" alt="Dining Room">
            <div class="masonry-overlay">Luxurious Dining</div>
        </div>
        <div class="masonry-item">
            <img src="/images/sofa.png" alt="Living Room Sofa">
            <div class="masonry-overlay">Minimalist Comfort</div>
        </div>
        <div class="masonry-item">
            <img src="/images/bed.png" alt="Bedroom Interior">
            <div class="masonry-overlay">Serene Bedroom</div>
        </div>
    </div>
</section>

<?= view('templates/footer') ?>
