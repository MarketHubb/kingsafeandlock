<?php
function get_repeater_field_row($repeater_field, $row_index, $sub_field, $post_id)
{
    $rows = get_field($repeater_field, $post_id);
    $row_index = $row_index - 1;

    if ($rows) {
        $repeater_field_row = $rows[$row_index];
        $repeater_field = $repeater_field_row[$sub_field];
    }

    return $repeater_field;
}
function return_discount($old, $new) {
    $percentChange =  ($new/$old) * 100;

    return round($percentChange, 0);
}

function clean_price($price) {

    return str_replace(',', '', substr($price, 0, strpos($price, ".")));
}

function get_price($msrp, $discount, $type = 'percentage') {
    $price['msrp_no_cents'] = str_replace('$','',substr($msrp, 0, strpos($msrp, ".")));
    $price['msrp_no_comma'] = str_replace('$', '',str_replace(',', '', $msrp));

    $msrp = clean_price(str_replace('$', '', $msrp));
    $price['msrp'] = intval($msrp);

    if ($discount && $type === 'percentage') {
        $price['discount_amount'] = intval($price['msrp'] * ($discount / 100));
        $price['sale_price'] = $price['msrp'] - $price['discount_amount'];
    }

    return $price;
}
function return_manufacturer_logo_for_safe($title) {
    $title = strtolower($title);

    switch(true) {
        case str_contains($title, 'jewel'):
            return '/wp-content/uploads/2016/09/jewel-safes-banner.jpg';
        case str_contains($title, 'amsec'):
            return get_stylesheet_directory_uri() . '/images/AMSEC.png';
        case str_contains($title, 'original'):
            return '/wp-content/uploads/2019/11/ORIGINAL-LOGO-black_highres-1.png';
        case str_contains($title, 'perma'):
            return '/wp-content/uploads/2022/09/Permavault-logo.jpg';
    }
}
function get_safe_attribute_values($post_id, $attribute) {
    $val = get_field('post_product_gun_' . str_replace('-', '_', $attribute), $post_id);
    $output_val = [];

    if ($attribute === 'msrp') {
        $val_clean = get_price($val, 20);
        $output_val['formatted'] = '$' . $val_clean['msrp_no_cents'];
        $output_val['clean'] = $val_clean['msrp'];
    }
    else if ($attribute === 'burglary_rating' || $attribute === 'manufacturer') {
        $output_val['formatted'] = str_replace(' Burglary Protection', '', $val);
        $output_val['clean'] = $val;
    } else {
        $output_val['formatted'] = ($val) ? round($val, 2) . get_formatted_attributes($attribute)['postfix'] : "N/A";
        $output_val['clean'] = (is_numeric($val) && !empty($val)) ? $val : 0;
    }

    return $output_val;
}

function get_clean_attribute_labels($attribute) {
    $label = ucwords(str_replace('-', ' ', $attribute));

    if (str_contains($label, 'Exterior')) {
        $label = str_replace('Exterior', '', $label);
    }
    if (str_contains($label, 'Capacity Total')) {
        $label = str_replace('Total', '', $label);
    }
    if (str_contains($label, 'Msrp')) {
        $label = 'MSRP';
    }

    return $label;
}

function get_formatted_attributes($label) {
    $label = get_clean_attribute_labels($label);

    $attribute['name'] = $label;

    switch (true) {
        case str_contains($label, 'Weight'):
            $attribute['postfix'] = 'lbs';
            break;
        case str_contains($label, 'Capacity'):
            $attribute['postfix'] = ' Guns';
            break;
        case str_contains($label, 'Fire'):
            $attribute['postfix'] = ' Min';
            break;
        case str_contains($label, ''):
            $attribute['postfix'] =  '"';
            break;

    }

    return $attribute;
}
function return_manufacturer_attributes_logo($post_id) {
    $oem = trim(strtolower(get_field('post_product_gun_manufacturer', $post_id)));

    if( have_rows('logos', 'option') ):
        while ( have_rows('logos', 'option') ) : the_row();
            $oem = trim(strtolower(get_field('post_product_gun_manufacturer', $post_id)));
            $oem_field_name = trim(strtolower(get_sub_field('name', 'option')));
            if ($oem_field_name === $oem) {
                $logo =  get_sub_field('grey', 'option');
            }
        endwhile;
    endif;

    return $logo;
}
function get_safe_type_attributes($post_id) {
    $safe_type['attribute_label'] = "Safe Type";
    $safe_type['attribute_value'] = "Gun & Rifle";
    $safe_type['attribute_image'] = '/wp-content/uploads/2022/11/type-gun-4.svg';

    return $safe_type;
}
?>
