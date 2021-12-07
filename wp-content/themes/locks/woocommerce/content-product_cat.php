<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php
$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
$image = wp_get_attachment_url( $thumbnail_id );
$category_link = get_term_link($category->term_id, 'product_cat');
?>

<div class="col-md-4 text-center mb-3">
    <div class="product-container h-100 px-4 py-5">
        <h4 class="product-list-name text-black font-weight-bold"><?php echo $category->name; ?></h4>
        <img src="<?php echo $image; ?>" />
        <div class="text-center inquiry-container">
            <?php echo get_product_inquiry_btn($category_link, 'View All Safes <i class="fas fa-long-arrow-right ml-1"></i>'); ?>
            <p class="mt-2"><em><?php echo $category->category_count; ?> in stock</em></p>
        </div>
        <a href="<?php echo $category_link; ?>" class="stretched-link"></a>
    </div>
</div>

