<?php
$course_features_image          = get_field('course_features_image');
$course_features_title          = get_field('course_features_title');
$course_features_body           = get_field('course_features_body');
?>

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
            <?php endwhile; wp_reset_query();?>

        </div>
    </div>
</section>