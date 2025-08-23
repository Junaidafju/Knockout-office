<?php
/**
 * The template for displaying archive pages
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>
            
            <header class="archive-header">
                <?php
                the_archive_title('<h1 class="archive-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header>

            <div class="posts-container archive-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('template-parts/content', 'post'); ?>
                <?php endwhile; ?>
            </div>

            <?php
            the_posts_navigation(array(
                'prev_text' => __('&larr; Older posts', 'knockout'),
                'next_text' => __('Newer posts &rarr;', 'knockout'),
            ));
            ?>

        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>