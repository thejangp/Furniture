document.addEventListener('DOMContentLoaded', () => {

    // 1. Sticky Navigation
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. Scroll Animations (Intersection Observer)
    const animElements = document.querySelectorAll('.scroll-anim');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animElements.forEach(el => {
        observer.observe(el);
    });

    // 3. Mobile Navigation Toggle (Simple implementation)
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            // For a full app, we would toggle a class to show/hide the menu smoothly.
            if (navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '100%';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.background = 'var(--white)';
                navLinks.style.padding = '2rem';
                navLinks.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
            }
        });
    }

    // 4. Product Filters (UI Demo)
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            // In a real app we'd filter the grid or make an AJAX call,
            // for the demo we'll trigger a re-animation of the currently visible products
            const products = document.querySelectorAll('.product-card');
            products.forEach(p => {
                p.style.opacity = '0.5';
                p.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    p.style.opacity = '1';
                    p.style.transform = 'scale(1)';
                }, 300);
            });
        });
    });
});
