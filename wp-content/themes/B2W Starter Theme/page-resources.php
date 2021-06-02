<?php
/*
    Template Name: Resources Page
*/
// Variables
$resource_image         = get_field('resource_image');
$resource_url           = get_field('resource_url');
$button_text            = get_field('button_text');

// Import header
get_header();

?>
<!-- === Page Content === -->
<!-- Check and add feature image -->
<?php if(has_post_thumbnail()){ ?>
<!-- === Resources Feature === -->
<section class="feature-image" data-type="background" data-speed="2"
    style="background: url('<?php echo $thumbnail_url ?>') no-repeat;background-size: cover; height: 250px">
    <h1 class="page-title"><?php echo the_title() ?></h1>
</section>

<!-- Fallback Image -->
<?php } else { ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2" style="height: 250px;">
    <h1 class="page-title"><?php echo the_title() ?></h1>
</section>
<?php } ?>

<!-- === Main context === -->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <div class="lead"><?php echo $resource_content; ?></div>
                <hr>
                <div class="resource-row clearfix">
                    <?php wp_reset_query(); $loop = new WP_Query(array('post_type' => 'resource_tools', 'orderby' => 'post_id', 'order' =>'ASC')); ?>

                    <?php while ($loop-> have_posts()) : $loop->the_post(); ?>
                    <?php
                    $resource_image         = get_field('resource_image');
                    $resource_url           = get_field('resource_url');
                    $button_text            = get_field('button_text');
                    ?>
                    <!-- Html loop content block -->
                    <div class="resource">
                        <img src="<?php echo $resource_image['url'] ?>" alt="">
                        <h3><a href="<?php echo $resource_url ?>"><?php the_title();?></a></h3>
                        <p><?php the_content();?></p>
                        <?php
                            if(!empty($button_text)): ?>
                        <a class="btn btn-success" href="<?php echo $resource_url ?>"><?php echo $button_text ?></a>
                        <?php endif; ?>
                    </div>

                    <?php endwhile; wp_reset_query();?>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Import footer -->
<?php get_footer(); ?>