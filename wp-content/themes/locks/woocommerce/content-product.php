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
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<div class="col-md-4 text-center mb-3">
    <div class="product-container h-100 px-4 py-5">
        <h4 class="product-list-name text-black font-weight-bold"><?php echo get_the_title($post->ID); ?></h4>
        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" />
        <div class="text-center inquiry-container">
            <?php echo get_product_inquiry_btn($post->ID, 'Product Inquiry <i class="fas fa-long-arrow-right ml-1"></i>'); ?>
        </div>
        <a href="<?php echo get_permalink($post->ID); ?>" class="stretched-link"></a>
    </div>
</div>

<!--<li --><?php //// wc_product_class(); ?><!---->
<!--    <div class="bg-blue text-center p-4 product-list-container h-100">-->
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
       // do_action( 'woocommerce_before_shop_loop_item' );

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
       // do_action( 'woocommerce_before_shop_loop_item_title' );

        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
       // do_action( 'woocommerce_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
       // do_action( 'woocommerce_after_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        //do_action( 'woocommerce_after_shop_loop_item' );
        ?>

        <!-- Button trigger modal -->
<!--        <div class="text-center mt-3 mb-4">-->
<!--            --><?php //echo get_product_inquiry_btn($post->ID, 'Product Inquiry <i class="fas fa-long-arrow-right ml-1"></i>'); ?>
<!--        </div>-->
<!--    </div>-->
<!--</li>-->