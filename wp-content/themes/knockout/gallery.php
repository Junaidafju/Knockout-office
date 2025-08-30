<?php
/**
 * Template Name: Gallery
 * Description: Standalone Gallery page rendering the gallery template part
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php get_template_part('template-parts/gallery'); ?>
    </div>
</main>

<?php get_footer(); ?>

