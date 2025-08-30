<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if (is_front_page()) : ?>
            <!-- Hero Section -->
            <?php get_template_part('template-parts/hero'); ?>
            
            <!-- Services Section -->
            <?php get_template_part('template-parts/services'); ?>
            
            <!-- Events Section -->
            <?php get_template_part('template-parts/events'); ?>
            
            
            
        <?php else : ?>
            
            <?php if (have_posts()) : ?>
                
                <?php if (is_home() && !is_front_page()) : ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="posts-container">
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php get_template_part('template-parts/content', 'post'); ?>
                    <?php endwhile; ?>
                </div>

                <?php
                // Pagination
                the_posts_navigation(array(
                    'prev_text' => __('&larr; Older posts', 'knockout'),
                    'next_text' => __('Newer posts &rarr;', 'knockout'),
                ));
                ?>

            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>