<?php
/**
 * The template for displaying comments
 *
 * @package KnockOut
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $knockout_comment_count = get_comments_number();
            if ('1' === $knockout_comment_count) {
                printf(
                    esc_html__('One comment on &ldquo;%1$s&rdquo;', 'knockout'),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            } else {
                printf(
                    esc_html(_nx(
                        '%1$s comment on &ldquo;%2$s&rdquo;',
                        '%1$s comments on &ldquo;%2$s&rdquo;',
                        $knockout_comment_count,
                        'comments title',
                        'knockout'
                    )),
                    number_format_i18n($knockout_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'callback'   => 'knockout_comment_callback',
                )
            );
            ?>
        </ol>

        <?php
        the_comments_navigation(array(
            'prev_text' => __('&larr; Older Comments', 'knockout'),
            'next_text' => __('Newer Comments &rarr;', 'knockout'),
        ));
        ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'knockout'); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply'          => __('Leave a Comment', 'knockout'),
        'title_reply_to'       => __('Leave a Reply to %s', 'knockout'),
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h3>',
        'comment_notes_before' => '<p class="comment-notes">' . __('Your email address will not be published. Required fields are marked *', 'knockout') . '</p>',
        'comment_field'        => '<div class="comment-form-comment"><label for="comment">' . __('Comment *', 'knockout') . '</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea></div>',
        'fields'               => array(
            'author' => '<div class="comment-form-author"><label for="author">' . __('Name *', 'knockout') . '</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245" required /></div>',
            'email'  => '<div class="comment-form-email"><label for="email">' . __('Email *', 'knockout') . '</label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" required /></div>',
            'url'    => '<div class="comment-form-url"><label for="url">' . __('Website', 'knockout') . '</label><input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" /></div>',
        ),
        'class_submit'         => 'btn btn-primary',
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
        'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
    ));
    ?>
</div>

<style>
.comments-area {
    margin-top: 4rem;
    padding: 3rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
}

.comments-title {
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 2rem;
    text-align: center;
}

.comment-list {
    list-style: none;
    padding: 0;
    margin-bottom: 3rem;
}

.comment {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.comment:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.comment-author {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.comment-author .avatar {
    border-radius: 50%;
    border: 3px solid #FFD700;
}

.comment-metadata {
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 1rem;
}

.comment-metadata a {
    color: #6c757d;
    text-decoration: none;
}

.comment-metadata a:hover {
    color: #FFD700;
}

.comment-content {
    line-height: 1.6;
    margin-bottom: 1rem;
}

.reply {
    text-align: right;
}

.comment-reply-link {
    background: linear-gradient(45deg, #FFD700, #FFA500);
    color: #2c3e50;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.comment-reply-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,215,0,0.3);
}

.comment-form {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.comment-reply-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1.5rem;
    text-align: center;
}

.comment-notes {
    color: #6c757d;
    font-size: 0.9rem;
    margin-bottom: 2rem;
    text-align: center;
}

.comment-form-author,
.comment-form-email,
.comment-form-url,
.comment-form-comment {
    margin-bottom: 1.5rem;
}

.comment-form label {
    display: block;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"],
.comment-form textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.comment-form input:focus,
.comment-form textarea:focus {
    outline: none;
    border-color: #FFD700;
    box-shadow: 0 0 0 3px rgba(255,215,0,0.1);
}

.form-submit {
    text-align: center;
    margin-top: 2rem;
}

.no-comments {
    text-align: center;
    color: #6c757d;
    font-style: italic;
    padding: 2rem;
    background: rgba(255,255,255,0.5);
    border-radius: 10px;
}

@media (max-width: 768px) {
    .comments-area {
        padding: 2rem;
    }
    
    .comment {
        padding: 1.5rem;
    }
    
    .comment-form {
        padding: 2rem;
    }
    
    .comments-title {
        font-size: 1.5rem;
    }
}
</style>

<?php
/**
 * Custom comment callback function
 */
function knockout_comment_callback($comment, $args, $depth) {
    if ('div' === $args['style']) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag; ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?> id="comment-<?php comment_ID(); ?>">
    <?php if ('div' != $args['style']) : ?>
        <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
    <?php endif; ?>
    
    <div class="comment-author vcard">
        <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
        <div class="comment-author-info">
            <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()); ?>
            <div class="comment-metadata">
                <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                    <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()); ?>
                </a>
                <?php edit_comment_link(__('(Edit)'), '  ', ''); ?>
            </div>
        </div>
    </div>
    
    <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></em>
        <br />
    <?php endif; ?>

    <div class="comment-content">
        <?php comment_text(); ?>
    </div>

    <div class="reply">
        <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
    </div>
    
    <?php if ('div' != $args['style']) : ?>
        </div>
    <?php endif; ?>
    <?php
}
?>