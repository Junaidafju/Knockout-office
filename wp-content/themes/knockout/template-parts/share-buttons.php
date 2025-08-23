<?php
/**
 * Template part for displaying share buttons
 *
 * @package KnockOut
 */

$current_url = urlencode(get_permalink());
$site_title = urlencode(get_bloginfo('name'));
$page_title = urlencode(get_the_title());
$site_description = urlencode(get_bloginfo('description'));
?>

<div class="share-buttons">
    <h3 class="share-title">Share KNOCKOUT Sports Café</h3>
    
    <div class="share-links">
        <!-- Facebook Share -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" 
           target="_blank" 
           class="share-btn facebook-share"
           aria-label="Share on Facebook">
            <i class="fab fa-facebook-f"></i>
            <span>Facebook</span>
        </a>
        
        <!-- Twitter Share -->
        <a href="https://twitter.com/intent/tweet?url=<?php echo $current_url; ?>&text=<?php echo $page_title; ?>%20-%20<?php echo $site_description; ?>" 
           target="_blank" 
           class="share-btn twitter-share"
           aria-label="Share on Twitter">
            <i class="fab fa-twitter"></i>
            <span>Twitter</span>
        </a>
        
        <!-- WhatsApp Share -->
        <a href="https://wa.me/?text=<?php echo $page_title; ?>%20-%20<?php echo $site_description; ?>%20<?php echo $current_url; ?>" 
           target="_blank" 
           class="share-btn whatsapp-share"
           aria-label="Share on WhatsApp">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
        
        <!-- LinkedIn Share -->
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $current_url; ?>" 
           target="_blank" 
           class="share-btn linkedin-share"
           aria-label="Share on LinkedIn">
            <i class="fab fa-linkedin-in"></i>
            <span>LinkedIn</span>
        </a>
        
        <!-- Copy Link -->
        <button class="share-btn copy-link" 
                data-url="<?php echo get_permalink(); ?>"
                aria-label="Copy link to clipboard">
            <i class="fas fa-link"></i>
            <span>Copy Link</span>
        </button>
    </div>
    
    <!-- Direct URL Display -->
    <div class="share-url">
        <label for="share-url-input">Direct Link:</label>
        <div class="url-input-group">
            <input type="text" 
                   id="share-url-input" 
                   value="<?php echo get_permalink(); ?>" 
                   readonly 
                   class="share-url-input">
            <button class="copy-url-btn" data-target="share-url-input">
                <i class="fas fa-copy"></i>
            </button>
        </div>
    </div>
</div>