<div class="bg-blue pb-5 pt-4">
    <div class="container-fluid content-section mb-5 py-4">
        <div class="wrapper">
            <div class="row">
                <?php
                if (have_rows('services')):
                    $s = '';
                    while (have_rows('services')) : the_row();
                        $s .= '<div class="col-md-4 text-center mb-4">';
                        $s .= '<div class="card no-borders shadow pt-2 pb-4 px-3">';
                        $s .= '<div class="card-body">';
                        $s .= '<h2 class="section-heading text-center text-lg-left">' . get_sub_field('heading') . '</h2>';
                        $s .= '<h4 class="font-italic mb-4 text-red">' . get_sub_field('subheading') . '</h4>';
                        $s .= '<p class="lead">' . get_sub_field('description') . '</p>';
                        $s .= '<img src="' . get_sub_field('image') . '" class="rounded shadow" />';
                        $s .= '<p class="lead lead-small mb-0 pb-0">';
                        $s .= '<a href="' . get_sub_field('page_link') . '" class="btn product-cta-btn shadow mt-4 w-100 test">';
                        $s .= 'View ' . get_sub_field('heading') . '<i class="fas fa-long-arrow-right ms-1"></i>';
                        $s .= '</a></p>';
                        $s .= '</div></div></div>';
                    endwhile;
                    echo $s;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>