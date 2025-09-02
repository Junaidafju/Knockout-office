<?php
/**
 * Clear Contact Form Rate Limiting
 * Visit: http://knockout.test/clear-rate-limit.php
 */

// Load WordPress
require_once('./wp-load.php');

echo "<h1>🔄 Clear Contact Form Rate Limiting</h1>";
echo "<style>body{font-family:Arial;background:#1a1a1a;color:#fff;padding:20px;max-width:600px;margin:0 auto;} .success{color:#00ff00;} .error{color:#ff4444;} .info{color:#00d4ff;}</style>";

// Clear all contact form rate limiting transients
global $wpdb;

// Delete all knockout contact rate limiting transients
$deleted = $wpdb->query($wpdb->prepare("
    DELETE FROM {$wpdb->options} 
    WHERE option_name LIKE %s
", '_transient_knockout_contact_%'));

echo "<div class='success'>✅ Cleared $deleted rate limiting entries</div>";
echo "<div class='info'>🎯 You can now test the contact form again!</div>";

echo "<hr style='border-color:#b0d136;margin:30px 0;'>";
echo "<p><a href='http://knockout.test/contact/' style='color:#b0d136;'>🧪 Test Contact Form Now</a></p>";
echo "<p><a href='http://knockout.test/test-wp-contact.php' style='color:#b0d136;'>🔍 Run WordPress Test Again</a></p>";
?>
