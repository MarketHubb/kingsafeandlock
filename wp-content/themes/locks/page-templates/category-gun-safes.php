<?php /* Template Name: Category - Gun Safes */

get_header(); ?>

<?php get_template_part('template-parts/content', 'banner'); ?>

<!-- Brought over -->
<?php
$attributes = ['msrp', 'capacity-total', 'weight', 'fire-rating', 'exterior-depth', 'exterior-width', 'exterior-height'];
$tax_term = 'product_cat';
$gun_safe_terms = [59, 60, 36, 38, 61];
$content = '';
foreach ($gun_safe_terms as $term_id) {

    $term =  get_terms([
        'taxonomy' => $tax_term,
        'include' => $term_id
    ]);

    $cat_name = 'AMSEC ' . get_field('categoy_safes_category_name', $term[0]);

    if ($term_id !== 61) {
        $cat_attr = get_field('category_safes_fire_rating', $acf_field_param) . ' Minute Fire Proof Gun Safes';
    } else {
        $cat_attr = get_field('category_safes_fire_rating', $acf_field_param);
    }

    // Parent
    $content .= '<div class="bg-white">';

    // Category Callouts
    $callout_args = array(
        'cat_attr' => $cat_attr,
        'term_id' => $term_id,
        'cat_name' => $cat_name,
        'acf_field_param' => $acf_field_param
    );

    get_template_part('template-parts/safes/content', 'category-callouts', $callout_args);

    // Query args
    $query_args = [
        'post_type' => 'product',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => $tax_term,
                'terms'    => $term_id
            ),
        ),
    ];
?>

    <?php $query = new WP_Query($query_args); ?>

    <?php if ($query->have_posts()) : ?>

        <div class="container">

            <div class="row product-grids-container">

                <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <?php get_template_part('template-parts/safes/content', 'grid-list', ['attributes' => $attributes]); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            </div>

        </div>

    <?php endif; ?>

<?php } ?>

<?php get_footer(); ?>