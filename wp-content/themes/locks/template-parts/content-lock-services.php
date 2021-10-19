<section id="lock-services bg-white">
  <div class="container-skew">
    <div class="container-straight">
      <div class="container-fixed">
<!--          <div class="container-fluid">-->
<!--              <div class="wrapper">-->
<!--                  <div class="row">-->
<!--                      <div class="col-md-9 text-center justify-content-center">-->
                          <h2 class="text-center display-4 font-weight-bold"> Lock Services</h2>
                          <p class="lead text-center">
                              <?php the_field('text_above_the_images'); ?>
                          </p>
<!--                      </div>-->


        <div id="services-container">
          <?php



                    while ( have_rows('lock_services_column') ) : the_row(); ?>
          <div class="service-single">
         <a href="<?php the_sub_field('ls_button_link'); ?>" class="lock-services">
		 <img src="<?php the_sub_field('ls_image'); ?>" alt="24 Hour Emergency Services">
		 </a>
       		<h3>
              <?php the_sub_field('ls_title'); ?>
            </h3>
            <p>
              <?php the_sub_field('ls_subtitle'); ?>
            </p>
            <a href="<?php the_sub_field('ls_button_link'); ?>" class="lock-butn">
            <?php the_sub_field('ls_button_text'); ?>
            </a> </div>
          <?php endwhile;?>
        </div>
      </div>
    </div>
  </div>
</section>
