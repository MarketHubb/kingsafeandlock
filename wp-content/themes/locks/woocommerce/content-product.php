<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined('ABSPATH') || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if (! is_a($product, WC_Product::class) || ! $product->is_visible()) {
    return;
}
?>

<!-- Custom grid output -->
<div class="col-md-4 text-center mb-3">
    <div class="product-container h-100 px-4 py-5">
        <h4 class="product-list-name text-black font-weight-bold">
            <?php echo get_the_title($post->ID); ?>
        </h4>
        <?php if (get_field('post_product_gun_burglary_rating')) { ?>
            <p>
                <?php echo get_field('post_product_gun_burglary_rating'); ?>
            </p>
        <?php } ?>
        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" />
        <div class="row mt-5 justify-content-center align-items-center inquiry-container mt-3">
            <div class="col-md-12 col-lg-6">
                <?php echo get_product_inquiry_btn($post->ID, 'Get Sale Pricing'); ?>
            </div>
            <div class="col-md-12 col-lg-6 mt-4 mt-lg-0">
                <a class="fw-semibold" href="<?php echo get_permalink($post->ID); ?>">View Safe Details <i
                        class="fas fa-long-arrow-right ms-1"></i></a>
            </div>

        </div>
        <a href="<?php echo get_permalink($post->ID); ?>" class="stretched-link"></a>
    </div