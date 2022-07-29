/* jQuery (Footer) */
(function($) {

    // Custom Bootstrap modal with Gravity form
    $('#productModal').on('show.bs.modal', function (event) {
        let modal = $(this);
        let button = $(event.relatedTarget);
        let safeType = button.data('safetype')
        let safeName = button.data('safename')
        let safeImage = button.data('safeimage')

        var formId = (typeof button.data('safeformid') !== 'undefined') ? button.data('safeformid') : 2;

        console.log(button.data('safeformid'));

        let productField = $('#gform_' + formId).find('.product-field textarea');

        productField.val(safeName);
        productField.addClass('fw-normal');
        modal.find('.modal-subtitle').text(safeType + ' Product Inquiry');
        modal.find('.modal-image').attr('src', safeImage);

    });

    // Custom Bootstrap modal with Gravity form
    // $('#productModal').on('show.bs.modal', function (event) {
    //     let modal = $(this);
    //     let button = $(event.relatedTarget);
    //     let safeType = button.data('safetype')
    //     let safeName = button.data('safename')
    //     let safeImage = button.data('safeimage')
    //     let productField = $('#gform_2').find('.product-field textarea');
    //
    //     productField.val(safeName);
        // modal.find('.modal-subtitle').text(safeType + ' Product Inquiry');
    //     modal.find('.modal-image').attr('src', safeImage);
    //
    // });

    //-----------------------------------------------------
    // Google Analytics
    //-----------------------------------------------------


})( jQuery );