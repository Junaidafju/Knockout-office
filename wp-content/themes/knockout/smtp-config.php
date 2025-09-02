<?php
/**
 * SMTP Configuration for KnockOut Contact Form
 * 
 * INSTRUCTIONS:
 * 
 * 1. FOR LOCALHOST (Laragon Development):
 *    - Copy this file and rename it to 'smtp-config.php'
 *    - Add the following lines to your wp-config.php file:
 *      require_once(get_template_directory() . '/smtp-config.php');
 *    - Configure Gmail App Password (see instructions below)
 * 
 * 2. FOR PRODUCTION:
 *    - Use environment variables or your hosting provider's SMTP settings
 *    - Never commit real passwords to version control
 * 
 * @package KnockOut
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * LOCALHOST CONFIGURATION WITH GMAIL
 * 
 * To use Gmail SMTP for localhost testing:
 * 1. Enable 2-Factor Authentication on your Gmail account
 * 2. Generate an App Password:
 *    - Go to https://myaccount.google.com/security
 *    - Click "2-Step Verification"
 *    - At the bottom, click "App passwords"
 *    - Select "Mail" and "Windows Computer" (or Custom)
 *    - Copy the 16-character password
 * 3. Replace 'your-gmail@gmail.com' and 'your-app-password' below
 */

// Gmail SMTP settings for localhost
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define('SMTP_USERNAME', 'junaidafju@gmail.com'); // Your Gmail address
define('SMTP_PASSWORD', 'knkd ngrg ppnd ilue'); // Replace with your Gmail App Password
define('SMTP_FROM_EMAIL', 'junaidafju@gmail.com');
define('SMTP_FROM_NAME', 'KnockOut Sports Café');

/**
 * ALTERNATIVE SMTP PROVIDERS FOR PRODUCTION:
 * 
 * 1. MAILGUN:
 * define('SMTP_HOST', 'smtp.mailgun.org');
 * define('SMTP_PORT', 587);
 * define('SMTP_SECURE', 'tls');
 * define('SMTP_USERNAME', 'postmaster@yourdomain.com');
 * define('SMTP_PASSWORD', 'your-mailgun-password');
 * 
 * 2. SENDGRID:
 * define('SMTP_HOST', 'smtp.sendgrid.net');
 * define('SMTP_PORT', 587);
 * define('SMTP_SECURE', 'tls');
 * define('SMTP_USERNAME', 'apikey');
 * define('SMTP_PASSWORD', 'your-sendgrid-api-key');
 * 
 * 3. AMAZON SES:
 * define('SMTP_HOST', 'email-smtp.us-east-1.amazonaws.com');
 * define('SMTP_PORT', 587);
 * define('SMTP_SECURE', 'tls');
 * define('SMTP_USERNAME', 'your-ses-access-key');
 * define('SMTP_PASSWORD', 'your-ses-secret-key');
 */

/**
 * TESTING SMTP CONNECTION
 * 
 * Add this temporary function to test your SMTP connection:
 */
function knockout_test_email() {
    if (isset($_GET['test_email']) && $_GET['test_email'] === 'knockout') {
        $to = 'junaidafju@gmail.com';
        $subject = 'SMTP Test from KnockOut - ' . date('Y-m-d H:i:s');
        $message = 'This is a test email to verify SMTP configuration is working correctly.';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        $sent = wp_mail($to, $subject, $message, $headers);
        
        if ($sent) {
            wp_die('✅ Test email sent successfully to ' . $to . '! <a href="' . home_url() . '">← Back to site</a>');
        } else {
            wp_die('❌ Failed to send test email. Check your SMTP configuration. <a href="' . home_url() . '">← Back to site</a>');
        }
    }
}
add_action('init', 'knockout_test_email');
// To test: visit yoursite.com/?test_email=knockout

/**
 * PRODUCTION SECURITY NOTES:
 * 
 * 1. Never store passwords in files committed to version control
 * 2. Use environment variables: $_ENV['SMTP_PASSWORD']
 * 3. Consider using WordPress plugins like Easy WP SMTP for GUI configuration
 * 4. Implement additional spam protection (reCAPTCHA, Akismet)
 * 5. Set up proper SPF, DKIM, and DMARC records for your domain
 */
