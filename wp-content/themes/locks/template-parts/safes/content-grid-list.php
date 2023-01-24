<?php $attributes = $args['attributes']; ?>

<div class="col-12 col-md-6 col-lg-4 mb-3 product-list-item mix"
     data-series="<?php echo substr(get_the_title(), 0, 2); ?>"
     data-name="<?php echo array_shift($title_array); ?>"

    <?php foreach ($attributes as $attribute) { ?>
        <?php $val = get_safe_attribute_values($post->ID, $attribute); ?>
        data-<?php echo $attribute . '="' . $val['clean'] ?>"
    <?php } ?>
    >

    <div class="card h-100 border border-1 shadow">

        <!-- Card Header -->
        <div class="card-header d-flex flex-row align-items-center justify-content-between">
        <?php $logo = return_manufacturer_logo_for_safe(get_the_title($post->ID)); ?>
            <div class="d-inline-block p-1">
                <img src="<?php echo $logo; ?>" class="manufacturer-logo" />
            </div>
            <div class="d-inline-block">
                <span class="badge badge-primary bg-red float-right align-middle">In-stock</span>
            </div>
        </div>

        <!-- Card Body-->
        <div class="card-body p-4 mb-3 d-flex flex-column">
            <?php $terms = get_the_terms($post->ID, 'product_cat'); ?>
            <?php
            if (is_array($terms)) {
                foreach ($terms as $term) {
                    if ($term->parent !== 0) { ?>
                    <p class="text-secondary mb-1"><?php $term->name; ?></p>
         <?php } } } ?>

            <h3 class="card-title"><?php echo get_the_title(); ?></h3>
            <div class="d-flex justify-content-center mt-4 img-container">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="safe-img"/>
            </div>

            <hr/>

            <!-- Attributes -->
            <ul class="product-details-list lst-none ms-0 ps-0">
            <?php foreach ($attributes as $attribute) { ?>
                <?php $val = get_safe_attribute_values($post->ID, $attribute); ?>
                <?php $attr_clean = strtolower(str_replace(' ', '_', $attribute)); ?>

                <?php if ($attr_clean !== 'msrp') { ?>

                <li class="<?php echo $attr_clean; ?> d-flex justify-content-center fw-600">
                    <span class="text-secondary w-50 text-end pe-2 attribute-label   text-right <?php echo $attribute; ?>">
                       <?php echo get_formatted_attributes($attribute)['name']; ?>:
                   </span>
                   <span class="product-detail-value  w-50">
                        <?php echo $val['formatted']; ?>
                   </span>
               </li>
               <?php } ?>
           <?php } ?>
           </ul>

            <!--Button -->
           <div class="text-center inquiry-container pt-2 mt-auto">
                  <a href="<?php echo get_permalink($post->ID); ?>" class="btn btn-primary bg-red d-block d-md-inline-block border-0">View Product Details</a>
           </div>

            <a href="<?php echo get_the_permalink(); ?>" class="stretched-link"></a>

        </div>
    </div>
</div>


