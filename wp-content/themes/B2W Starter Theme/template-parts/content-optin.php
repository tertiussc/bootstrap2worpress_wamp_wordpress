<?php
// Custom fields
$optin_text = get_post_meta($post->ID, 'optin_text', true);
$optin_button_text = get_post_meta($post->ID, 'optin_button_text', true);
?>

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