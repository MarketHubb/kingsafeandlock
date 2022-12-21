<div id="pre-nav" class="">
<!--    <div class="container-fixed py-2">-->
        <div class="d-flex flex-row justify-content-between px-3 px-md-4 px-lg-5 py-2">

            <div class="d-inline-block logo-fixed">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h4 class="text-white my-0">King Safe & Lock</h4>
                </a>
            </div>

            <div class="d-inline-block">
                <?php if (!get_field('active', 'options')) { ?>

                    <p class="mb-0 pb-0 d-inline ms-4">
                        <img id="auto-key-icon" src="<?php echo home_url() . '/wp-content/uploads/2022/10/Car-Key.svg' ?>" alt="">
                        <a class="mb-0 pb-0 text-white" href="https://www.autofobs.com/?ref=44&locid=18451">Auto Remotes</a>
                    </p>

                <?php } else { ?>

                    <p class="font-weight-bold mb-0  d-inline-block py-1 global-alert">
                        <a href="<?php echo get_field('alert_link', 'options'); ?>" class="text-white lh-sm">
                            <?php echo get_field('alert_message', 'options'); ?>
                        </a>
                    </p>

                <?php } ?>
            </div>

            <div class="d-inline-block">
                <?php get_search_form(); ?>
            </div>

        <!-- Scroll logo (Text image) -->
<!--        <div id="left-content">-->
<!--            <a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
<!--                <h4 class="text-white my-0"></h4>-->
<!--            </a>-->
<!--        </div>-->
        <!-- CURRENT:: Pre Nav (social icons) -->
<!--        <div id="right-content">-->
<!--            --><?php //get_search_form(); ?>
<!--        </div>-->

    </div>
</div>

