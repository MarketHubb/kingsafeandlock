<?php
set_query_var('modal_callouts', '');
set_query_var('modal_heading', get_the_title() . ' Product Inquiry');
set_query_var('modal_mobile_heading', 'Safe Product Inquiry');
?>
<div class="product-single-container py-4 mb-5" id="custom-product-single">

    <div class="bg-blue pb-5 d-none">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="product-detail-heading text-white mt-0 pt-0"><?php echo get_the_title(); ?> Gun Safe</h1>
                    <p class="product-detail-subheading mb-0 text-white"><?php echo get_field('post_product_gun_model_description'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <?php if (get_field('detail_alert_active', 'option')) { ?>

            <div class="row d-none">
                <div class="col-md-12">
                    <p class="detail-alert-heading fw-bold mb-0 pb-0"><?php the_field('detail_alert_heading', 'option'); ?></p>
                    <p class="detail-alert-description small"><?php the_field('detail_alert_description', 'option'); ?></p>
                </div>
            </div>

        <?php } ?>

        <div class="row justify-content-between">

            <!-- Image -->
            <div class="col-md-6">
                <div class="mt-5 image-container">
                    <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
                </div>
            </div>

            <!-- Info -->
            <div class="col-md-6">
                <?php
                $title = get_the_title();
                $safe_type = get_safe_designation($post->ID);
                $manufacturer = get_manufacturer_by_title(get_the_ID());
                ?>

                <?php if ($safe_type) { ?>

                    <p class="fs-4 mb-1"><?php echo $safe_type; ?> Safe by <?php echo $manufacturer; ?></p>

                <?php } ?>

                <h1 class="product-detail-heading">

                <?php
                if (str_contains($title, "AMSEC") && isset($safe_type)) { ?>

                    <span class="d-block"><?php echo $title; ?></span>

                <?php  } else { ?>

                    <?php echo $title; ?>

                <?php } ?>

                </h1>

                <p class="product-detail-subheading"><?php echo get_field('post_product_gun_model_description'); ?></p>
                <?php if (get_field('post_product_gun_long_description')) { ?>
                    <p><?php the_field('post_product_gun_long_description'); ?></p>
                <?php } ?>



                <div class="inquiry-container py-3 mb-4">
                    <?php echo get_product_inquiry_btn($post->ID, 'Get Pricing & Delivery Options'); ?>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php get_template_part('template-parts/safes/content', 'tabs'); ?>
            </div>
        </div>


    </div>

    <div class="container">
        <div class="row justify-content-end inquiry-container">
            <div class="col-md-6">
                <?php //get_template_part('template-parts/safes/content', 'inquiry'); ?>
            </div>
        </div>
    </div>



    <div class="container-fluid mb-5">
        <?php get_template_part('template-parts/safes/content', 'diff'); ?>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
            </div>
        </div>
    </div>



</div>

