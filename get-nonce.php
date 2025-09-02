<?php
require_once('wp-config.php');
require_once('wp-blog-header.php');

// Set CORS headers to allow cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: text/plain');

// Return a fresh nonce for the contact form
echo wp_create_nonce('knockout_contact_form');
exit;
?>
