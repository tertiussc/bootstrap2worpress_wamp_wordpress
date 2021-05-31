<?php
// Advanced custom fields
$income_feature_image           = get_field('income_feature_image');
$income_feature_image_url       = get_field('income_feature_image')['url'];
$income_section_title           = get_field('income_section_title');
$income_section_description     = get_field('income_section_description');
$reason_1_title                 = get_field('reason_1_title');
$reason_1_description           = get_field('reason_1_description');
$reason_2_title                 = get_field('reason_2_title');
$reason_2_description           = get_field('reason_2_description');
?>

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