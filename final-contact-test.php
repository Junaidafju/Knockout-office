<?php
/**
 * Final Contact Form Test and Verification
 */

require_once('wp-config.php');
require_once('wp-blog-header.php');

echo "<h1>🎯 Final Contact Form Test</h1>";
echo "<style>body{font-family:Arial;background:#1a1a1a;color:#fff;padding:20px;} .success{color:#00ff00;} .error{color:#ff4444;} .info{color:#00d4ff;} .test{background:rgba(255,255,255,0.1);padding:20px;margin:20px 0;border-radius:10px;}</style>";

// Test 1: Check current contact email setting
echo "<div class='test'>";
echo "<h2>Test 1: Current Contact Email Configuration</h2>";
$current_email = get_option('knockout_contact_email', 'junaidafju@gmail.com');
echo "Current contact email: <span class='info'>" . $current_email . "</span><br>";
echo "</div>";

// Test 2: Test email functionality
echo "<div class='test'>";
echo "<h2>Test 2: Email Functionality Test</h2>";

// Clear rate limits
global $wpdb;
$wpdb->query(
    "DELETE FROM {$wpdb->options} 
     WHERE option_name LIKE '_transient_knockout_contact_%' 
     OR option_name LIKE '_transient_timeout_knockout_contact_%'"
);
echo "Rate limits cleared<br>";

// Simulate form submission
$_POST = array(
    'contact_name' => 'Final Test User',
    'contact_email' => 'finaltest@example.com',
    'contact_phone' => '555-FINAL-TEST',
    'contact_subject' => 'general',
    'contact_message' => 'This is the final test message to verify the contact form is working.',
    'contact_newsletter' => '1',
    'contact_nonce' => wp_create_nonce('knockout_contact_form')
);

$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

$result = knockout_handle_contact_form();

if ($result) {
    if (isset($result['success'])) {
        echo "<span class='success'>✅ SUCCESS: " . $result['success'] . "</span><br>";
    } elseif (isset($result['error'])) {
        echo "<span class='error'>❌ ERROR: " . $result['error'] . "</span><br>";
    }
} else {
    echo "<span class='error'>❌ No result returned</span><br>";
}

// Reset
$_POST = array();
$_SERVER['REQUEST_METHOD'] = 'GET';
echo "</div>";

// Test 3: Show configuration options
echo "<div class='test'>";
echo "<h2>Test 3: Configuration Options</h2>";
echo "<p>Current settings:</p>";
echo "• Contact email: " . get_option('knockout_contact_email', 'junaidafju@gmail.com') . "<br>";
echo "• SMTP Host: " . (defined('SMTP_HOST') ? SMTP_HOST : 'Not set') . "<br>";
echo "• SMTP Username: " . (defined('SMTP_USERNAME') ? SMTP_USERNAME : 'Not set') . "<br>";
echo "</div>";

// Test 4: Links to test the form
echo "<div class='test'>";
echo "<h2>Test 4: Test Your Contact Form</h2>";
echo "<p>Now test your contact form:</p>";
echo "<p><a href='http://knockout.test/contact/' style='color:#b0d136; padding:10px 20px; background:rgba(176,209,54,0.1); border-radius:8px; text-decoration:none;'>🔗 Go to Contact Page</a></p>";
echo "<p><a href='http://knockout.test/real-form-test.html' style='color:#00d4ff; padding:10px 20px; background:rgba(0,212,255,0.1); border-radius:8px; text-decoration:none;'>🧪 Use Test Form</a></p>";
echo "</div>";

// Test 5: Configuration URLs
echo "<div class='test'>";
echo "<h2>Test 5: Configuration URLs</h2>";
echo "<p>To change the contact email address where messages are sent:</p>";
echo "<p><code>http://knockout.test/?set_contact_email=1&email=NEW_EMAIL_HERE</code></p>";
echo "<p>Example: <a href='http://knockout.test/?set_contact_email=1&email=admin@knockout.test' style='color:#b0d136;'>Set to admin@knockout.test</a></p>";
echo "</div>";

echo "<h2>🎉 Contact Form Status: READY FOR TESTING!</h2>";
?>
