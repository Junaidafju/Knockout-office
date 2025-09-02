<?php
/**
 * Test Contact Form - Quick Debug Script
 * Run this to test the contact form without browser issues
 */

// Include WordPress
require_once('wp-config.php');
require_once('wp-blog-header.php');

echo "<h1>🧪 Contact Form Test</h1>";

// Test 1: Check if SMTP is configured
echo "<h2>Test 1: SMTP Configuration</h2>";
if (defined('SMTP_HOST') && defined('SMTP_USERNAME')) {
    echo "✅ SMTP is configured<br>";
    echo "Host: " . SMTP_HOST . "<br>";
    echo "Username: " . SMTP_USERNAME . "<br>";
} else {
    echo "❌ SMTP not configured<br>";
}

// Test 2: Check if contact form handler exists
echo "<h2>Test 2: Contact Form Handler</h2>";
if (function_exists('knockout_handle_contact_form')) {
    echo "✅ Contact form handler function exists<br>";
} else {
    echo "❌ Contact form handler function missing<br>";
}

// Test 3: Simulate form submission
echo "<h2>Test 3: Simulate Form Submission</h2>";

// Clear any existing rate limits first
global $wpdb;
$wpdb->query(
    "DELETE FROM {$wpdb->options} 
     WHERE option_name LIKE '_transient_knockout_contact_%' 
     OR option_name LIKE '_transient_timeout_knockout_contact_%'"
);
echo "Rate limits cleared<br>";

// Create test form data
$_POST = array(
    'contact_name' => 'Test User',
    'contact_email' => 'test@example.com',
    'contact_phone' => '123-456-7890',
    'contact_subject' => 'general',
    'contact_message' => 'This is a test message from the contact form test script.',
    'contact_newsletter' => '1',
    'contact_nonce' => wp_create_nonce('knockout_contact_form')
);

$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

// Test the contact form handler
if (function_exists('knockout_handle_contact_form')) {
    $result = knockout_handle_contact_form();
    
    if ($result) {
        if (isset($result['success'])) {
            echo "✅ SUCCESS: " . $result['success'] . "<br>";
        } elseif (isset($result['error'])) {
            echo "❌ ERROR: " . $result['error'] . "<br>";
        }
    } else {
        echo "❌ No result returned from contact form handler<br>";
    }
} else {
    echo "❌ Contact form handler function not found<br>";
}

// Test 4: Check recent debug logs
echo "<h2>Test 4: Recent Debug Logs</h2>";
$debug_file = WP_CONTENT_DIR . '/debug.log';
if (file_exists($debug_file)) {
    $logs = file_get_contents($debug_file);
    $recent_logs = explode("\n", $logs);
    $recent_logs = array_slice($recent_logs, -10); // Last 10 lines
    
    echo "<pre style='background: #f0f0f0; padding: 10px; border-radius: 5px;'>";
    foreach ($recent_logs as $log) {
        if (strpos($log, 'knockout') !== false || strpos($log, 'contact') !== false) {
            echo esc_html($log) . "\n";
        }
    }
    echo "</pre>";
} else {
    echo "❌ Debug log file not found<br>";
}

echo "<br><a href='http://knockout.test/contact/'>🔙 Back to Contact Form</a>";
?>
