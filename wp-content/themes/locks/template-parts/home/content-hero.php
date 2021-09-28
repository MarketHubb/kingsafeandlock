<?php
$image = get_home_url() . '/wp-content/uploads/2021/09/Edited-Banner-1.jpg';
$bg_opacity = $hero['page_banner_image_opacity'] > 0 ? $hero['page_banner_image_opacity'] : .01;
$linear_gradient = 'linear-gradient(to bottom, rgba(0,0,0,' .  $bg_opacity . ') 0%,rgba(0,0,0,' . $bg_opacity . ') 100%)';
$text_align_class = $hero['page_banner_text_align'] = 'center' ? 'text-center' : '';

?>

<div id="hero-banner" class="jumbotron position-bottom bg-cover text-white px-sm-2"
     style="background-image: <?php echo $linear_gradient; ?>,
         url(<?php echo $image; ?>)">

    <div class="container-fluid  py-3">
        <div class="wrapper">
            <div class="row justify-content-end py-5">
                <div class="col-md-7 py-5 pe-lg-0 pt-lg-5 align-items-center rounded ">
                    <p class="px-4 mb-2 inline-block rounded-pill font-weight-bold mb-0 bg-light-blue text-red">American Security Safes <span class="px-3">|</span> 24x7 Locksmiths<span class="px-3">|</span>Safe Moving & Repair</p>
                    <h1 class="display-2  mb-3 mt-0 text-white font-weight-bold hero-headline text-uppercase">King Safe & Lock</h1>
                    <p class="lead font-weight-normal text-white hero-subheadline">With over 400 safes in stock, including over models of gun safes, King Safe and Lock™ has the perfect safe to fit every need and every budget. We carry the best gun safes Houston has to offer. We can deliver and install high security safes, home safes, jewelry safes, fire safes, commercial safes and gun safes to clients in Houston and the surrounding areas.

                    </p>
                </div>
            </div>
            <div class="row">
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
