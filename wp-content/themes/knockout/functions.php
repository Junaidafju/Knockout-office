<?php
/**
 * KnockOut Theme functions and definitions
 *
 * @package KnockOut
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function knockout_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for core custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for site icon (favicon)
    add_theme_support('site-icon');

    // Register navigation menus
    register_nav_menus(array(
        'primary-left'  => esc_html__('Primary Left Menu', 'knockout'),
        'primary-right' => esc_html__('Primary Right Menu', 'knockout'),
        'mobile'        => esc_html__('Mobile Menu', 'knockout'),
        'footer'        => esc_html__('Footer Menu', 'knockout'),
    ));

    // Register menu
    register_nav_menu('menu', 'Menu');
}
add_action('after_setup_theme', 'knockout_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet
 */
function knockout_content_width() {
    $GLOBALS['content_width'] = apply_filters('knockout_content_width', 1200);
}
add_action('after_setup_theme', 'knockout_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function knockout_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('knockout-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue animations CSS
    wp_enqueue_style('knockout-animations', get_template_directory_uri() . '/assets/css/animations.css', array('knockout-style'), '1.0.0');
    
    // Enqueue neon theme CSS
    wp_enqueue_style('knockout-neon-theme', get_template_directory_uri() . '/assets/css/neon-theme.css', array('knockout-style'), '1.0.0');
    
    // Enqueue marquee CSS
    wp_enqueue_style('knockout-marquee', get_template_directory_uri() . '/assets/css/marquee.css', array('knockout-neon-theme'), '1.0.0');
    
    // Enqueue fluid responsive menu CSS
    wp_enqueue_style('knockout-fluid-menu', get_template_directory_uri() . '/assets/css/fluid-responsive-menu.css', array('knockout-style'), '1.0.0');
    
    // Enqueue Google Fonts for futuristic look
    wp_enqueue_style('knockout-fonts', 'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Roboto:wght@300;400;600&display=swap', array(), '1.0.0');
    
    // Enqueue Font Awesome for icons - Updated to latest version with fallback
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    
    // Add fallback Font Awesome loading
    wp_add_inline_script('jquery', '
        jQuery(document).ready(function($) {
            // Check if Font Awesome is loaded
            var checkFA = setInterval(function() {
                if (!window.FontAwesome && $(".fa, .fas, .far, .fab").length > 0) {
                    // Fallback: Load from different CDN
                    $("<link>")
                        .attr({ rel: "stylesheet", type: "text/css", href: "https://use.fontawesome.com/releases/v6.5.1/css/all.css" })
                        .appendTo("head");
                    console.log("Font Awesome fallback loaded");
                    clearInterval(checkFA);
                } else if (window.FontAwesome || $(".fa:first").css("font-family").indexOf("Font Awesome") !== -1) {
                    clearInterval(checkFA);
                }
            }, 1000);
            
            // Clear check after 10 seconds
            setTimeout(function() {
                clearInterval(checkFA);
            }, 10000);
        });
    ');
    
    // Enqueue Services Section CSS
    wp_enqueue_style('knockout-services', get_template_directory_uri() . '/assets/css/experience-section.css', array('knockout-style', 'font-awesome'), '1.0.0');
    

    // Enqueue navigation script for mobile menu
    wp_enqueue_script('knockout-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true);
    // Smooth wheel scrolling (desktop only)
    wp_enqueue_script('knockout-smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '1.0.0', true);
    
    // Enqueue about page styles - load on all pages to ensure availability
    wp_enqueue_style('knockout-about', get_template_directory_uri() . '/assets/css/about.css', array('knockout-style', 'knockout-neon-theme'), '1.0.5');

    // Celebration burst effect (site-wide on load)
    wp_enqueue_style(
        'knockout-burst',
        get_template_directory_uri() . '/assets/css/burst.css',
        array('knockout-style'),
        '1.0.0'
    );
    wp_enqueue_script(
        'knockout-burst',
        get_template_directory_uri() . "/js/burst.js",
        array(),
        '1.0.0',
        true
    );
    
    // Enqueue front page script for homepage interactions
    if (is_front_page()) {
        wp_enqueue_script('knockout-front-page', get_template_directory_uri() . '/js/front-page.js', array(), '1.0.0', true);
        
        // Enqueue hero video script
        wp_enqueue_script('knockout-hero-video', get_template_directory_uri() . '/js/hero-video.js', array(), '1.0.0', true);
        
        // Enqueue neon effects script
        wp_enqueue_script('knockout-neon-effects', get_template_directory_uri() . '/js/neon-effects.js', array(), '1.0.0', true);
        
        // Enqueue marquee effects script
        wp_enqueue_script('knockout-marquee-effects', get_template_directory_uri() . '/js/marquee-effects.js', array(), '1.0.0', true);
        
        
        // Localize script for AJAX and theme data
        wp_localize_script('knockout-front-page', 'knockout_theme', array(
            'template_url' => get_template_directory_uri(),
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('knockout_nonce')
        ));
    }

    // Enqueue comment reply script on singular posts/pages with comments open
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'knockout_scripts');

/**
 * Register widget areas
 */
function knockout_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'knockout'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'knockout'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer', 'knockout'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'knockout'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'knockout_widgets_init');

/**
 * Custom excerpt length
 */
function knockout_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'knockout_excerpt_length', 999);

/**
 * Custom excerpt more string
 */
function knockout_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'knockout_excerpt_more');

/**
 * Add custom classes to body
 */
function knockout_body_classes($classes) {
    // Add a class of hfeed to non-singular pages
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Add a class if we have a custom header image
    if (has_header_image()) {
        $classes[] = 'has-header-image';
    }

    return $classes;
}
add_filter('body_class', 'knockout_body_classes');

/**
 * Pingback header
 */
function knockout_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'knockout_pingback_header');

/**
 * Add custom SVG favicon support
 */
function knockout_add_custom_favicon() {
    $site_icon_id = get_option('site_icon');
    
    // If no site icon is set in customizer, use our default SVG
    if (!$site_icon_id) {
        $svg_favicon_url = get_template_directory_uri() . '/assets/images/title-icon.png';
        
        // Add SVG favicon (modern browsers)
        echo '<link rel="icon" type="image/svg+xml" href="' . esc_url($svg_favicon_url) . '">' . "\n";
        
        // Add fallback PNG favicon for older browsers
        // You can create a PNG version or let browsers handle the SVG
        echo '<link rel="alternate icon" href="' . esc_url($svg_favicon_url) . '">' . "\n";
        
        // Add Apple touch icon (you might want to create a PNG version for this)
        echo '<link rel="apple-touch-icon" href="' . esc_url($svg_favicon_url) . '">' . "\n";
    }
}
add_action('wp_head', 'knockout_add_custom_favicon');

/*Fallback menu functions for navigation*/

// Left menu fallback
function knockout_fallback_left_menu() {
   echo '<ul>';
   echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
   echo '<li><a href="' . esc_url(home_url('/menu/')) . '">Menu</a></li>';
   echo '<li><a href="' . esc_url(home_url('/#events')) . '">Events</a></li>';
   echo '</ul>';
}

// Right menu fallback
function knockout_fallback_right_menu() {
   echo '<ul>';
   echo '<li><a href="' . esc_url(home_url('/#gallery')) . '">Gallery</a></li>';
   echo '<li><a href="' . esc_url(home_url('/#contact')) . '">Contact</a></li>';
   echo '<li><a href="' . esc_url(home_url('/blogs/')) . '">Blogs</a></li>';
   echo '</ul>';
}

// Mobile menu fallback
function knockout_fallback_mobile_menu() {
   echo '<ul>';
   echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
   echo '<li><a href="' . esc_url(home_url('/menu/')) . '">Menu</a></li>';
   echo '<li><a href="' . esc_url(home_url('/#events')) . '">Events</a></li>';
   echo '<li><a href="' . esc_url(home_url('/#gallery')) . '">Gallery</a></li>';
   echo '<li><a href="' . esc_url(home_url('/#contact')) . '">Contact</a></li>';
   echo '<li><a href="' . esc_url(home_url('/blogs/')) . '">Blogs</a></li>';
   echo '</ul>';
}

/**
 * Add theme customizer options for hero section
 */
function knockout_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('knockout_hero', array(
        'title'    => __('Hero Section', 'knockout'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Welcome to KNOCKOUT',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'knockout'),
        'section' => 'knockout_hero',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Experience the Ultimate Bowling Adventure',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'knockout'),
        'section' => 'knockout_hero',
        'type'    => 'text',
    ));

    // Primary Button Text
    $wp_customize->add_setting('hero_primary_text', array(
        'default'           => 'Book Now',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_primary_text', array(
        'label'   => __('Primary Button Text', 'knockout'),
        'section' => 'knockout_hero',
        'type'    => 'text',
    ));

    // Primary Button Link
    $wp_customize->add_setting('hero_primary_link', array(
        'default'           => '#booking',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_primary_link', array(
        'label'   => __('Primary Button Link', 'knockout'),
        'section' => 'knockout_hero',
        'type'    => 'url',
    ));
    
    // Secondary Button Text
    $wp_customize->add_setting('hero_secondary_text', array(
        'default'           => 'View Menu',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_secondary_text', array(
        'label'   => __('Secondary Button Text', 'knockout'),
        'section' => 'knockout_hero',
        'type'    => 'text',
    ));

    // Secondary Button Link
    $wp_customize->add_setting('hero_secondary_link', array(
        'default'           => '#menu',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_secondary_link', array(
        'label'   => __('Secondary Button Link', 'knockout'),
        'section' => 'knockout_hero',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'knockout_customize_register');

/**
 * Update theme customizer for neon theme
 */
function knockout_neon_customize_register($wp_customize) {
    // Check if settings exist before trying to modify them
    $hero_title_setting = $wp_customize->get_setting('hero_title');
    if ($hero_title_setting) {
        $hero_title_setting->default = 'WELCOME TO KNOCKOUT';
    }
    
    $hero_subtitle_setting = $wp_customize->get_setting('hero_subtitle');
    if ($hero_subtitle_setting) {
        $hero_subtitle_setting->default = 'FUTURISTIC SPORTS CAFÉ & E-SPORTS ARENA';
    }
    
    $hero_primary_text_setting = $wp_customize->get_setting('hero_primary_text');
    if ($hero_primary_text_setting) {
        $hero_primary_text_setting->default = 'ENTER ARENA';
    }
    
    $hero_secondary_text_setting = $wp_customize->get_setting('hero_secondary_text');
    if ($hero_secondary_text_setting) {
        $hero_secondary_text_setting->default = 'CYBER MENU';
    }
}
add_action('customize_register', 'knockout_neon_customize_register', 20);
/**

 * Custom URL handling for menu page without WordPress admin
 */

// Add custom rewrite rule for menu page
function knockout_add_menu_rewrite_rule() {
    add_rewrite_rule('^menu/?$', 'index.php?knockout_menu=1', 'top');
}
add_action('init', 'knockout_add_menu_rewrite_rule');

// Add custom query var
function knockout_add_menu_query_var($vars) {
    $vars[] = 'knockout_menu';
    return $vars;
}
add_filter('query_vars', 'knockout_add_menu_query_var');

// Handle the custom template loading
function knockout_menu_template_redirect() {
    if (get_query_var('knockout_menu')) {
        // Set up the global $wp_query to prevent issues
        global $wp_query;
        $wp_query->is_404 = false;
        $wp_query->is_page = true;
        $wp_query->is_singular = true;
        
        // Load the menu template
        if (file_exists(get_template_directory() . '/menu.php')) {
            include(get_template_directory() . '/menu.php');
            exit;
        } elseif (file_exists(get_template_directory() . '/page-menu.php')) {
            include(get_template_directory() . '/page-menu.php');
            exit;
        }
    }
}
add_action('template_redirect', 'knockout_menu_template_redirect');

// Set proper document title for menu page
function knockout_menu_document_title($title) {
    if (get_query_var('knockout_menu')) {
        return 'Menu - ' . get_bloginfo('name');
    }
    return $title;
}
add_filter('document_title_parts', function($title) {
    if (get_query_var('knockout_menu')) {
        $title['title'] = 'Menu';
    }
    return $title;
});

// Flush rewrite rules on theme activation and when needed
function knockout_flush_rewrite_rules() {
    knockout_add_menu_rewrite_rule();
    flush_rewrite_rules();
    
    // Mark that rewrite rules have been flushed
    update_option('knockout_rewrite_rules_flushed', '1.0');
}
add_action('after_switch_theme', 'knockout_flush_rewrite_rules');

// Check if rewrite rules need to be flushed (run once)
function knockout_maybe_flush_rewrite_rules() {
    if (get_option('knockout_rewrite_rules_flushed') !== '1.0') {
        knockout_add_menu_rewrite_rule();
        flush_rewrite_rules();
        update_option('knockout_rewrite_rules_flushed', '1.0');
        
        // Add debug info (can be removed later)
        if (WP_DEBUG) {
            error_log('KnockOut: Rewrite rules flushed successfully');
        }
    }
}
add_action('init', 'knockout_maybe_flush_rewrite_rules');

// Debug function to show current query vars (remove in production)
function knockout_debug_query_vars() {
    if (WP_DEBUG && isset($_GET['debug_knockout'])) {
        global $wp_query;
        echo '<pre style="background: #000; color: #0f0; padding: 20px; font-family: monospace;">';
        echo 'KnockOut Debug Info:\n\n';
        echo 'Current URL: ' . $_SERVER['REQUEST_URI'] . '\n';
        echo 'knockout_menu query var: ' . get_query_var('knockout_menu') . '\n';
        echo 'Rewrite rules flushed: ' . get_option('knockout_rewrite_rules_flushed') . '\n';
        echo '</pre>';
    }
}
add_action('wp_footer', 'knockout_debug_query_vars');

// Also flush on theme deactivation
function knockout_deactivation_flush_rewrite_rules() {
    flush_rewrite_rules();
    delete_option('knockout_rewrite_rules_flushed');
}
add_action('switch_theme', 'knockout_deactivation_flush_rewrite_rules');
