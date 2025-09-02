<?php
/**
 * Simple Form Test - Test contact form without CORS issues
 */

require_once('wp-config.php');
require_once('wp-blog-header.php');

// Clear rate limiting first
global $wpdb;
$wpdb->query(
    "DELETE FROM {$wpdb->options} 
     WHERE option_name LIKE '_transient_knockout_contact_%' 
     OR option_name LIKE '_transient_timeout_knockout_contact_%'"
);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form Test</title>
    <style>
        body { background: #000; color: #fff; font-family: Arial, sans-serif; padding: 20px; max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; color: #b0d136; margin-bottom: 5px; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 10px; background: rgba(255,255,255,0.1); border: 1px solid rgba(176,209,54,0.3); border-radius: 5px; color: #fff; }
        button { background: linear-gradient(45deg, #b0d136, #00d4ff); color: #fff; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .status { background: rgba(255,255,0,0.1); border: 1px solid #ffff00; color: #ffff00; padding: 15px; margin: 15px 0; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>🧪 Simple Contact Form Test</h1>
    
    <div class="status">
        ✅ Rate limiting cleared<br>
        🎯 This test submits directly to /contact/ page<br>
        📧 Will send email to: <?php echo get_option('knockout_contact_email', 'junaidafju@gmail.com'); ?>
    </div>
    
    <form method="POST" action="http://knockout.test/contact/">
        <?php wp_nonce_field('knockout_contact_form', 'contact_nonce'); ?>
        
        <div class="form-group">
            <label for="contact_name">Name *</label>
            <input type="text" id="contact_name" name="contact_name" value="Simple Test User" required>
        </div>
        
        <div class="form-group">
            <label for="contact_email">Email *</label>
            <input type="email" id="contact_email" name="contact_email" value="simpletest@example.com" required>
        </div>
        
        <div class="form-group">
            <label for="contact_phone">Phone</label>
            <input type="tel" id="contact_phone" name="contact_phone" value="555-SIMPLE-TEST">
        </div>
        
        <div class="form-group">
            <label for="contact_subject">Subject</label>
            <select id="contact_subject" name="contact_subject">
                <option value="">Select Subject</option>
                <option value="general" selected>General Question</option>
                <option value="booking">Booking Inquiry</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="contact_message">Message *</label>
            <textarea id="contact_message" name="contact_message" rows="4" required>This is a simple test message. If you receive this email, the contact form is working correctly!</textarea>
        </div>
        
        <div class="form-group">
            <label>
                <input type="checkbox" name="contact_newsletter" checked style="width: auto; margin-right: 8px;">
                Subscribe to newsletter
            </label>
        </div>
        
        <button type="submit">🚀 Submit Test Form</button>
    </form>
    
    <p style="margin-top: 30px;">
        <a href="http://knockout.test/contact/" style="color: #b0d136;">🔗 Go to Main Contact Page</a>
    </p>
    
</body>
</html>
