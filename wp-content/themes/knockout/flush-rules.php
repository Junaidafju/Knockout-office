<?php
/**
 * Temporary file to flush rewrite rules
 * Visit this file once in your browser, then delete it
 */

// Include WordPress
require_once('../../../wp-load.php');

// Flush rewrite rules
flush_rewrite_rules();

echo "Rewrite rules flushed! You can now visit http://knockout.test/menu/ and it should work.";
echo "<br><br>Please delete this file (flush-rules.php) after use for security.";
?>