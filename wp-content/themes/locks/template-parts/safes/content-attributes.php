<?php
$post_id = get_the_ID();

if( have_rows('attributes', 'option') ):
    $attributes  = '<table class="table">';
    $attributes .= '<tbody>';

    while ( have_rows('attributes', 'option') ) : the_row();
        $label = get_sub_field('attribute', 'option');


        if ($label === 'Type') {
            $safe_type = get_safe_type_attributes($post_id);
        } else {
            $field_name = get_sub_field('acf_field', 'option');
            $formatted_field_name = str_replace('post_product_gun_', '', $field_name);
            $safe_type['attribute_label'] = $label;
            $safe_type['attribute_value'] = get_safe_attribute_values($post_id, $formatted_field_name)['formatted'];
            $safe_type['attribute_image'] = get_sub_field('icon', 'option');
        }
        
        if (isset($safe_type['attribute_value']) && !empty($safe_type['attribute_value'])) {
            if ($label === 'Manufacturer') {
                $safe_type['attribute_image'] = return_manufacturer_attributes_logo(get_the_ID());
            }

            $attributes .= '<tr class="align-middle">';
            $attributes .= '<td class=" py-3 my-1"><img src="' . $safe_type['attribute_image'] . '"  class="attribute-icons text-secondary" /></td>';
            $attributes .= '<td class="pe-0"><p class="fw-bold mb-0 d-inline fs-5 text-end">' . $safe_type['attribute_label'] . ':</p></td>';
            $attributes .= '<td class="ps-0"><p class="fs-5 fw-600 mb-0 anti ' . strtolower(str_replace(' ', '_', $safe_type['attribute_label'])) . '">' . $safe_type['attribute_value'] . '</p></td>';
            $attributes .= '</tr>';
        }
        

    endwhile;

    $attributes .= '</tbody></table>';
    echo $attributes;

endif;
?>

