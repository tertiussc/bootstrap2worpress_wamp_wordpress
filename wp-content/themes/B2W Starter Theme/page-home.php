<?php
/*
    Template Name: Home Page
*/

get_header();
?>

<!-- get Hero Section -->
<?php get_template_part('template-parts/content','hero') ?>

<!-- Get Optin Section -->
<?php get_template_part('template-parts/content','optin') ?>

<!-- Boost your income -->
<?php get_template_part('template-parts/content','boost') ?>

<!-- who benefits -->
<?php get_template_part('template-parts/content','who') ?>

<!-- Course Features -->
<?php get_template_part('template-parts/content','course') ?>

<!-- === Project Features === -->
<?php get_template_part('template-parts/content','project') ?>

<!-- Video Featurette -->
<?php get_template_part('template-parts/content','video') ?>


<!-- Instructor -->
<?php get_template_part('template-parts/content','instructor') ?>

<!-- testimoniels -->
<?php get_template_part('template-parts/content','testimoniels') ?>

<?php
get_footer();