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
$form_submitted = false;

// Check if form was processed by the global handler
$global_result = knockout_get_contact_form_result();

// Handle form submission (try both global result and direct processing)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_name'])) {
    error_log('=== KNOCKOUT CONTACT FORM PROCESSING IN TEMPLATE ===');
    $form_submitted = true;
    
    $result = null;
    
    // First, try to get result from global handler
    if ($global_result) {
        $result = $global_result;
        error_log('Using global contact form result');
    } else {
        // Fallback: process directly in template
        error_log('Processing contact form directly in template');
        $result = knockout_handle_contact_form();
    }
    
    if ($result) {
        if (isset($result['success'])) {
            $success_message = $result['success'];
            $debug_info = "✅ Email sent successfully to junaidafju@gmail.com\n";
            $debug_info .= "📧 Auto-reply sent to user\n";
            $debug_info .= "⏰ Rate limiting applied\n";
            $debug_info .= "🕒 Time: " . current_time('H:i:s') . "\n";
            
            // Store form data before clearing (for display purposes)
            $submitted_data = $_POST;
            
            // Clear form data after successful submission to prevent resubmission
            $_POST = array();
        } elseif (isset($result['error'])) {
            $error_message = $result['error'];
            $debug_info = "❌ Email sending failed\n";
            $debug_info .= "Error: " . $result['error'] . "\n";
            $debug_info .= "🕒 Time: " . current_time('H:i:s') . "\n";
        }
    } else {
        $error_message = 'Form processing failed - no result returned.';
        $debug_info = "❌ No result from form handler\n";
        $debug_info .= "🕒 Time: " . current_time('H:i:s') . "\n";
    }
} elseif ($global_result) {
    // Handle case where global result exists but POST data was cleared
    $form_submitted = true;
    $result = $global_result;
    
    if (isset($result['success'])) {
        $success_message = $result['success'];
        $debug_info = "✅ Email sent successfully (via global handler)\n";
        $debug_info .= "📧 Auto-reply sent to user\n";
        $debug_info .= "⏰ Rate limiting applied\n";
        $debug_info .= "🕒 Time: " . current_time('H:i:s') . "\n";
    } elseif (isset($result['error'])) {
        $error_message = $result['error'];
        $debug_info = "❌ Email sending failed (via global handler)\n";
        $debug_info .= "Error: " . $result['error'] . "\n";
        $debug_info .= "🕒 Time: " . current_time('H:i:s') . "\n";
    }
}
?>

<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
  type="module"
></script>

<!-- Contact Form JavaScript - Simple logging only -->
<script>
(function() {
    'use strict';
    
    function initContactForm() {
        console.log('=== CONTACT FORM LOADED ===');
        
        // Simple logging for form submission - NO INTERFERENCE
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                console.log('=== FORM SUBMITTING NATURALLY ===');
                console.log('Form will submit to PHP and process naturally');
                // No preventDefault(), no button manipulation - pure natural submission
            });
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initContactForm);
    } else {
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
                    <button type="button" class="glow-on-hover" onclick="window.open('https://maps.app.goo.gl/Ub8dW7vTtQfEDYf37')">
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
                    <p><a href="mailto:junaidafju@gmail.com">junaidafju@gmail.com</a></p>
                    <p class="contact-note">We'll respond within 24 hours</p>
                </div>
            </div>
            
            <div class="contact-form-wrapper">
                <!-- FORM STATUS DISPLAY -->
                <?php if ($form_submitted): ?>
                    <div class="form-message debug" style="background: rgba(255, 255, 0, 0.1); border: 2px solid #ffff00; color: #ffff00; font-size: 16px; padding: 20px; margin: 20px 0;">
                        <h3>🚀 FORM WAS SUBMITTED!</h3>
                        <p>The form processing has been triggered. Check below for results.</p>
                    </div>
                <?php endif; ?>
                
                <!-- Debug Information for Laragon Development -->
                <?php if ($debug_info): ?>
                    <div class="form-message debug" style="background: rgba(0, 123, 255, 0.2); border: 2px solid #007bff; color: #007bff; font-size: 14px; padding: 20px; margin: 20px 0;">
                        <h4>🔍 Debug Information (Laragon Development)</h4>
                        <pre><?php echo esc_html($debug_info); ?></pre>
                    </div>
                <?php endif; ?>
                
                <?php if ($success_message): ?>
                    <div class="form-message success" style="background: rgba(0, 255, 0, 0.2); border: 2px solid #00ff00; color: #00ff00; font-size: 18px; padding: 20px; margin: 20px 0; text-align: center;">
                        <h3>🎉 SUCCESS!</h3>
                        <p><?php echo esc_html($success_message); ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="form-message error" style="background: rgba(255, 0, 0, 0.2); border: 2px solid #ff4444; color: #ff4444; font-size: 18px; padding: 20px; margin: 20px 0; text-align: center;">
                        <h3>❌ ERROR!</h3>
                        <p><?php echo esc_html($error_message); ?></p>
                    </div>
                <?php endif; ?>
                
                <!-- Always show form status for debugging -->
                <div class="form-message debug" style="background: rgba(128, 128, 128, 0.1); border: 1px solid #888; color: #ccc; font-size: 12px; padding: 10px; margin: 10px 0;">
                    <strong>Form Status Debug:</strong><br>
                    Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?><br>
                    Form Submitted: <?php echo $form_submitted ? 'YES' : 'NO'; ?><br>
                    Success Message: <?php echo $success_message ? 'SET' : 'EMPTY'; ?><br>
                    Error Message: <?php echo $error_message ? 'SET' : 'EMPTY'; ?><br>
                    Debug Info: <?php echo $debug_info ? 'SET' : 'EMPTY'; ?><br>
                    Current Time: <?php echo current_time('H:i:s'); ?><br>
                </div>
                
                <form class="contact-form" id="contact-form" method="POST" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <?php wp_nonce_field('knockout_contact_form', 'contact_nonce'); ?>
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
