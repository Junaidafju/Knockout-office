<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package KnockOut
 */

?>

<section class="no-results not-found">
    <div class="page-content">
        <div class="no-results-icon">
            🎳
        </div>
        
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <h1 class="page-title"><?php esc_html_e('Ready to publish your first post?', 'knockout'); ?></h1>
            <p><?php
                printf(
                    wp_kses(
                        __('Welcome to your new WordPress site! <a href="%1$s">Get started by adding your first post</a>.', 'knockout'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?></p>
                
        <?php elseif (is_search()) : ?>
            <h1 class="page-title"><?php esc_html_e('Nothing found', 'knockout'); ?></h1>
            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'knockout'); ?></p>
            
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
            <div class="search-suggestions">
                <h3>Search Suggestions:</h3>
                <ul>
                    <li>Check your spelling</li>
                    <li>Try different keywords</li>
                    <li>Try more general keywords</li>
                    <li>Try fewer keywords</li>
                </ul>
            </div>
            
        <?php else : ?>
            <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'knockout'); ?></h1>
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try searching or check out our popular content below?', 'knockout'); ?></p>
            
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
            <div class="helpful-links">
                <h3>Try these instead:</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a></li>
                    <li><a href="#menu">Our Menu</a></li>
                    <li><a href="#events">Upcoming Events</a></li>
                    <li><a href="#booking">Book a Lane</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>