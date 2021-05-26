<?php
/*
    Template Name: Home Page
*/

// Homepage Custom Fields
$prelaunch_price                = get_post_meta($post->ID, 'prelaunch_price', true);
$launch_price                   = get_post_meta($post->ID, 'launch_price', true);
$final_price                    = get_post_meta($post->ID, 'final_price', true);
$course_url                     = get_post_meta($post->ID, 'course_url', true);
$button_text                    = get_post_meta($post->ID, 'button_text', true);
$optin_text                     = get_post_meta($post->ID, 'optin_text', true);
$optin_button_text              = get_post_meta($post->ID, 'optin_button_text', true);

// Advanced custom fields
$income_feature_image           = get_field('income_feature_image'); //this is an array can be used like a object
$income_feature_image_url       = get_field('income_feature_image')['url'];
$income_section_title           = get_field('income_section_title');
$income_section_description     = get_field('income_section_description');
$reason_1_title                 = get_field('reason_1_title');
$reason_1_description           = get_field('reason_1_description');
$reason_2_title                 = get_field('reason_2_title');
$reason_2_description           = get_field('reason_2_description');

$who_title                      = get_field('who_title');
$who_image                      = get_field('who_image');
$who_body                       = get_field('who_body');

$course_features_image          = get_field('course_features_image');
$course_features_title          = get_field('course_features_title');
$course_features_body           = get_field('course_features_body');

$project_feature_title          = get_field('project_feature_title');
$project_feature_body           = get_field('project_feature_body');

$video_link_url                 = get_field('video_link_url');
$video_section_title            = get_field('video_section_title');

$instructor_section_title       = get_field('instructor_section_title');
$instructor_name                = get_field('instructor_name');
$instructor_bio_excerpt         = get_field('instructor_bio_excerpt');
$instructor_bio                 = get_field('instructor_bio');
$instructor_twitter_name        = get_field('instructor_twitter_name');
$instructor_facebook_name       = get_field('instructor_facebook_name');
$instructor_google_plus_name    = get_field('instructor_google_plus_name');
$num_students                   = get_field('num_students');
$num_reviews                    = get_field('num_reviews');
$num_courses                    = get_field('num_courses');

//  End of variables
get_header();
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

<!-- Opt in section -->
<section id="optin">
    <div class="container">
        <div class="row mt-2">
            <div class="col-sm-8">
                <p class="lead"><?php echo $optin_text ?></p>
            </div>
            <div class="col sm 4">
                <button type="button" class="btn btn-success btn-lg btn-block" data-bs-toggle="modal"
                    data-bs-target="#myModal"><?php echo $optin_button_text; ?></button>
            </div>
        </div>
    </div>
</section>

<!-- Boost your income -->
<section id="boost-your-income" class="section">
    <div class="container">
        <div class="section-header text-center">
            <?php
                    if(!empty($income_feature_image)) :  ?>
            <img src="<?php echo $income_feature_image['url'] ?>" alt="<?php echo $income_feature_image['alt'] ?>">
            <?php endif; ?>
            <h2><?php echo $income_section_title ?></h2>
            <p><?php echo $income_section_description ?></p>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h3><?php echo $reason_1_title ?></h3>
                    <p><?php echo $reason_1_description ?></p>
                </div>
                <div class="col-sm-6 text-center">
                    <h3><?php echo $reason_2_title ?></h3>
                    <p><?php echo $reason_2_description ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- who benefits -->
<section id="who benefits" class="bg-white section">
    <div class="container">
        <div class="section-header">
            <?php if(!empty($who_image)) :  ?>
            <img src="<?php echo $who_image['url'] ?>" alt="<?php echo $who_image['alt'] ?>">
            <?php endif; ?>

            <h2><?php echo $who_title ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <?php echo $who_body; ?>
            </div>
        </div>
    </div>
</section>

<!-- Course Features -->
<section id="course-features" class="section">
    <div class="container">
        <div class="section-header">
            <!-- feature section image -->
            <?php if(!empty($course_features_image)) :  ?>
            <img src="<?php echo $course_features_image['url'] ?>" alt="<?php echo $course_features_image['alt'] ?>">
            <?php endif; ?>
            <!-- Feature section title -->
            <h2><?php echo $course_features_title ?></h2>
            <!-- Feature section body (optional) -->
            <?php if(!empty($course_features_body)) :  ?>
            <p class="lead"><?php echo $course_features_body ?></p>
            <?php endif; ?>
        </div>
        <div class="row">
            <!-- Feature section sprite icons -->
            <!-- Create Loop -->
            <?php $loop = new WP_Query(array('post_type' => 'course_feature', 'order_by' => 'post_id', 'order' => 'ASC')); ?>
            <!-- loop through the posts -->
            <?php while($loop -> have_posts()) : $loop -> the_post(); ?>

            <div class="col-sm-2">
                <i class="<?php the_field('course_features_icon') ?>"></i>
                <h4><?php the_title(); ?></h4>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- === Project Features === -->
<section id="project-features" class="section">
    <div class="container text-center">
        <h2><?php echo $project_feature_title ?></h2>
        <p class="lead"><?php echo $project_feature_body ?></p>
        <div class="row">
            <!-- Retrieve the array and assign to $loop variable  -->
            <?php $loop = new WP_Query(array ('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
            <!-- Loop through the array -->
            <?php while($loop -> have_posts()): $loop -> the_post(); ?>
            <!-- Use the array -->
            <div class="col-sm-4 text-center">
                <!-- Retrieve the img -->
                <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

</section>

<!-- Video Featurette -->
<section id="featurette" class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center"><?php echo $video_section_title ?></h2>
                <iframe width="100%" height="415" src="<?php echo $video_link_url; ?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Instructor -->
<section id="instructor" class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <h2><?php echo $instructor_section_title ?><small class="text-muted h3">
                        <?php echo $instructor_name ?></small></h2>
                <div class="social-links mb-3">
                    <?php if(!empty($instructor_twitter_name)): ?>
                    <a href="http://twitter.com/<?php echo $instructor_twitter_name ?>" class="badge social twitter"><i
                            class="bi bi-twitter text-dark"></i></a>
                    <?php endif;?>
                    <?php if(!empty($instructor_twitter_name)): ?>
                    <a href="http://facebook.com/<?php echo $instructor_facebook_name ?>"
                        class="badge social twitter"><i class="bi bi-facebook text-dark"></i></a>
                    <?php endif;?>
                    <?php if(!empty($instructor_twitter_name)): ?>
                    <a href="http://plus.google.com/<?php echo $instructor_google_plus_name ?>"
                        class="badge social twitter"><i class="bi bi-google text-dark"></i></a>
                    <?php endif;?>

                </div>
                <p class="lead"><?php echo $instructor_bio_excerpt ?></p>
                <p><?php echo $instructor_bio ?></p>
                <hr>
                <h3>The Numbers <small class="text-muted">Don't lie</small></h3>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_students ?><span>Students</span>
                            </div>
                            <div class="num-content">
                                <?php echo $num_reviews ?> <span>Reviews</span>
                            </div>
                            <div class="num-content">
                                <?php echo $num_courses ?><span>Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="elvis-brad" class="col-sm-4 col-md-6">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brad-elvis.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- testimoniels -->
<section id="kudos" class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">What people are saying about Brad</h2>
                <div class="row testimoniel mt-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle"
                            src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                    </div>
                    <div class="col-sm-8">
                        <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                            ac massa tristique
                            eleifend.
                            Pellentesque
                            habitant
                            morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                            sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                            vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                            <cite class="text-end">&mdash; Brennan, graduate of all of Brad's courses</cite>
                        </blockquote>
                    </div>
                </div>
                <div class="row testimoniel mt-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                    </div>
                    <div class="col-sm-8">
                        <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                            ac massa tristique
                            eleifend.
                            Pellentesque
                            habitant
                            morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                            sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                            vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                            <cite class="text-end">&mdash; Ben, also cool</cite>
                        </blockquote>
                    </div>
                </div>
                <div class="row testimoniel mt-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="AJ">
                    </div>
                    <div class="col-sm-8">
                        <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                            ac massa tristique eleifend. Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas. Aliquam feugiat metus
                            sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                            vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                            <cite class="text-end">&mdash; AJ</cite>
                        </blockquote>
                    </div>
                </div>
                <div class="row testimoniel mt-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
                    </div>
                    <div class="col-sm-8">
                        <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                            ac massa tristique
                            eleifend.
                            Pellentesque
                            habitant
                            morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                            sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                            vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                            <cite class="text-end">&mdash; Ernest</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();