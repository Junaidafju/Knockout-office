<?php
/**
 * Live Contact Form Test
 * This will actually test submitting the real contact form
 */

// Load WordPress
require_once('./wp-load.php');

echo "<h1>🧪 Live Contact Form Test</h1>";
echo "<style>body{font-family:Arial;background:#1a1a1a;color:#fff;padding:20px;max-width:800px;margin:0 auto;} .success{color:#00ff00;} .error{color:#ff4444;} .info{color:#00d4ff;} .form{background:rgba(255,255,255,0.1);padding:20px;border-radius:10px;margin:20px 0;} input,textarea,select{width:100%;padding:10px;margin:5px 0;background:rgba(255,255,255,0.1);border:1px solid #b0d136;color:#fff;border-radius:5px;} button{background:linear-gradient(135deg,#b0d136,#00d4ff);border:none;padding:15px 30px;border-radius:25px;color:#000;font-weight:bold;cursor:pointer;width:100%;margin-top:10px;}</style>";

$result_message = '';

// Process form if submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_submit'])) {
    
    // Simulate the contact form submission
    $_POST['contact_name'] = $_POST['test_name'];
    $_POST['contact_email'] = $_POST['test_email'];
    $_POST['contact_message'] = $_POST['test_message'];
    $_POST['contact_subject'] = 'general';
    $_POST['contact_nonce'] = wp_create_nonce('knockout_contact_form');
    
    echo "<h2 class='info'>📧 Testing Email Send...</h2>";
    
    // Call the contact form handler
    $result = knockout_handle_contact_form();
    
    if ($result) {
        if (isset($result['success'])) {
            $result_message = "<div class='success'>✅ SUCCESS: " . $result['success'] . "</div>";
            $result_message .= "<div class='info'>📧 Check junaidafju@gmail.com for the email!</div>";
        } elseif (isset($result['error'])) {
            $result_message = "<div class='error'>❌ ERROR: " . $result['error'] . "</div>";
        }
    } else {
        $result_message = "<div class='error'>❌ Function returned null - check debug logs</div>";
    }
    
    // Clear POST data
    unset($_POST['contact_name'], $_POST['contact_email'], $_POST['contact_message'], $_POST['contact_subject'], $_POST['contact_nonce']);
}

echo $result_message;

?>

<div class="form">
    <h2 class="info">🎯 Test Your Contact Form Email</h2>
    <p>This will send a real email to <strong>junaidafju@gmail.com</strong></p>
    
    <form method="POST">
        <label>Your Name:</label>
        <input type="text" name="test_name" required value="Test User">
        
        <label>Your Email:</label>
        <input type="email" name="test_email" required value="test@example.com">
        
        <label>Your Message:</label>
        <textarea name="test_message" required rows="3">This is a test message from the KnockOut contact form. If you receive this, the email system is working perfectly!</textarea>
        
        <button type="submit" name="test_submit">🚀 Send Test Email Now</button>
    </form>
    
    <div style="margin-top:30px;">
        <h3 class="info">📋 What This Test Does:</h3>
        <ul>
            <li>✅ Tests the contact form email function</li>
            <li>📧 Sends real email to junaidafju@gmail.com</li>
            <li>📱 Sends auto-reply email to test address</li>
            <li>🔍 Shows detailed success/error messages</li>
        </ul>
        
        <p><a href="http://knockout.test/contact/" style="color:#b0d136;">← Back to Contact Page</a></p>
        <p><a href="http://knockout.test/debug-contact.php" style="color:#b0d136;">🔍 View Debug Information</a></p>
    </div>
</div>
