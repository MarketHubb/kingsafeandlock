<?php
$logo = get_home_url() . '/wp-content/uploads/2022/08/Logo-White.svg';
$heading = $args['heading'];
?>
<div class="modal-header bg-red">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <img src="<?php echo $logo; ?>" class="modal-logo" alt="">
            </div>
            <?php if ($heading) { ?>
            <div class="col text-end">
                <h4 class="fw-bold text-white mb-0 pb-0">
                    <?php echo $heading; ?>
                </h4>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
