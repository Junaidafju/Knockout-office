<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package KnockOut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="https://res.cloudinary.com/dcvn7lbh6/image/upload/v1755928992/knockout-web-icon_zsajfv.png" type="image/svg+xml">

    <?php wp_head(); ?>
    <!-- Lottie Animation Script -->
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
    
    <?php 
    // Include diagnostic script for troubleshooting
    include get_template_directory() . '/diagnostic.php';
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'knockout'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-content">
                <!-- Left Navigation -->
                <nav id="left-navigation" class="left-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-left',
                            'menu_id'        => 'primary-left-menu',
                            'container'      => false,
                            'fallback_cb'    => 'knockout_fallback_left_menu',
                        )
                    );
                    ?>
                </nav>

                <!-- Center Logo -->
                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                        <img src="https://res.cloudinary.com/dcvn7lbh6/image/upload/v1754388309/knockout-bowling-logo_g0falz.svg"
                             alt="KNOCKOUT - Kolkata's Ultimate Bowling Destination"
                             class="knockout-logo"
                             width="250" 
                             height="100">
                    </a>
                </div><!-- .site-branding -->

                <!-- Right Navigation -->
                <nav id="right-navigation" class="right-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-right',
                            'menu_id'        => 'primary-right-menu',
                            'container'      => false,
                            'fallback_cb'    => 'knockout_fallback_right_menu',
                        )
                    );
                    ?>
                </nav>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div><!-- .header-content -->

            <!-- Mobile Navigation -->
            <nav id="mobile-navigation" class="mobile-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'mobile',
                        'menu_id'        => 'mobile-menu',
                        'container'      => false,
                        'fallback_cb'    => 'knockout_fallback_mobile_menu',
                    )
                );
                ?>
            </nav>
        </div><!-- .container -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">