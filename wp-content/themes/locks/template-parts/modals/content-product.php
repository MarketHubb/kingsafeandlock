<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <h2 class="modal-title fw-bold text-red mb-0 pb-0" id="exampleModalLabel">King Safe & Lock</h2>
                            <p class="mb-0 small"><em>Proudly serving Houston & surrounding communities</em></p>
                        </div>
                    </div>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-horizontal flush">
                                <li class="list-group-item flex-fill no-borders text-center pb-1">
                                    <h5 class="font-weight-bold"><i class="far fa-check text-success me-0 me-lg-3 d-block d-lg-inline"></i>Pricing
                                    </h5>
                                </li>
                                <li class="list-group-item flex-fill no-borders text-center pb-1">
                                    <h5 class="font-weight-bold"><i class="far fa-check text-success me-0 me-lg-3 d-block d-lg-inline"></i>Delivery
                                    </h5>
                                </li>
                                <li class="list-group-item flex-fill no-borders text-center pb-1">
                                    <h5 class="font-weight-bold"><i class="far fa-check text-success me-0 me-lg-3 d-block d-lg-inline"></i>Support
                                    </h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead my-3 font-weight-bold modal-subtitle"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <?php gravity_form( 2, $display_title = false, $display_description = false, $ajax = false, $tabindex="10", $echo = true ); ?>
                        </div>
                        <div class="col-md-5">
                            <img src="" class="modal-image" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <p class="mb-0"><strong>Bonded and Insured For Your Protection! License #B12370</strong></p>
                <p><small>Copyright © 2021 | King Safe & Lock | All Rights Reserved. | <a href="<?php echo get_home_url() . '/privacy-policy/'; ?>">Privacy
                            Policy</a> | <a href="<?php echo get_home_url() . '/terms-and-conditions/'; ?>">Terms & Conditions</a></small></p>
            </div>
        </div>
    </div>
</div>
