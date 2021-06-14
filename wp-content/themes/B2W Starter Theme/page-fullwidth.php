<?php
/*
    Template Name: Full-width Template
*/

/*--------------------------------------------------------------
# Veriable Declirations
--------------------------------------------------------------*/
$thumbnail_url  = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

get_header();
?>
<?php if (has_post_thumbnail()){ ?>
<!-- ----------------------------------------------------------
# Feature Image
-------------------------------------------------------------->
<section class="feature-image feature-image-default"
    style="background:url(<?php echo $thumbnail_url; ?>) no-repeat; height: 250px; background-size: cover"
    data-type="background" data-speed="2" style="height: 250px;">
    <h1 class="page-title"><?php the_title();?></h1>
</section>
<?php } else { //Fallback image ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2" style="height: 250px;">
    <h1 class="page-title"><?php the_title();?></h1>
</section>
<?php }?>
<!-- ----------------------------------------------------------
# Contact Form
----------------------------------------------------------- -->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; wp_reset_query();?>
            </section>
        </div>
    </div>
</div>

<?php get_footer();?>