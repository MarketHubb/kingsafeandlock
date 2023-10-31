<!-- <div id="header-hero" class="container-skew banner-no-show" <?php echo single_post_hero_background(); ?>>


    <div class="container-straight">


        <div class="container-fixed"> -->
            <?php 
            if ( is_shop() ) {
               // echo '<h1 class="page-title">Safes For Sale</h1>';
            } else {
                // render_single_post_hero_headlines(); 
            }
            ?>


<!--         </div>


    </div>


</div> -->

<?php
if (is_shop() || is_archive() || is_singular('product')) {
    get_template_part('template-parts/content', 'alerts');
}
?>


<!-- Product Cat Page -->
<?php if (is_product_category()) {
    $obj = get_queried_object();
    $parent = get_term($obj->parent);
    $term_meta = get_term_meta($obj->term_id);
    $term_img = wp_get_attachment_url($term_meta['thumbnail_id'][0]);

?>

    <!-- Hero -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 pe-md-5">
                <?php if ($parent) { ?>
                    <h4 class="text-uppercase font-oxygen text-secondary mb-1 letters-wide-xl"><?php echo $parent->name; ?></h4>
                <?php } ?>
                <h1 class="fw-bold my-1 letters-wide text-blue font-oxygen"><?php echo $obj->name; ?></h1>
                <p class="lead fw-normal"></p>
                <p><?php echo $obj->description; ?></p>
            </div>
            <div class="col-md-6 text-center">
                <img class="product-cat-hero-img" src="<?php echo $term_img; ?>" alt="">
            </div>
        </div>
    </div>
<?php } ?>

<?php if (!is_shop() && !is_singular() && !is_product_category()) { ?>
<!-- Bannerless H1 ouput -->
<div class="bannerless-heading-container">
    <div class="container-fixed">
        <?php  
        $heading = render_single_post_hero_headlines();
        
        if ( is_shop() ) {
           $headline = 'Safes For Sale';
        } else {
            $headline =  $heading['headline'];
            $subheadline = $heading['subheadline'];
        }
        ?>
        
        <h1><?php echo $headline; ?></h1>
        <p><?php echo $subheadline; ?></p>
        
    </div>
</div>
<?php } ?>
