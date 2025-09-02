<?php
/**
 * Simple Contact Form Test for KnockOut
 * 
 * Visit: http://knockout.test/test-contact.php
 * This bypasses WordPress to test basic form functionality
 */

// Simple form processing
$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $msg = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    if (empty($name) || empty($email) || empty($msg)) {
        $error = 'Please fill all fields';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email format';
    } else {
        // In a real setup, this would send email
        $message = "✅ Form submitted successfully!\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Message: $msg\n";
        $message .= "\n📧 Email would be sent to: junaidafju@gmail.com";
        
        // Log the submission
        error_log("Test Contact Form - Name: $name, Email: $email");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Test - KnockOut</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; background: #1a1a1a; color: #fff; }
        .container { background: rgba(255,255,255,0.1); padding: 30px; border-radius: 15px; border: 1px solid #b0d136; }
        h1 { color: #b0d136; text-align: center; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; color: #b0d136; font-weight: bold; }
        input, textarea { width: 100%; padding: 12px; border: 1px solid #b0d136; border-radius: 8px; background: rgba(255,255,255,0.1); color: #fff; }
        input:focus, textarea:focus { outline: none; border-color: #00d4ff; box-shadow: 0 0 10px rgba(0,212,255,0.3); }
        button { background: linear-gradient(135deg, #b0d136, #00d4ff); border: none; padding: 15px 30px; border-radius: 25px; color: #000; font-weight: bold; cursor: pointer; width: 100%; }
        button:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(176,209,54,0.4); }
        .message { padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        .success { background: rgba(0,255,0,0.1); border: 1px solid #00ff00; color: #00ff00; }
        .error { background: rgba(255,0,0,0.1); border: 1px solid #ff0000; color: #ff4444; }
        .debug { background: rgba(0,123,255,0.1); border: 1px solid #007bff; color: #007bff; white-space: pre-line; font-family: monospace; }
        .links { text-align: center; margin-top: 30px; }
        .links a { color: #b0d136; text-decoration: none; margin: 0 15px; }
        .links a:hover { color: #00d4ff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎳 KnockOut Contact Form Test</h1>
        
        <?php if ($message): ?>
            <div class="message success debug"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <?php if ($error): ?>
            <div class="message error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="4" required placeholder="Your message here..."><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
            </div>
            
            <button type="submit">Send Test Message</button>
        </form>
        
        <div class="links">
            <a href="http://knockout.test/">← Back to Homepage</a>
            <a href="http://knockout.test/contact/">WordPress Contact Page</a>
        </div>
        
        <div class="message debug" style="margin-top: 20px;">
            <strong>🔧 Next Steps:</strong>
            1. Set up Gmail App Password for junaidafju@gmail.com
            2. Update smtp-config.php with your App Password  
            3. Test WordPress contact form at /contact/
            
            <strong>📁 Files to Configure:</strong>
            • wp-content/themes/knockout/smtp-config.php
        </div>
    </div>
</body>
</html>
