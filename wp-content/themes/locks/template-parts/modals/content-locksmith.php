<?php $form_id = get_query_var('alternate_locksmith_form') ?: 3; ?>
<?php $form_headline = get_query_var('alternate_locksmith_headline') ?: 'Schedule a Local Locksmith'; ?>
<?php $callouts = get_query_var('alternate_locksmith_callouts') ?: ['Same Day Service', 'Home & Office', '24/7 Availability']; ?>
<!-- Locksmith Modal -->
<div class="modal fade" id="locksmithModal" tabindex="-1" aria-labelledby="locksmithModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <?php get_template_part('template-parts/modal/content', 'header', ['heading' => $form_headline]); ?>

            <div class="modal-body">
                <div class="container-fluid">
                    <!-- Callouts -->
                    <div class="row mb-4 mt-2">
                        <div class="col-md-12">
                            <ul class="list-group list-group-horizontal flush">

                                <?php foreach ($callouts as $callout) { ?>
                                    <li class="list-group-item mb-0 flex-fill no-borders text-center pb-1">
                                        <p class="fw-bold text-secondary">
                                            <i class="far mb-1 fa-check text-success me-0 me-lg-3 d-block text-red"></i>
                                            <?php echo $callout; ?>
                                        </p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Form -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <?php gravity_form( $form_id, $display_title = false, $display_description = false, $ajax = false, $tabindex="10", $echo = true ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center bg-light-grey">
                <p class="mb-0 pb-0"><strong>Bonded and Insured For Your Protection! License #B19935701A </strong></p>
                <p class="mt-0"><small>Copyright © 2022 | King Safe & Lock | All Rights Reserved. | <a href="<?php echo get_home_url() . '/privacy-policy/'; ?>">Privacy
                            Policy</a> | <a href="<?php echo get_home_url() . '/terms-and-conditions/'; ?>">Terms & Conditions</a></small></p>
            </div>
        </div>
    </div>
</div>

