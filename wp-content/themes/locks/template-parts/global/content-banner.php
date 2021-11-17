<?php
$banner = get_field('banner');
if ($banner) {
    $bg_opacity = $banner['image_opacity'] > 0 ? $banner['image_opacity'] : .01;
    $linear_gradient = 'linear-gradient(to bottom, rgba(0,0,0,' .  $bg_opacity . ') 0%,rgba(0,0,0,' . $bg_opacity . ') 100%)';
    $bg_image = $banner['background_image'];
    $heading = $banner['heading'];
    $description = $banner['description'];
}
?>
<!-- Page Title (Banner) -->
<div class="container-fluid p-0">
    <div class="banner-container"
         style="background-image: <?php echo $linear_gradient; ?>,
                 url(<?php echo $bg_image; ?>)">
        <div class="">
            <div class="container h-100 content-section">

                <div class="row h-100 align-items-center my-5">
                    <div class="col-12 text-center">

                        <?php if ($banner['heading']) { ?>
                            <h1 class="banner-headline mb-2"><?php echo $banner['heading']; ?></h1>
                        <?php } ?>

                        <?php if ($banner['description']) { ?>
                            <p class="banner-subheadline lead fs-large"><?php echo $banner['description']; ?></p>
                        <?php } ?>

                        <?php if (is_page(3477)) { ?>
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="d-inline-block mb-0">
                                    <a href="tel:713-465-0055"
                                       class="font-weight-bolder  fs-large btn btn-outline-light">
                                        713-465-0055
                                    </a>
                                </p>
                                <span class="mx-4 text-white">|</span>
                                <p class="d-inline-block mb-0">
                                    <a href="https://www.google.com/maps/dir//8429+Katy+Fwy,+Houston,+TX+77024/@29.7833053,-95.4927188,17z/data=!4m16!1m7!3m6!1s0x8640c410e40f67e3:0x6963c056d846c752!2s8429+Katy+Fwy,+Houston,+TX+77024!3b1!8m2!3d29.7833053!4d-95.4905301!4m7!1m0!1m5!1m1!1s0x8640c410e40f67e3:0x6963c056d846c752!2m2!1d-95.4905301!2d29.7833053"
                                    class="font-weight-bolder fs-large btn btn-outline-light">
                                        Directions to Store
                                    </a>
                                </p>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
