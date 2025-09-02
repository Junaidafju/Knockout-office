<?php
/**
 * Debug Contact Form Processing
 * Visit: http://knockout.test/debug-contact.php
 */

// Load WordPress
require_once('./wp-load.php');

echo "<h1>🔍 KnockOut Contact Form Debug</h1>";
echo "<style>body{font-family:Arial;background:#1a1a1a;color:#fff;padding:20px;} .success{color:#00ff00;} .error{color:#ff4444;} .info{color:#00d4ff;} pre{background:rgba(255,255,255,0.1);padding:15px;border-radius:8px;}</style>";

echo "<h2 class='info'>1. Testing WordPress Functions</h2>";

// Test if WordPress functions are loaded
echo "<pre>";
echo "✅ WordPress loaded: " . (function_exists('wp_mail') ? 'YES' : 'NO') . "\n";
echo "✅ Theme functions loaded: " . (function_exists('knockout_handle_contact_form') ? 'YES' : 'NO') . "\n";
echo "✅ Current theme: " . get_option('template') . "\n";
echo "✅ Debug enabled: " . (WP_DEBUG ? 'YES' : 'NO') . "\n";
echo "</pre>";

echo "<h2 class='info'>2. Testing SMTP Configuration</h2>";
echo "<pre>";
echo "SMTP Host: " . (defined('SMTP_HOST') ? SMTP_HOST : 'NOT DEFINED') . "\n";
echo "SMTP Username: " . (defined('SMTP_USERNAME') ? SMTP_USERNAME : 'NOT DEFINED') . "\n";
echo "SMTP Password: " . (defined('SMTP_PASSWORD') ? (SMTP_PASSWORD === 'REPLACE_WITH_YOUR_GMAIL_APP_PASSWORD' ? 'NEEDS CONFIGURATION' : 'CONFIGURED') : 'NOT DEFINED') . "\n";
echo "</pre>";

if (defined('SMTP_PASSWORD') && SMTP_PASSWORD !== 'REPLACE_WITH_YOUR_GMAIL_APP_PASSWORD') {
    echo "<h2 class='info'>3. Testing Email Functionality</h2>";
    
    // Test wp_mail
    $test_email = wp_mail(
        'junaidafju@gmail.com',
        'KnockOut Contact Test - ' . date('Y-m-d H:i:s'),
        'This is a test email from your KnockOut contact form debug script.',
        array('Content-Type: text/html; charset=UTF-8')
    );
    
    echo "<pre>";
    echo "📧 Test email sent: " . ($test_email ? '<span class="success">SUCCESS</span>' : '<span class="error">FAILED</span>') . "\n";
    if (!$test_email) {
        echo "Check debug.log for detailed error information.\n";
    }
    echo "</pre>";
    
} else {
    echo "<h2 class='error'>⚠️ SMTP Not Configured</h2>";
    echo "<p>Please update <code>wp-content/themes/knockout/smtp-config.php</code> with your Gmail App Password.</p>";
}

echo "<h2 class='info'>4. Testing Contact Form Function</h2>";

// Simulate form submission
$_POST = array(
    'contact_name' => 'Debug Test User',
    'contact_email' => 'test@example.com',
    'contact_message' => 'This is a debug test message.',
    'contact_subject' => 'general',
    'contact_nonce' => wp_create_nonce('knockout_contact_form')
);

echo "<pre>";
echo "Simulating form submission...\n";

if (function_exists('knockout_handle_contact_form')) {
    $result = knockout_handle_contact_form();
    
    if ($result) {
        if (isset($result['success'])) {
            echo "<span class='success'>✅ SUCCESS: " . $result['success'] . "</span>\n";
        } elseif (isset($result['error'])) {
            echo "<span class='error'>❌ ERROR: " . $result['error'] . "</span>\n";
        }
    } else {
        echo "<span class='error'>❌ Function returned null</span>\n";
    }
} else {
    echo "<span class='error'>❌ knockout_handle_contact_form() function not found</span>\n";
}

echo "</pre>";

// Clear the POST data
$_POST = array();

echo "<hr style='border-color:#b0d136;margin:30px 0;'>";
echo "<p><a href='http://knockout.test/contact/' style='color:#b0d136;'>← Back to Contact Page</a></p>";
?>
