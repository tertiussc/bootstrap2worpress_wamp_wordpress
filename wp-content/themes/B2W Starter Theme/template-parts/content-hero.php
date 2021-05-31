<?php
// Homepage Custom Fields
$prelaunch_price = get_post_meta($post->ID, 'prelaunch_price', true);
$launch_price = get_post_meta($post->ID, 'launch_price', true);
$final_price = get_post_meta($post->ID, 'final_price', true);
$course_url = get_post_meta($post->ID, 'course_url', true);
$button_text = get_post_meta($post->ID, 'button_text', true);


?>

<!-- Hero section -->
<section id="hero" data-speed="5" data-type="background">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png"
                        alt="">
                </div>
                <div class="col-md-7 hero-text">
                    <h1><?php bloginfo('name') ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>
                    <div class="price-timeline">
                        <div class="price active align-items-center">
                            <h4>Pre-launch Price <small>Ends soon!</small></h4>
                            <span class=""><?php echo $prelaunch_price ?></span>
                        </div>
                        <div class="price">
                            <h4>Launch Price <small>Coming soon!</small></h4>
                            <span><?php echo $launch_price ?></span>
                        </div>
                        <div class="price">
                            <h4>Final Price <small>Coming soon!</small></h4>
                            <span><?php echo $final_price ?></span>
                        </div>
                    </div>
                    <p><a href="<?php echo $course_url ?>" class="btn btn-lg btn-danger"><?php echo $button_text ?></a>
                    </p>
                </div>
            </div>
        </div>
    </article>
</section>