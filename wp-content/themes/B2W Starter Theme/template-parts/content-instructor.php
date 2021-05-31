<?php
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
?>

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