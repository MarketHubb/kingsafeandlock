<?php
 $image = get_field('home_background_image', $post->ID);
$bg_opacity = $hero['page_banner_image_opacity'] > 0 ? $hero['page_banner_image_opacity'] : .01;
$linear_gradient = 'linear-gradient(to bottom, rgba(0,0,0,' .  $bg_opacity . ') 0%,rgba(0,0,0,' . $bg_opacity . ') 100%)';
$text_align_class = $hero['page_banner_text_align'] = 'center' ? 'text-center' : '';

?>

<div id="hero-banner" class="jumbotron position-bottom bg-cover text-white px-4 px-lg-0"
     style="background-image: <?php echo $linear_gradient; ?>,
         url(<?php echo $image; ?>)">

    <div class="container-fluid py-3">
        <div class="wrapper">
            <div class="row justify-content-center justify-content-lg-end py-5">
                <div class="col-md-7 p-4 p-lg-5  align-items-center rounded bg-opacity-white shadow">
                    <p class="d-none d-lg-block fw-bold text-red"><?php the_field('home_subheading'); ?></p>
                    <p class="d-block d-lg-none text-center fw-bold text-red"><?php the_field('home_mobile_subheading'); ?></p>
                    <h1 class="display-2 lh-1 text-red my-3  fw-bolder hero-headline text-uppercase"><?php the_field('home_heading'); ?></h1>
                    <p class="hero-subheadline mb-4 promotion text-dark"><strong><?php the_field('home_callout'); ?></strong></p>
                    <p class="lead text-dark mb-4 hero-subheadline"><?php the_field('home_banner_description'); ?></p>

                    <p class="lead lead-small mb-0 pb-0">
                        <?php if (get_field('home_button_text') && get_field('home_button_link')) { ?>
                            <a href="<?php echo get_field('home_button_link') ?>" class="btn product-cta-btn shadow">
                                <?php the_field('home_button_text'); ?>
                                <i class="fas fa-long-arrow-right ms-1"></i>
                            </a>
                        <?php } ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>




<!--<div id="home-hero" class="skew-bottom"-->
<!--     style="background-image: --><?php //echo $linear_gradient; ?><!--,-->
<!--             url(--><?php //echo $image; ?><!--)">-->
<!--    <div class="text-center h-100 align-items-center flex-row">-->
<!--        <h1 class="font-weight-bold display-1 text-white">Houston Safe & Lock</h1>-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8 text-center">-->
<!--                <ul class="list-group list-group-horizontal transparent no-borders">-->
<!--                    <li class="list-group-item flex-fill transparent no-borders">-->
<!--                        <i class="fal fa-door-closed fa-2x text-white"></i>-->
<!--                        <h3 class="text-white font-weight-bold">High Security Safes</h3>-->
<!--                    </li>-->
<!--                    <li class="list-group-item flex-fill transparent no-borders">-->
<!--                        <i class="fal fa-key fa-2x text-white"></i>-->
<!--                        <h3 class="text-white font-weight-bold">24/7 Emergency Locksmiths</h3>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
