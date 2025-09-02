<?php
// Minimal form test to isolate the issue
// Access this at: http://knockout.test/minimal-form-test.php

echo "<h1>Minimal Form Test</h1>";

echo "<div style='background: #222; color: #fff; padding: 20px; margin: 20px; border: 1px solid #555;'>";
echo "<h2>Request Debug:</h2>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "POST Data Available: " . (count($_POST) > 0 ? 'YES' : 'NO') . "<br>";
echo "POST Keys: " . implode(', ', array_keys($_POST)) . "<br>";
echo "Current Time: " . date('H:i:s') . "<br>";
echo "</div>";

// Process form if submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_name'])) {
    echo "<div style='background: green; color: white; padding: 20px; margin: 20px;'>";
    echo "<h2>✅ FORM SUBMITTED SUCCESSFULLY!</h2>";
    echo "Name: " . htmlspecialchars($_POST['test_name']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['test_email']) . "<br>";
    echo "Message: " . htmlspecialchars($_POST['test_message']) . "<br>";
    echo "</div>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Minimal Form Test</title>
    <style>
        body { background: #111; color: #fff; font-family: Arial; }
        form { background: #333; padding: 20px; margin: 20px; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 15px 30px; font-size: 16px; }
    </style>
</head>
<body>
    <h1>Minimal Contact Form Test</h1>
    
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="test_name" required>
        
        <label>Email:</label>
        <input type="email" name="test_email" required>
        
        <label>Message:</label>
        <textarea name="test_message" required></textarea>
        
        <button type="submit">Submit Test Form</button>
    </form>
    
    <p><a href="http://knockout.test/contact/">← Back to Contact Page</a></p>
    
    <script>
        // NO JAVASCRIPT INTERFERENCE - Pure HTML form submission
        console.log('Minimal test page loaded - no form JavaScript');
    </script>
</body>
</html>
