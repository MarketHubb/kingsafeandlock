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
<?php if (is_product_category()) { ?>
    <?php $obj = get_queried_object(); ?>
        <?php highlight_string("<?php\n\$obj =\n" . var_export($obj, true) . ";\n?>"); ?>

    <!-- Hero -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 pe-md-5">
                <h1 class="fw-bold mb-1 text-blue font-oxygen"><?php echo $obj->name; ?></h1>
                <p class="lead fw-normal"></p>
                <p><?php echo $obj->description; ?></p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo home_url() . '/wp-content/uploads/2021/11/KSL-Showroom-1.jpg'; ?>" alt="">
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
