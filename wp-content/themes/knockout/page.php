<?php
/**
 * The template for displaying all pages
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
                <header class="page-header">
                    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                </header>

                <div class="page-content-wrapper">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'knockout'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
            
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>