<?php include 'includes/header.php'; ?>

<section class="section contact-hero">
    <div class="container">
        <h1>Get in Touch</h1>
        <p class="lead">Have a question or want to work together? I'd love to hear from you.</p>
    </div>
</section>

<section class="section contact-content">
    <div class="container">
        <div class="contact-grid grid">
            <div class="contact-form-container">
                <div class="card">
                    <h2>Send a Message</h2>
                    <form id="contact-form" action="includes/submit.php" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-input" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="button">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="contact-info">
                <div class="card">
                    <h2>Contact Information</h2>
                    <div class="contact-details">
                        <div class="contact-item">
                            <h3>Email</h3>
                            <p><a href="mailto:hello@johndoe.com">hello@johndoe.com</a></p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Location</h3>
                            <p>San Francisco, CA</p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Social Media</h3>
                            <div class="social-links">
                                <a href="https://linkedin.com/in/johndoe" target="_blank" rel="noopener noreferrer" class="social-link">
                                    LinkedIn
                                </a>
                                <a href="https://twitter.com/johndoe" target="_blank" rel="noopener noreferrer" class="social-link">
                                    Twitter
                                </a>
                                <a href="https://github.com/johndoe" target="_blank" rel="noopener noreferrer" class="social-link">
                                    GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card availability">
                    <h2>Availability</h2>
                    <p>I'm currently available for freelance work and interesting projects. If you have a project that you want to get started, think you need my help with something or just fancy saying hey, then get in touch.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/form.js"></script>

<?php include 'includes/footer.php'; ?> 