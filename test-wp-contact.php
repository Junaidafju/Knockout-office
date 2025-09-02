<?php
/**
 * Test WordPress Contact Page Form Submission
 * This mimics exactly what happens when someone submits the WordPress contact form
 */

echo "<h1>🧪 WordPress Contact Page Test</h1>";
echo "<style>body{font-family:Arial;background:#1a1a1a;color:#fff;padding:20px;max-width:800px;margin:0 auto;} .success{color:#00ff00;} .error{color:#ff4444;} .info{color:#00d4ff;} pre{background:rgba(255,255,255,0.1);padding:15px;border-radius:8px;}</style>";

// First, get the nonce from the contact page
$contact_page = file_get_contents('http://knockout.test/contact/');
preg_match('/name="contact_nonce" value="([^"]+)"/', $contact_page, $nonce_matches);
$nonce = isset($nonce_matches[1]) ? $nonce_matches[1] : '';

echo "<h2 class='info'>1. Testing Contact Page Access</h2>";
echo "<pre>";
echo "✅ Contact page accessible: " . (strpos($contact_page, 'contact-form') !== false ? 'YES' : 'NO') . "\n";
echo "✅ Nonce found: " . ($nonce ? 'YES (' . substr($nonce, 0, 8) . '...)' : 'NO') . "\n";
echo "✅ Form found: " . (strpos($contact_page, 'id="contact-form"') !== false ? 'YES' : 'NO') . "\n";
echo "</pre>";

if ($nonce) {
    echo "<h2 class='info'>2. Submitting Test Form</h2>";
    
    // Prepare form data exactly as WordPress contact form would send it
    $postData = array(
        'contact_name' => 'WordPress Test User',
        'contact_email' => 'wptest@example.com',
        'contact_phone' => '+1234567890',
        'contact_subject' => 'general',
        'contact_message' => 'This is a test message submitted through the WordPress contact form to verify email functionality.',
        'contact_newsletter' => '1',
        'contact_nonce' => $nonce,
        '_wp_http_referer' => '/contact/'
    );
    
    // Create POST request
    $context = stream_context_create(array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($postData)
        )
    ));
    
    echo "<pre>";
    echo "📤 Submitting form with data:\n";
    foreach ($postData as $key => $value) {
        if ($key !== 'contact_nonce') {
            echo "  $key: $value\n";
        }
    }
    echo "</pre>";
    
    // Submit the form
    $response = file_get_contents('http://knockout.test/contact/', false, $context);
    
    // Check for success/error messages in the response
    $has_success = strpos($response, 'form-message success') !== false;
    $has_error = strpos($response, 'form-message error') !== false;
    $has_debug = strpos($response, 'form-message debug') !== false;
    
    echo "<h2 class='info'>3. Form Submission Results</h2>";
    echo "<pre>";
    echo "✅ Form submitted: YES\n";
    echo "✅ Success message: " . ($has_success ? 'YES' : 'NO') . "\n";
    echo "❌ Error message: " . ($has_error ? 'YES' : 'NO') . "\n";
    echo "🔍 Debug message: " . ($has_debug ? 'YES' : 'NO') . "\n";
    echo "</pre>";
    
    if ($has_success) {
        echo "<div class='success'>🎉 WORDPRESS CONTACT FORM IS WORKING! Emails are being sent to junaidafju@gmail.com</div>";
    } elseif ($has_error) {
        echo "<div class='error'>❌ Form processed but returned an error</div>";
    } else {
        echo "<div class='error'>❌ No feedback messages found - form might not be processing correctly</div>";
    }
    
    // Show debug info if present
    if ($has_debug) {
        preg_match('/<pre[^>]*>(.*?)<\/pre>/s', $response, $debug_matches);
        if (isset($debug_matches[1])) {
            echo "<h3 class='info'>🔍 Debug Information:</h3>";
            echo "<pre>" . strip_tags($debug_matches[1]) . "</pre>";
        }
    }
    
} else {
    echo "<div class='error'>❌ Could not find nonce field on contact page</div>";
}

echo "<hr style='border-color:#b0d136;margin:30px 0;'>";
echo "<p><a href='http://knockout.test/contact/' style='color:#b0d136;'>← Back to Contact Page</a></p>";
?>
