<?php $attributes = $args['attributes']; ?>

<?php
$labels = '<ul class="product-details-list">';

foreach ($attributes as $attribute) {
    $val = get_safe_attribute_values($post->ID, $attribute);
    $attr_clean = strtolower(str_replace(' ', '_', $attribute));

    if ($attr_clean !== 'MSRP') {
        $labels .= '<li class="' . $attr_clean . '">';
        $labels .= '<span class="badge text-secondary attribute-label ' . $attribute . '  w-50 text-right">';
        $labels .= get_formatted_attributes($attribute)['name'] . ':</strong></span>';
        $labels .= '<span class="product-detail-value">';
        $labels .= $val['formatted'] . '</span>';

        if ($attr_clean === 'msrp') {
            $labels .= '<span class="badge bg-primary sale ms-4">20% Off</span>';
        }

        $labels .= '</li>';

        $safes .= 'data-' . $attribute . '="' . $val['clean'] . '" ';
    }
}
$safes .= '>';
$labels .= '</ul>';
?>
