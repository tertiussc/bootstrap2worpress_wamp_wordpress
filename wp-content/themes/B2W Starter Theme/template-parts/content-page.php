<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
        <!-- Custom built -->
        <div class="post-details">
            <span><i class="bi bi-person-fill"></i> <?php the_author(); ?></span>
            <span class=""><time><i class="bi bi-clock"></i><?php the_date(); ?></time></span>
            <span class=""><?php the_category(', '); ?></span>
            <span class=""><i class=" bi bi-tag-fill"></i>Tagged <?php the_tags() ?> </span>
            <div class="post-comments-badge">
                <span class=""><a href="<?php comments_link() ?>"><i class="bi bi-chat-fill"></i>
                        <?php comments_number(0, 1, '%') ?></a></span>
            </div>
            <?php edit_post_link('Edit','<i class="bi bi-pencil-fill"></i>' ); ?>
        </div>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <!-- Insert Img if it exist -->
    <?php if(has_post_thumbnail()) { ?>
    <div class="post-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php } ?>

    <!-- Post Content -->
    <div class="post-excerpt">
        <div class="post-body">
            <?php the_content(); ?>
        </div><!-- post-content -->

    </div>
    <!-- Add post footer -->
    <footer class="entry-footer">
        <?php bootstrap2wordpress_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->