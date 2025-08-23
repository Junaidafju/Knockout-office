<?php
/**
 * Template part for displaying posts
 *
 * @package KnockOut
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php the_post_thumbnail('medium_large', array('class' => 'post-image', 'loading' => 'lazy')); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="post-content">
        <header class="post-header">
            <div class="post-meta">
                <span class="post-date">
                    <i class="icon-calendar"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span class="post-author">
                    <i class="icon-user"></i>
                    by <?php the_author(); ?>
                </span>
                <?php if (has_category()) : ?>
                    <span class="post-category">
                        <i class="icon-folder"></i>
                        <?php the_category(', '); ?>
                    </span>
                <?php endif; ?>
            </div>
            
            <?php
            if (is_singular()) :
                the_title('<h1 class="post-title">', '</h1>');
            else :
                the_title('<h2 class="post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;
            ?>
        </header>

        <div class="post-excerpt">
            <?php
            if (is_singular()) {
                the_content();
                
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'knockout'),
                    'after'  => '</div>',
                ));
            } else {
                the_excerpt();
            }
            ?>
        </div>

        <?php if (!is_singular()) : ?>
            <footer class="post-footer">
                <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more-btn">
                    Read More <i class="icon-arrow-right"></i>
                </a>
                
                <?php if (has_tag()) : ?>
                    <div class="post-tags">
                        <?php the_tags('<span class="tag-label">Tags:</span> ', ', ', ''); ?>
                    </div>
                <?php endif; ?>
            </footer>
        <?php else : ?>
            <footer class="post-footer">
                <?php if (has_tag()) : ?>
                    <div class="post-tags">
                        <?php the_tags('<span class="tag-label">Tags:</span> ', ', ', ''); ?>
                    </div>
                <?php endif; ?>
                
                <div class="post-navigation">
                    <?php
                    the_post_navigation(array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'knockout') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'knockout') . '</span> <span class="nav-title">%title</span>',
                    ));
                    ?>
                </div>
            </footer>
        <?php endif; ?>
    </div>
</article>