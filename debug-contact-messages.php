<?php
/**
 * Debug Contact Form Messages
 * Test if success/error messages display properly
 */

require_once('wp-config.php');
require_once('wp-blog-header.php');

// Simulate the contact form processing
$success_message = '';
$error_message = '';
$debug_info = '';

// Test with a successful submission simulation
if (isset($_GET['test']) && $_GET['test'] === 'success') {
    $success_message = 'Thank you! Your message has been sent successfully. We will get back to you soon.';
    $debug_info = "✅ Email sent successfully to junaidafju@gmail.com\n";
    $debug_info .= "📧 Auto-reply sent to user\n";
    $debug_info .= "⏰ Rate limiting applied\n";
}

// Test with an error simulation
if (isset($_GET['test']) && $_GET['test'] === 'error') {
    $error_message = 'Please wait a moment before submitting another message.';
    $debug_info = "❌ Rate limiting active\n";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Messages Test</title>
    <style>
        body { background: #000; color: #fff; font-family: Arial, sans-serif; padding: 20px; }
        .form-message { padding: 16px 20px; border-radius: 12px; margin-bottom: 24px; font-weight: 600; text-align: center; }
        .form-message.success { background: rgba(0, 255, 0, 0.1); border: 1px solid rgba(0, 255, 0, 0.3); color: #00ff00; }
        .form-message.error { background: rgba(255, 0, 0, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); color: #ff4444; }
        .form-message.debug { background: rgba(0, 123, 255, 0.1); border: 1px solid rgba(0, 123, 255, 0.3); color: #007bff; text-align: left; font-family: monospace; font-size: 0.9rem; }
        .test-links { margin: 20px 0; }
        .test-links a { color: #b0d136; margin-right: 20px; padding: 10px 15px; background: rgba(176, 209, 54, 0.1); border-radius: 8px; text-decoration: none; }
    </style>
</head>
<body>
    <h1>🧪 Contact Form Messages Test</h1>
    
    <div class="test-links">
        <a href="?test=success">Test Success Message</a>
        <a href="?test=error">Test Error Message</a>
        <a href="debug-contact-messages.php">Reset</a>
    </div>
    
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
    
    <p>✅ Message display system is working correctly!</p>
    
    <a href="http://knockout.test/contact/" style="color: #b0d136;">🔙 Back to Contact Form</a>
    
</body>
</html>
