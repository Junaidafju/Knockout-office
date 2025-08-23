<?php
/**
 * The template for displaying search results pages
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>
            
            <header class="search-header">
                <h1 class="search-title">
                    <?php
                    printf(
                        esc_html__('Search Results for: %s', 'knockout'),
                        '<span class="search-term">' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>
                <p class="search-count">
                    <?php
                    global $wp_query;
                    printf(
                        esc_html(_n('Found %d result', 'Found %d results', $wp_query->found_posts, 'knockout')),
                        $wp_query->found_posts
                    );
                    ?>
                </p>
            </header>

            <div class="posts-container search-results">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('template-parts/content', 'post'); ?>
                <?php endwhile; ?>
            </div>

            <?php
            the_posts_navigation(array(
                'prev_text' => __('&larr; Older results', 'knockout'),
                'next_text' => __('Newer results &rarr;', 'knockout'),
            ));
            ?>

        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>