<?php
// Simple test to POST to the contact form
$contact_url = 'http://knockout.test/contact/';

// First, get the nonce
$get_page = file_get_contents($contact_url);
if ($get_page) {
    // Extract nonce from the page
    preg_match('/name="contact_nonce"[^>]*value="([^"]*)"/', $get_page, $nonce_matches);
    $nonce = isset($nonce_matches[1]) ? $nonce_matches[1] : '';
    
    if ($nonce) {
        echo "✅ Nonce extracted: " . $nonce . "<br>";
        
        // Prepare form data
        $form_data = array(
            'contact_name' => 'Test User Form Post',
            'contact_email' => 'testpost@example.com',
            'contact_phone' => '555-123-TEST',
            'contact_subject' => 'general',
            'contact_message' => 'This is a test message submitted via POST request.',
            'contact_newsletter' => '1',
            'contact_nonce' => $nonce
        );
        
        // Create POST context
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($form_data)
            )
        ));
        
        // Submit form
        $response = file_get_contents($contact_url, false, $context);
        
        if ($response) {
            echo "<h2>📧 Form Submission Response:</h2>";
            
            // Check for success message
            if (strpos($response, 'Thank you! Your message has been sent successfully') !== false) {
                echo "✅ SUCCESS: Form submission successful!<br>";
            } elseif (strpos($response, 'Please wait a moment before submitting') !== false) {
                echo "⏰ RATE LIMITED: Form submission blocked by rate limiting<br>";
            } else {
                echo "❓ UNKNOWN: No clear success/error message found<br>";
            }
            
            // Check for debug info
            if (strpos($response, 'Debug Information') !== false) {
                echo "✅ Debug information is being displayed<br>";
            } else {
                echo "❌ No debug information found<br>";
            }
            
        } else {
            echo "❌ Failed to get response from form submission<br>";
        }
        
    } else {
        echo "❌ Could not extract nonce from contact page<br>";
    }
    
} else {
    echo "❌ Could not load contact page<br>";
}

echo "<br><a href='http://knockout.test/contact/'>🔙 Go to Contact Page</a>";
?>
