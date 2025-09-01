<?php
/**
 * Template part for displaying the contact section
 *
 * @package KnockOut
 */

// Initialize variables
$success_message = '';
$error_message = '';
$debug_info = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log('=== PHP FORM PROCESSING STARTED ===');
    error_log('POST method detected');
    error_log('POST data count: ' . count($_POST));
    error_log('POST data: ' . print_r($_POST, true));
    
    if (isset($_POST['contact_name']) && !empty($_POST['contact_name'])) {
        error_log('Contact name found, processing form...');
        
        // Debug information
        $debug_info = "Form submitted successfully!\n";
        $debug_info .= "POST data received: " . count($_POST) . " fields\n";
        
        // Get form data
        $name = isset($_POST['contact_name']) ? sanitize_text_field($_POST['contact_name']) : '';
        $email = isset($_POST['contact_email']) ? sanitize_email($_POST['contact_email']) : '';
        $phone = isset($_POST['contact_phone']) ? sanitize_text_field($_POST['contact_phone']) : '';
        $subject = isset($_POST['contact_subject']) ? sanitize_text_field($_POST['contact_subject']) : '';
        $message = isset($_POST['contact_message']) ? sanitize_textarea_field($_POST['contact_message']) : '';
        $newsletter = isset($_POST['contact_newsletter']) ? 'Yes' : 'No';
        
        error_log("Form data extracted - Name: $name, Email: $email, Subject: $subject");
        
        // Basic validation
        if (empty($name) || empty($email) || empty($message)) {
            $error_message = 'Please fill in all required fields.';
            $debug_info .= "Validation failed: Missing required fields\n";
            error_log('Validation failed: Missing required fields');
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = 'Please enter a valid email address.';
            $debug_info .= "Validation failed: Invalid email format\n";
            error_log('Validation failed: Invalid email format');
        } else {
            // Success - form data is valid
            $success_message = 'Thank you! Your message has been received successfully. We will get back to you soon.';
            $debug_info .= "Form validation passed\n";
            $debug_info .= "Name: $name\n";
            $debug_info .= "Email: $email\n";
            $debug_info .= "Subject: $subject\n";
            $debug_info .= "Newsletter: $newsletter\n";
            
            error_log('Form validation passed, setting success message');
            
            // In Laragon development, we can't send real emails
            // But we can log the data and show success message
            error_log("Contact Form Submission - Name: $name, Email: $email, Subject: $subject");
            
            // Clear form data after successful submission
            $_POST = array();
        }
    } else {
        error_log('No contact_name in POST data');
        $debug_info = "Form submitted but no name field found\n";
        $debug_info .= "POST data received: " . count($_POST) . " fields\n";
        $debug_info .= "POST keys: " . implode(', ', array_keys($_POST)) . "\n";
    }
}
?>

<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
  type="module"
></script>

<script>
// Wrap everything in error handling to prevent conflicts
(function() {
    'use strict';
    
    // Wait for DOM to be ready
    function initContactForm() {
        try {
            console.log('=== CONTACT FORM PAGE LOADED ===');
            console.log('DOM Content Loaded event fired');
            
            // Test if we can find basic elements
            console.log('Testing element selection...');
            console.log('Contact form found:', !!document.getElementById('contact-form'));
            console.log('Submit button found:', !!document.querySelector('button[type="submit"]'));
            console.log('Form inputs found:', document.querySelectorAll('input, select, textarea').length);
            
            // Ensure neon checkbox functionality
            const neonCheckboxes = document.querySelectorAll('.neon-checkbox input[type="checkbox"]');
            
            neonCheckboxes.forEach((checkbox) => {
                try {
                    // Add click event to the label for better UX
                    const label = checkbox.closest('.checkbox-label');
                    if (label) {
                        label.addEventListener('click', function(e) {
                            // Only handle clicks on the label text, not on the checkbox itself
                            if (e.target.classList.contains('checkbox-text')) {
                                checkbox.checked = !checkbox.checked;
                                checkbox.dispatchEvent(new Event('change'));
                            }
                        });
                    }
                    
                    // Ensure checkbox change events trigger properly
                    checkbox.addEventListener('change', function() {
                        console.log('Checkbox changed:', this.checked);
                    });
                } catch (checkboxError) {
                    console.error('Error setting up checkbox:', checkboxError);
                }
            });
    
    // Contact form submission handling
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        console.log('Contact form found, adding submit listener');
        
                    // Simple logging only - let form submit naturally
            try {
                console.log('Setting up form logging...');
                
                // Just log the form submission, don't intercept
                contactForm.addEventListener('submit', function(e) {
                    console.log('=== FORM SUBMITTING NATURALLY ===');
                    console.log('Form will submit to PHP and refresh page');
                    
                    // Show loading state briefly
                    const submitBtn = this.querySelector('button[type="submit"]');
                    if (submitBtn) {
                        submitBtn.textContent = 'Sending...';
                        submitBtn.disabled = true;
                    }
                    
                    // Let the form submit normally - no preventDefault()
                    console.log('Allowing natural form submission...');
                });
                console.log('Form logging listener added');
                
            } catch (error) {
                console.error('Error adding logging listener:', error);
            }
    } else {
        console.error('Contact form not found!');
    }
    
    // Form submission is now handled naturally by PHP
    console.log('Form will submit naturally to PHP');
    
    // Initialize the contact form
    initContactForm();
    
    // Also try to initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initContactForm);
    } else {
        // DOM is already ready
        initContactForm();
    }
    
})();
</script>

<!-- Test function for debugging - Global scope -->
<script>
function testFormSubmission() {
    console.log('=== TEST BUTTON CLICKED ===');
    const form = document.getElementById('contact-form');
    if (form) {
        console.log('Form found, testing submission...');
        
        // Get form data
        const formData = new FormData(form);
        console.log('Form data in test:');
        for (let [key, value] of formData.entries()) {
            console.log(key + ': ' + value);
        }
        
        // Try to submit the form
        try {
            const event = new Event('submit', { bubbles: true, cancelable: true });
            form.dispatchEvent(event);
            console.log('Form submit event dispatched');
        } catch (error) {
            console.error('Error dispatching submit event:', error);
        }
    } else {
        console.error('Form not found for testing');
    }
}
</script>

<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-subtitle">Get in touch with us for any questions or special requests</p>
        </div>
        
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-card visit-us">
                    <div class="contact-icon">
                        <dotlottie-wc
                          src="https://lottie.host/5286f78b-730a-4e73-91e8-8b3496faa558/nb9Kne86DF.lottie"
                          style="width: 76px;height: 76px"
                          speed="1"
                          autoplay
                          loop
                        ></dotlottie-wc>
                    </div>
                    <h3>Visit Us</h3>
                    <p>RDB Cinemas, Salt Lake,<br>Sector 5, Kolkata, West Bengal<br>Zip code: 700135</p>
                    <button type="button" class="glow-on-hover" onclick="window.open('https://maps.app.goo.gl/Ub8dW7vTtQfEDYf37)">
                        Get Directions
                    </button>
                </div>
                
                <div class="contact-card call-us">
                    <div class="contact-icon">
                        <dotlottie-wc
                          src="https://lottie.host/1bd6604f-b0cb-4d58-b7e7-fb1889ed3dc0/W5o7m8w5dQ.lottie"
                          style="width: 76px;height: 76px"
                          speed="1"
                          autoplay
                          loop
                        ></dotlottie-wc>
                    </div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+15551234267">(555) 123-BOWL</a></p>
                    <p class="contact-hours">
                        Mon-Thu: 11 AM - 11 PM<br>
                        Fri-Sat: 10 AM - 1 AM<br>
                        Sun: 12 PM - 1 AM
                    </p> 
                </div>
                
                <div class="contact-card email-us">
                    <div class="contact-icon">
                        <dotlottie-wc
                          src="https://lottie.host/aed23d2f-422b-402b-bf90-0a7f58ffcbe7/F3aH0HiGuL.lottie"
                          style="width: 76px;height: 76px"
                          speed="1"
                          autoplay
                          loop
                        ></dotlottie-wc>
                    </div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@knockout.com">info@knockout.com</a></p>
                    <p class="contact-note">We'll respond within 24 hours</p>
                </div>
            </div>
            
            <div class="contact-form-wrapper">
                <!-- Debug Information for Laragon Development -->
                <?php if ($debug_info): ?>
                    <div class="form-message debug">
                        <h4>🔍 Debug Information (Laragon Development)</h4>
                        <pre><?php echo esc_html($debug_info); ?></pre>
                    </div>
                <?php endif; ?>
                
                <?php if ($success_message): ?>
                    <div class="form-message success">
                        <p><?php echo esc_html($success_message); ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="form-message error">
                        <p><?php echo esc_html($error_message); ?></p>
                    </div>
                <?php endif; ?>
                
                <form class="contact-form" id="contact-form" method="POST" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Name *</label>
                            <input type="text" id="contact-name" name="contact_name" required 
                                   value="<?php echo isset($_POST['contact_name']) ? esc_attr($_POST['contact_name']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email *</label>
                            <input type="email" id="contact-email" name="contact_email" required
                                   value="<?php echo isset($_POST['contact_email']) ? esc_attr($_POST['contact_email']) : ''; ?>">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-phone">Phone</label>
                            <input type="tel" id="contact-phone" name="contact_phone"
                                   value="<?php echo isset($_POST['contact_phone']) ? esc_attr($_POST['contact_phone']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject" name="contact_subject">
                                <option value="">Select Subject</option>
                                <option value="booking" <?php echo (isset($_POST['contact_subject']) && $_POST['contact_subject'] === 'booking') ? 'selected' : ''; ?>>Booking Inquiry</option>
                                <option value="event" <?php echo (isset($_POST['contact_subject']) && $_POST['contact_subject'] === 'event') ? 'selected' : ''; ?>>Event Planning</option>
                                <option value="corporate" <?php echo (isset($_POST['contact_subject']) && $_POST['contact_subject'] === 'corporate') ? 'selected' : ''; ?>>Corporate Events</option>
                                <option value="birthday" <?php echo (isset($_POST['contact_subject']) && $_POST['contact_subject'] === 'birthday') ? 'selected' : ''; ?>>Birthday Parties</option>
                                <option value="general" <?php echo (isset($_POST['contact_subject']) && $_POST['contact_subject'] === 'general') ? 'selected' : ''; ?>>General Question</option>
                                <option value="feedback" <?php echo (isset($_POST['contact_subject']) && $_POST['contact_subject'] === 'feedback') ? 'selected' : ''; ?>>Feedback</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="contact-message">Message *</label>
                        <textarea id="contact-message" name="contact_message" rows="5" required placeholder="Tell us how we can help you..."><?php echo isset($_POST['contact_message']) ? esc_textarea($_POST['contact_message']) : ''; ?></textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label class="checkbox-label">
                            <div class="neon-checkbox">
                                <input type="checkbox" name="contact_newsletter" <?php echo (isset($_POST['contact_newsletter'])) ? 'checked' : ''; ?> />
                                <div class="neon-checkbox__frame">
                                    <div class="neon-checkbox__box">
                                        <div class="neon-checkbox__check-container">
                                            <svg viewBox="0 0 24 24" class="neon-checkbox__check">
                                                <path d="M3,12.5l7,7L21,5"></path>
                                            </svg>
                                        </div>
                                        <div class="neon-checkbox__glow"></div>
                                        <div class="neon-checkbox__borders">
                                            <span></span><span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="neon-checkbox__effects">
                                        <div class="neon-checkbox__particles">
                                            <span></span><span></span><span></span><span></span> <span></span
                                            ><span></span><span></span><span></span> <span></span><span></span
                                            ><span></span><span></span>
                                        </div>
                                        <div class="neon-checkbox__rings">
                                            <div class="ring"></div>
                                            <div class="ring"></div>
                                            <div class="ring"></div>
                                        </div>
                                        <div class="neon-checkbox__sparks">
                                            <span></span><span></span><span></span><span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="checkbox-text">Subscribe to our newsletter for special offers and events</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        Send Message
                    </button>
                    
                    <!-- Test button for debugging -->
                    <button type="button" class="btn btn-outline" style="margin-left: 10px;" onclick="testFormSubmission()">
                        Test Form
                    </button>
                    
                    <!-- Simple test button -->
                    <button type="button" class="btn btn-outline" style="margin-left: 10px;" onclick="alert('Button click working!')">
                        Simple Test
                    </button>
                </form>
            </div>
        </div>
        
        <div class="map-section">
            <div class="map-placeholder">
                <div class="map-content">
                    <h3>Find Us Here</h3>
                     <p>RDB Cinemas, Salt Lake,<br>Sector 5, Kolkata, West Bengal (700135)</p>
                    <p>Easy parking available • Wheelchair accessible</p>
                </div>
                <!-- In a real implementation, you would embed Google Maps or another map service here -->
            </div>
        </div>
    </div>
</section>