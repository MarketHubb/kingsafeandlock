<?php /* Template Name: Used Safes */
get_header();
set_query_var('form_id', 4);
?>

<div class="custom-template custom-content">

    <!-- Banner -->
    <?php get_template_part('template-parts/global/content', 'banner'); ?>

    <!-- Content -->
    <?php get_template_part('template-parts/safes/content', 'used'); ?>

</div>

<?php get_footer(); ?>
