
<div class="safe-category-container">
    <div class="container products">
        <div class="row category-name-container" id="<?php echo $args['cat_attr']; ?>">
            <div class="col">
                <h2 data-termid="<?php echo $args['term_id']; ?>">
                    <?php echo $args['cat_name']; ?>
                </h2>
                <h3>
                    <?php echo $args['cat_attr']; ?>
                </h3>
                <p>
                    <?php $cat_safe_description = get_field('category_safes_description', $args['acf_field_param']); ?>
                    <?php echo $cat_safe_description; ?>
                </p>
            </div>
        </div>

        <?php if(have_rows('category_safes_attributes', $args['acf_field_param']) ): ?>
            <div class="row category-attributes-container">

                <?php while ( have_rows('category_safes_attributes', $args['acf_field_param']) ) : the_row(); ?>
                    <div class="col-md-4">
                        <?php $attribute_heading = get_icon_for_category_attribute(get_sub_field('category_safes_attributes_category', $args['acf_field_param'])); ?>
                        <?php echo $attribute_heading; ?>

                        <?php if( have_rows('category_safes_attributes_items', $args['acf_field_param']) ): ?>
                            <ul class="left-aligned">
                                <?php while ( have_rows('category_safes_attributes_items', $args['acf_field_param']) ) : the_row(); ?>
                                    <li><?php echo get_sub_field('category_safes_attributes_items_item', $args['acf_field_param']); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>

        </div>
    <?php endif; ?>

    </div>
</div>

