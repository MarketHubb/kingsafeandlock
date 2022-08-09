<?php
$hero = get_field('page_banner_details');

if ($hero) :
    $heading = $hero['page_banner_heading'] ?: get_the_title($post->ID);
    $subheading = $hero['page_banner_subheading'] ?: '';
    $bg_opacity = $hero['page_banner_image_opacity'] ?: .8;
    $linear_gradient = 'linear-gradient(to bottom, rgba(0,0,0,' .  $bg_opacity . ') 0%,rgba(0,0,0,' . $bg_opacity . ') 100%)';
    $text_align_class = $hero['page_banner_text_align'] = 'center' ? 'text-center' : '';

    ?>

    <div class="jumbotron bg-cover text-white single-post py-1"
         style="background-image: <?php echo $linear_gradient; ?>,
             url(<?php echo $hero['page_banner_image']; ?>)">

        <div class="container align-items-center justify-content-center my-5 py-4 text-center">

            <div class="row justify-content-center">

                <div class="col-md-10">

                    <?php $categories = get_the_category($post->ID); ?>


                    <?php if ($categories[0]->name &&  $categories[0]->name !== 'uncategorized') { ?>
                        <div class="text-center">
                            <p class="dib category-pill font-weight-bold text-white shadow">
                                Posted In: <strong><?php echo $categories[0]->name; ?></strong>
                            </p>
                        </div>
                    <?php } ?>

                    <h1 class="banner-heading fw-bold display-4 my-1 ttc lh-1"><?php echo $heading; ?></h1>

                    <div class="px-md-5">

                        <?php if ($subheading && strlen($subheading) > 0) { ?>
                            <h3 class="text-white fw-normal"><?php echo $subheading; ?></h3>
                        <?php } ?>


                        <?php if ($hero['page_banner_description']) { ?>
                            <p class="lead font-weight-bold text-white lh-lg"><?php echo $hero['page_banner_description']; ?></p>
                        <?php } ?>

                    </div>

                    <?php
                    $dates = compare_published_updated_dates($post->ID);

                    if ($dates) {
                        $published_read = '<div class="mt-5">';

                        foreach ($dates as $key => $val) {
                            $published_read .= '<p class="text-white date-published small">';
                            $published_read .= '<i class="fas fa-calendar-week pe-2"></i>';
                            $published_read .=  '<span class="pe-2">' . ucwords($key) . ':</span>'  . $val . '</p>';
                        }

                        $published_read .= '</div>';

                    }


                    echo $published_read;
                    ?>
                </div>

            </div>

        </div>

    </div>

<?php endif; ?>
