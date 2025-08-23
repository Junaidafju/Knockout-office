<?php
/**
 * Template part for displaying the hero section
 *
 * @package KnockOut
 */

?>

<section class="hero-section" style="height: 90vh !important; min-height: 600px !important; max-height: 90vh !important;">
    <div class="hero-background">
        <video class="hero-bg-video" 
               autoplay 
               muted 
               loop 
               playsinline 
               preload="auto"
               controls="false"
               style="opacity: 0.8; display: block;">
            <!-- Your custom sports cafe video from Cloudinary -->
            <source src="https://res.cloudinary.com/dcvn7lbh6/video/upload/v1754394117/for-webside-1-3_vfyvv1.mp4" type="video/mp4">
            <!-- Fallback video -->
            <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Fallback image if video doesn't load -->
        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1920&h=1080&fit=crop&crop=center" 
             alt="KNOCKOUT Sports Cafe - Bowling, Gaming and Entertainment" 
             class="hero-bg-image"
             style="display: none;">
    </div>
    <div class="hero-overlay"></div>
    
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title motion-element">
                <span class="title-line-1">KNOCKOUT</span>
                <span class="title-line-2">SPORTS CAFE</span>
            </h1>
            
            <?php if (is_front_page()) : ?>
                
                <div class="hero-features">
                    <div class="feature-item">
                        <span class="feature-text">Where Champions Gather • Premium Sports Experience • Live Action</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="<?php echo esc_url(get_theme_mod('hero_primary_link', '#booking')); ?>" class="btn-3d btn-3d-primary">
                        <span class="btn-icon">🎯</span>
                        <span class="btn-text"><?php echo esc_html(get_theme_mod('hero_primary_text', 'Book Now')); ?></span>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('hero_secondary_link', '#menu')); ?>" class="btn-3d btn-3d-secondary">
                        <span class="btn-icon">😎</span>
                        <span class="btn-text"><?php echo esc_html(get_theme_mod('hero_secondary_link', 'View Menu')); ?></span>
                    </a>
                </div>
            <?php endif; ?>
            

        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="scroll-indicator">
        <div class="scroll-arrow"></div>
        <span class="scroll-text">Scroll to explore</span>
    </div>
</section>
