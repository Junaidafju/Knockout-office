<?php
/**
 * Template Name: About Page
 *
 * @package KnockOut
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/about');
    endwhile;
    ?>
</main>

<?php
get_footer();
