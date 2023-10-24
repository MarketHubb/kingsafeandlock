<?php /* Template Name: Safes (Parent) */

get_header(); ?>

<div class="custom-content">


    <!-- Hero -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 pe-md-5">
                <h1 class="fw-bold mb-1 text-blue font-oxygen">Safes for Sale</h1>
                <p class="lead fw-normal">Houston's largest selection of in-stock, ready-to-ship safes.</p>
                <p>We offer an extensive range of safes for sale, from spacious gun vaults to compact jewelry safes. Our Houston showroom boasts the largest collection of residential and commercial safes, featuring over 300 in-stock models from renowned brands such as American Security.</p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo home_url() . '/wp-content/uploads/2021/11/KSL-Showroom-1.jpg'; ?>" alt="">
            </div>
        </div>
    </div>

    <!-- Safe Categories -->
    <div class="container">

        <?php
        $parent_product_cats = get_terms( array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
            'orderby' => 'meta_value_num',
            'meta_key' => 'output_order',
            'parent' => 0
        ));
        
        ?>


        <div class="row row-cols-3 justify-content-center">

        <?php
        $cats = '';

        foreach ($parent_product_cats as $parent_product_cat) {
            $term_meta = get_term_meta($parent_product_cat->term_id);
            $term_img = wp_get_attachment_url($term_meta['thumbnail_id'][0]);

            $cats .= '<div class="safe-cat my-3">';
            $cats .= '<div class="card h-100 border-0">';
            $cats .= '<div class="p-4">';
            $cats .= '<img src="' . $term_img . '" class="card-img-top">';
            $cats .= '</div>';
            $cats .= '<div class="card-body">';
            $cats .= '<h2>' . $parent_product_cat->name . '</h2>';
            $cats .= '<p>' . $parent_product_cat->description . '</p>';

            $child_product_cats = get_terms(array(
                'taxonomy' => 'product_cat',
                'hide_empty' => true,
                'parent' => $parent_product_cat->term_id
            ));

            $cats .= '<ul class="list-group list-group-flush ms-0">';

            foreach ($child_product_cats as $child_product_cat) {
                $cats .= '<li class="list-group-item"><a href="' . get_term_link($child_product_cat->term_id) . '">';
                $cats .= $child_product_cat->name . '</a></li>';
            }

            $cats .= '</ul>';
            $cats .= '</div></div></div>';
        }

        echo $cats;

        ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
