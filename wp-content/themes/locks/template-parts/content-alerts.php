<?php

if (is_shop() || is_archive() || is_singular('product')) {
    $safe_alert = get_field('safe_alerts', 'option');
}
?>

<div class="alert alert-primary text-center" role="alert">
    <span class="safe-alert-message"><?php echo $safe_alert; ?></span>
</div>
