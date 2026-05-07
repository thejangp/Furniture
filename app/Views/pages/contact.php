<?= view('templates/header') ?>

<div class="page-header slide-up-anim" style="background-image: url('/images/dining.png');">
    <div class="overlay">
        <h1>Contact Us</h1>
    </div>
</div>

<section class="section container scroll-anim">
    <div class="contact-grid">
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Whether you're looking to book a consultation or have a question about our collections, our team is here to assist you.</p>
            
            <div class="contact-details mt-4">
                <p><strong>Address:</strong> 1234 Luxury Ave, Suite 100, Toronto, ON, M5V 3L9, Canada</p>
                <p><strong>Phone:</strong> +1 (416) 555-0198</p>
                <p><strong>Email:</strong> contact@luminafurniture.ca</p>
            </div>
            
            <div class="map-container mt-4">
                <!-- Embedded Google Map Placeholder -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.268482025754!2d-79.38924558450198!3d43.64256617912163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34d70b77b1e5%3A0x6b19a3b61dc73966!2sCN%20Tower!5e0!3m2!1sen!2sca!4v1620000000000!5m2!1sen!2sca" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <div class="contact-form-wrapper">
            <h3>Send a Message</h3>
            <form action="#" class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="Jane Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="jane@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required placeholder="Consultation Request">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Inquiry</button>
            </form>
        </div>
    </div>
</section>

<?= view('templates/footer') ?>
