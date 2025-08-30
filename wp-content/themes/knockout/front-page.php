<?php
/**
 * The front page template file
 *
 * This is the custom home page template that displays the front page of the site
 * with all bowling-themed components and optimized performance.
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main front-page">
    <!-- Hero Section with Animated Logo -->
    <div class="hero-wrapper">
        <?php get_template_part('template-parts/hero'); ?>
    </div>
    
    <!-- Sports Activities Marquee -->
    <?php get_template_part('template-parts/sports-marquee'); ?>
    
    <!-- About Us Section -->
    <div class="about-wrapper section-wrapper">
        <?php get_template_part('template-parts/about'); ?>
    </div>
    
    <!-- Services Section -->
    <div class="services-wrapper section-wrapper">
        <?php get_template_part('template-parts/services'); ?>
    </div>
    
    <!-- Events Section -->
    <div class="events-wrapper section-wrapper">
        <?php get_template_part('template-parts/events'); ?>
    </div>
    
</main>

<?php get_footer(); ?>