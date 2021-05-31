<?php
// Custom fields
$project_feature_title          = get_field('project_feature_title');
$project_feature_body           = get_field('project_feature_body');
?>

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
            <?php endwhile; wp_reset_query();?>
        </div>
    </div>
</section>