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
    
    // Enqueue Google Fonts (Orbitron, Roboto, Dancing Script)
    wp_enqueue_style(
        'knockout-fonts',
        'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&family=Orbitron:wght@400;700;900&family=Roboto:wght@300;400;600&display=swap',
        array(),
        '1.0.1'
    );
    
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

    // Gallery page styles
    wp_enqueue_style('knockout-gallery', get_template_directory_uri() . '/assets/css/gallery.css', array('knockout-style'), '1.0.0');

    // Contact page styles
    wp_enqueue_style('knockout-contact', get_template_directory_uri() . '/assets/css/contact.css', array('knockout-style'), '1.0.0');

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

    // Enqueue footer CSS with bubble effects
    wp_enqueue_style('knockout-footer', get_template_directory_uri() . '/assets/css/footer.css', array('knockout-style'), '1.0.0');
    
    // Enqueue loader CSS
    wp_enqueue_style('knockout-loader', get_template_directory_uri() . '/assets/css/loader.css', array('knockout-style'), '1.0.0');
    
    // Enqueue page loader JavaScript
    wp_enqueue_script('knockout-page-loader', get_template_directory_uri() . '/js/page-loader.js', array(), '1.0.0', false);
    
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
   echo '<li><a href="' . esc_url(home_url('/gallery/')) . '">Gallery</a></li>';
   echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
   echo '<li><a href="' . esc_url(home_url('/blogs/')) . '">Blogs</a></li>';
   echo '</ul>';
}

// Mobile menu fallback
function knockout_fallback_mobile_menu() {
   echo '<ul>';
   echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
   echo '<li><a href="' . esc_url(home_url('/menu/')) . '">Menu</a></li>';
   echo '<li><a href="' . esc_url(home_url('/#events')) . '">Events</a></li>';
   echo '<li><a href="' . esc_url(home_url('/gallery/')) . '">Gallery</a></li>';
   echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
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
    // Add gallery rewrite
    add_rewrite_rule('^gallery/?$', 'index.php?knockout_gallery=1', 'top');
    // Add contact rewrite
    add_rewrite_rule('^contact/?$', 'index.php?knockout_contact=1', 'top');
}
add_action('init', 'knockout_add_menu_rewrite_rule');

// Add custom query var
function knockout_add_menu_query_var($vars) {
    $vars[] = 'knockout_menu';
    $vars[] = 'knockout_gallery';
    $vars[] = 'knockout_contact';
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
    if (get_query_var('knockout_gallery')) {
        // Serve the standalone gallery template
        if (file_exists(get_template_directory() . '/gallery.php')) {
            include(get_template_directory() . '/gallery.php');
            exit;
        }
    }
    if (get_query_var('knockout_contact')) {
        if (file_exists(get_template_directory() . '/contact.php')) {
            include(get_template_directory() . '/contact.php');
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
    if (get_query_var('knockout_gallery')) {
        return 'Gallery - ' . get_bloginfo('name');
    }
    if (get_query_var('knockout_contact')) {
        return 'Contact - ' . get_bloginfo('name');
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
    // bump version to force flush when new rules (gallery) added
    if (get_option('knockout_rewrite_rules_flushed') !== '1.2') {
        knockout_add_menu_rewrite_rule();
        flush_rewrite_rules();
        update_option('knockout_rewrite_rules_flushed', '1.2');
        
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

/**
 * Contact Form Email Configuration
 */

// Load SMTP configuration if file exists
function knockout_load_smtp_config() {
    $smtp_config_file = get_template_directory() . '/smtp-config.php';
    if (file_exists($smtp_config_file)) {
        require_once($smtp_config_file);
    }
}
add_action('after_setup_theme', 'knockout_load_smtp_config', 5);

// Configure SMTP for WordPress emails
function knockout_configure_smtp() {
    // Only configure SMTP if we're not in a local environment without SMTP
    // In production, you'll want to use proper SMTP settings
    
    // For localhost development with Gmail SMTP (requires app password)
    if (defined('SMTP_HOST') && SMTP_HOST) {
        add_action('phpmailer_init', 'knockout_configure_phpmailer');
    }
}
add_action('init', 'knockout_configure_smtp');

// PHPMailer SMTP configuration
function knockout_configure_phpmailer($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = defined('SMTP_HOST') ? SMTP_HOST : 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = defined('SMTP_PORT') ? SMTP_PORT : 587;
    $phpmailer->SMTPSecure = defined('SMTP_SECURE') ? SMTP_SECURE : 'tls';
    $phpmailer->Username = defined('SMTP_USERNAME') ? SMTP_USERNAME : '';
    $phpmailer->Password = defined('SMTP_PASSWORD') ? SMTP_PASSWORD : '';
    
    // Set from email and name
    $phpmailer->From = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : get_option('admin_email');
    $phpmailer->FromName = defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : get_option('blogname');
    
    // Enable debugging for localhost
    if (defined('WP_DEBUG') && WP_DEBUG) {
        $phpmailer->SMTPDebug = 2;
        $phpmailer->Debugoutput = 'error_log';
    }
}

// Handle contact form submission globally
function knockout_handle_contact_form() {
    // Debug logging
    error_log('knockout_handle_contact_form() called');
    error_log('REQUEST_METHOD: ' . $_SERVER['REQUEST_METHOD']);
    error_log('POST data keys: ' . implode(', ', array_keys($_POST)));
    
    // Check if this is a contact form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_name'])) {
        error_log('Contact form submission detected');
        
        // Verify nonce for security
        if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'knockout_contact_form')) {
            return array('error' => 'Security verification failed. Please try again.');
        }
        
        // Rate limiting - check if user has submitted recently
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $rate_limit_key = 'knockout_contact_' . md5($user_ip);
        $last_submission = get_transient($rate_limit_key);
        
        // More reasonable rate limiting:
        // - For localhost/development: 30 seconds
        // - For production: 60 seconds per IP
        $rate_limit_time = (defined('WP_DEBUG') && WP_DEBUG) ? 30 : 60;
        
        if ($last_submission) {
            $time_remaining = $rate_limit_time - (time() - $last_submission);
            if ($time_remaining > 0) {
                return array('error' => "Please wait {$time_remaining} seconds before submitting another message.");
            }
        }
        
        // Get and sanitize form data
        $name = sanitize_text_field($_POST['contact_name']);
        $email = sanitize_email($_POST['contact_email']);
        $phone = sanitize_text_field($_POST['contact_phone']);
        $subject = sanitize_text_field($_POST['contact_subject']);
        $message = sanitize_textarea_field($_POST['contact_message']);
        $newsletter = isset($_POST['contact_newsletter']) ? 'Yes' : 'No';
        
        // Validation
        if (empty($name) || empty($email) || empty($message)) {
            return array('error' => 'Please fill in all required fields.');
        }
        
        if (!is_email($email)) {
            return array('error' => 'Please enter a valid email address.');
        }
        
        // Prepare email content - configurable recipient
        $to = get_option('knockout_contact_email', 'junaidafju@gmail.com'); // Default to business email
        $email_subject = 'New Contact Form Submission from ' . get_bloginfo('name');
        
        // Log email sending attempt
        error_log('Sending contact form email to: ' . $to);
        error_log('From user: ' . $email . ' (' . $name . ')');
        error_log('Subject: ' . $email_subject);
        
        // Create HTML email message
        $email_message = knockout_get_contact_email_template(array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
            'newsletter' => $newsletter,
            'submission_time' => current_time('mysql'),
            'user_ip' => $user_ip
        ));
        
        // Set email headers
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
            'Reply-To: ' . $name . ' <' . $email . '>'
        );
        
        // Send the email
        $email_sent = wp_mail($to, $email_subject, $email_message, $headers);
        
        if ($email_sent) {
            // Set rate limiting with the same duration as the check
            $rate_limit_duration = (defined('WP_DEBUG') && WP_DEBUG) ? 30 : 60;
            set_transient($rate_limit_key, time(), $rate_limit_duration);
            
            // Send auto-reply to user
            knockout_send_contact_auto_reply($email, $name);
            
            error_log('Contact form email sent successfully to: ' . $to);
            return array('success' => 'Thank you! Your message has been sent successfully. We will get back to you soon.');
        } else {
            error_log('Failed to send contact form email');
            return array('error' => 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
    
    return null;
}

// Process contact form early in WordPress lifecycle
function knockout_process_contact_form_early() {
    // Only process on contact page
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_name']) && 
        (strpos($_SERVER['REQUEST_URI'], '/contact/') !== false || get_query_var('knockout_contact'))) {
        
        $result = knockout_handle_contact_form();
        
        if ($result) {
            // Store result in global for template to access
            global $knockout_contact_result;
            $knockout_contact_result = $result;
        }
    }
}
add_action('wp', 'knockout_process_contact_form_early');

// Get contact form result for template
function knockout_get_contact_form_result() {
    global $knockout_contact_result;
    return $knockout_contact_result;
}

// Get contact email template
function knockout_get_contact_email_template($data) {
    $template = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px; background: #f4f4f4; }
            .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
            .header { background: linear-gradient(135deg, #b0d136, #00d4ff); padding: 20px; text-align: center; color: #fff; border-radius: 8px; margin-bottom: 30px; }
            .field { margin-bottom: 15px; padding: 10px; background: #f9f9f9; border-left: 4px solid #b0d136; }
            .field strong { color: #333; }
            .footer { margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🎳 New Contact Form Submission</h1>
                <p>KnockOut Sports Café</p>
            </div>
            
            <div class="field">
                <strong>Name:</strong> ' . esc_html($data['name']) . '
            </div>
            
            <div class="field">
                <strong>Email:</strong> <a href="mailto:' . esc_attr($data['email']) . '">' . esc_html($data['email']) . '</a>
            </div>
            
            ' . (!empty($data['phone']) ? '<div class="field"><strong>Phone:</strong> ' . esc_html($data['phone']) . '</div>' : '') . '
            
            ' . (!empty($data['subject']) ? '<div class="field"><strong>Subject:</strong> ' . esc_html(ucfirst($data['subject'])) . '</div>' : '') . '
            
            <div class="field">
                <strong>Message:</strong><br>
                ' . nl2br(esc_html($data['message'])) . '
            </div>
            
            <div class="field">
                <strong>Newsletter Subscription:</strong> ' . esc_html($data['newsletter']) . '
            </div>
            
            <div class="footer">
                <p><strong>Submission Details:</strong></p>
                <p>Time: ' . esc_html($data['submission_time']) . '<br>
                IP Address: ' . esc_html($data['user_ip']) . '<br>
                Website: <a href="' . esc_url(home_url()) . '">' . esc_html(get_bloginfo('name')) . '</a></p>
            </div>
        </div>
    </body>
    </html>';
    
    return $template;
}

// Send auto-reply to the user
function knockout_send_contact_auto_reply($user_email, $user_name) {
    $subject = 'Thank you for contacting ' . get_bloginfo('name');
    
    $message = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You for Contacting Us</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px; background: #f4f4f4; }
            .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
            .header { background: linear-gradient(135deg, #b0d136, #00d4ff); padding: 20px; text-align: center; color: #fff; border-radius: 8px; margin-bottom: 30px; }
            .content { margin-bottom: 20px; }
            .footer { margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #666; text-align: center; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🎳 Thank You, ' . esc_html($user_name) . '!</h1>
                <p>KnockOut Sports Café</p>
            </div>
            
            <div class="content">
                <p>Hi ' . esc_html($user_name) . ',</p>
                
                <p>Thank you for reaching out to us! We have successfully received your message and our team will get back to you within 24 hours.</p>
                
                <p>In the meantime, feel free to:</p>
                <ul>
                    <li>🎳 Book a lane for bowling</li>
                    <li>🍕 Check out our delicious menu</li>
                    <li>🎮 Explore our e-sports arena</li>
                    <li>📸 View our gallery</li>
                </ul>
                
                <p>We look forward to seeing you at KnockOut!</p>
                
                <p>Best regards,<br>
                The KnockOut Team</p>
            </div>
            
            <div class="footer">
                <p>📍 RDB Cinemas, Salt Lake, Sector 5, Kolkata, West Bengal (700135)<br>
                📞 (555) 123-BOWL | 📧 junaidafju@gmail.com</p>
                
                <p><em>This is an automated message. Please do not reply to this email.</em></p>
            </div>
        </div>
    </body>
    </html>';
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <junaidafju@gmail.com>'
    );
    
    wp_mail($user_email, $subject, $message, $headers);
}

// Clear rate limiting for testing
function knockout_clear_rate_limit() {
    if (isset($_GET['clear_rate_limit']) && $_GET['clear_rate_limit'] === 'knockout') {
        global $wpdb;
        
        // Delete all contact rate limit transients
        $wpdb->query(
            "DELETE FROM {$wpdb->options} 
             WHERE option_name LIKE '_transient_knockout_contact_%' 
             OR option_name LIKE '_transient_timeout_knockout_contact_%'"
        );
        
        wp_die('✅ Rate limiting cleared! You can now test the contact form again. <a href="' . home_url('/contact/') . '">← Go to Contact Form</a>');
    }
}
add_action('init', 'knockout_clear_rate_limit');
// To clear rate limit: visit yoursite.com/?clear_rate_limit=knockout

// Set up contact form email configuration
function knockout_setup_contact_email() {
    // Set default contact email if not already set
    if (!get_option('knockout_contact_email')) {
        update_option('knockout_contact_email', 'junaidafju@gmail.com');
    }
}
add_action('after_switch_theme', 'knockout_setup_contact_email');

// Add function to change contact email address
function knockout_set_contact_email($email) {
    if (is_email($email)) {
        update_option('knockout_contact_email', $email);
        return true;
    }
    return false;
}

// Contact email configuration via URL (for easy setup)
function knockout_config_contact_email() {
    if (isset($_GET['set_contact_email']) && isset($_GET['email'])) {
        $new_email = sanitize_email($_GET['email']);
        if (knockout_set_contact_email($new_email)) {
            wp_die('✅ Contact email updated to: ' . $new_email . ' <a href="' . home_url('/contact/') . '">← Test Contact Form</a>');
        } else {
            wp_die('❌ Invalid email address provided. <a href="' . home_url('/contact/') . '">← Go Back</a>');
        }
    }
}
add_action('init', 'knockout_config_contact_email');
// To change contact email: visit yoursite.com/?set_contact_email=1&email=newemail@example.com
