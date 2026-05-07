<?= view('templates/header') ?>
<section class="coming-soon">
    <div class="container">
        <div class="coming-soon-content">
            <h1 class="fade-in">Coming Soon</h1>
            <p class="fade-in">We are currently curating our premium collection for this category. Stay tuned for something exquisite.</p>
            <div class="back-home fade-in">
                <a href="/" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</section>

<style>
    .coming-soon {
        padding: 120px 0;
        text-align: center;
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f9f9f9 0%, #ececec 100%);
    }

    .coming-soon-content h1 {
        font-family: 'Playfair Display', serif;
        font-size: 4rem;
        margin-bottom: 20px;
        color: #1a1a1a;
        letter-spacing: 2px;
    }

    .coming-soon-content p {
        font-size: 1.2rem;
        color: #666;
        max-width: 600px;
        margin: 0 auto 40px;
        line-height: 1.6;
    }

    .btn-primary {
        background: #1a1a1a;
        color: #fff;
        padding: 15px 40px;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary:hover {
        background: #333;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .fade-in {
        animation: fadeInUp 0.8s ease forwards;
        opacity: 0;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<?= view('templates/footer') ?>
