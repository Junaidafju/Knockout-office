<?php
/**
 * Complete Contact Form Diagnostic
 * This will help us identify exactly what's wrong
 */

require_once('wp-config.php');
require_once('wp-blog-header.php');

echo "<h1>🔍 Complete Contact Form Diagnostic</h1>";

// Test 1: Check WordPress environment
echo "<h2>Test 1: WordPress Environment</h2>";
echo "WordPress Version: " . get_bloginfo('version') . "<br>";
echo "Site URL: " . get_site_url() . "<br>";
echo "Home URL: " . get_home_url() . "<br>";
echo "Theme: " . get_stylesheet() . "<br>";
echo "Theme Directory: " . get_template_directory() . "<br>";

// Test 2: Check if we're on the contact page
echo "<h2>Test 2: Contact Page Detection</h2>";
$contact_url = home_url('/contact/');
echo "Contact URL should be: " . $contact_url . "<br>";

// Test 3: Check theme files
echo "<h2>Test 3: Theme Files</h2>";
$contact_template = get_template_directory() . '/contact.php';
$contact_part = get_template_directory() . '/template-parts/contact.php';
$functions_file = get_template_directory() . '/functions.php';

echo "Contact template exists: " . (file_exists($contact_template) ? "✅ YES" : "❌ NO") . "<br>";
echo "Contact template part exists: " . (file_exists($contact_part) ? "✅ YES" : "❌ NO") . "<br>";
echo "Functions.php exists: " . (file_exists($functions_file) ? "✅ YES" : "❌ NO") . "<br>";

// Test 4: Check SMTP configuration
echo "<h2>Test 4: SMTP Configuration</h2>";
if (defined('SMTP_HOST')) {
    echo "✅ SMTP_HOST: " . SMTP_HOST . "<br>";
    echo "✅ SMTP_USERNAME: " . SMTP_USERNAME . "<br>";
    echo "✅ SMTP_PORT: " . SMTP_PORT . "<br>";
} else {
    echo "❌ SMTP not configured<br>";
}

// Test 5: Check WordPress mail function
echo "<h2>Test 5: WordPress Mail Function</h2>";
$test_email_sent = wp_mail(
    'junaidafju@gmail.com',
    'Diagnostic Test Email',
    'This is a test email from the contact form diagnostic script.',
    array('Content-Type: text/html; charset=UTF-8')
);

if ($test_email_sent) {
    echo "✅ WordPress mail function is working<br>";
} else {
    echo "❌ WordPress mail function failed<br>";
}

// Test 6: Check contact form handler
echo "<h2>Test 6: Contact Form Handler</h2>";
if (function_exists('knockout_handle_contact_form')) {
    echo "✅ knockout_handle_contact_form function exists<br>";
    
    // Clear rate limits
    global $wpdb;
    $wpdb->query(
        "DELETE FROM {$wpdb->options} 
         WHERE option_name LIKE '_transient_knockout_contact_%' 
         OR option_name LIKE '_transient_timeout_knockout_contact_%'"
    );
    
    // Simulate form submission
    $_POST = array(
        'contact_name' => 'Diagnostic Test',
        'contact_email' => 'test@diagnostic.com',
        'contact_phone' => '555-TEST-123',
        'contact_subject' => 'general',
        'contact_message' => 'This is a diagnostic test message.',
        'contact_newsletter' => '1',
        'contact_nonce' => wp_create_nonce('knockout_contact_form')
    );
    
    $_SERVER['REQUEST_METHOD'] = 'POST';
    $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
    
    $result = knockout_handle_contact_form();
    
    if ($result) {
        if (isset($result['success'])) {
            echo "✅ Form processing successful: " . $result['success'] . "<br>";
        } elseif (isset($result['error'])) {
            echo "❌ Form processing error: " . $result['error'] . "<br>";
        }
    } else {
        echo "❌ No result from form handler<br>";
    }
    
    // Reset POST data
    $_POST = array();
    $_SERVER['REQUEST_METHOD'] = 'GET';
    
} else {
    echo "❌ knockout_handle_contact_form function not found<br>";
}

// Test 7: Check contact page template loading
echo "<h2>Test 7: Contact Page Template Loading</h2>";
echo "<p>Visit the actual contact page to see the form in action:</p>";
echo "<a href='http://knockout.test/contact/' style='color: #b0d136; font-size: 18px; padding: 10px 20px; background: rgba(176, 209, 54, 0.1); border-radius: 8px; text-decoration: none;'>🔗 Go to Contact Page</a><br><br>";

// Test 8: Check for conflicts
echo "<h2>Test 8: Plugin Conflicts</h2>";
$active_plugins = get_option('active_plugins');
echo "Active plugins: " . count($active_plugins) . "<br>";
foreach ($active_plugins as $plugin) {
    echo "- " . $plugin . "<br>";
}

echo "<h2>📊 Diagnostic Summary</h2>";
echo "<p>Based on the tests above, your contact form should be working. If you're still not seeing messages:</p>";
echo "<ol>";
echo "<li>Try visiting the contact page directly: <a href='http://knockout.test/contact/'>http://knockout.test/contact/</a></li>";
echo "<li>Clear your browser cache and try again</li>";
echo "<li>Check the browser console for JavaScript errors</li>";
echo "<li>Make sure you're filling out all required fields (Name, Email, Message)</li>";
echo "</ol>";

?>
