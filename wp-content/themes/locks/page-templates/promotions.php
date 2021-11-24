<?php

/* Template Name: Promotions  */

get_header();

?>
    <div class="custom-content">

        <!-- Banner -->
        <?php get_template_part('template-parts/global/content', 'banner'); ?>

        <!-- Panel Content -->
        <?php get_template_part('template-parts/promotions/content'); ?>

    </div>


<?php get_footer(); ?>