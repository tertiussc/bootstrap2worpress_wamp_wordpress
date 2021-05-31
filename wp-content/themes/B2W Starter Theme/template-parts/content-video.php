<?php
$video_link_url                 = get_field('video_link_url');
$video_section_title            = get_field('video_section_title');
?>

<section id="featurette" class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center"><?php echo $video_section_title ?></h2>
                <iframe width="100%" height="415" src="<?php echo $video_link_url; ?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>