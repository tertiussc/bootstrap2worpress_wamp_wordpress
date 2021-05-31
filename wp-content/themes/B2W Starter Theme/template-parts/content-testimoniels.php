<section id="kudos" class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">What people are saying about Brad</h2>
                <?php $loop = new WP_Query(array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' =>'ASC')); ?>
                <?php while ($loop-> have_posts()) : $loop->the_post(); ?>
                <div class="row testimoniel mt-3">
                    <div class="col-sm-4">
                        <?php if(has_post_thumbnail()) {
                            the_post_thumbnail(array(200, 200));
                        } ?>
                    </div>
                    <div class="col-sm-8">
                        <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">
                            <?php the_content();  ?>
                            <cite class="text-end">&mdash; <?php the_title(); ?></cite>
                        </blockquote>
                    </div>
                </div>
                <?php endwhile; wp_reset_query();?>
            </div>
        </div>
    </div>
</section>