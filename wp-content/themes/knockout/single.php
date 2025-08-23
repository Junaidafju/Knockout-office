<?php
/**
 * The template for displaying all single posts
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            
            <?php get_template_part('template-parts/content', 'post'); ?>
            
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