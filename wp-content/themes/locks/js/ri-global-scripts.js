/* jQuery (Footer) */
(function($) {

    // Search
    $('#searchform').on('submit', function(e) {
        let searchInput = $(this).find('input.search-field');
        if (searchInput.val().length === 0) {
            e.preventDefault();
        }
    });

    $(window).load(function() {
        const myModal = new bootstrap.Modal(document.getElementById('popupModal'), {
            keyboard: false
        })

        $('#popupModal .close, #popupModal .close > span').on('click', function() {
            myModal.hide();
        });

        // myModal.show();
    });

    if($(window).width() <= 768){

        // Mobile search
        const search = $('#searchform');
        const menu = $('#primary-menu');

        if (search.length >= 1) {
            search.insertBefore(menu);
        }
    }

    function getHeroForModal(heading, description, image)
    {
        $.ajax({
            type:"POST",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: "get_hero_for_modal",
                heading: heading,
                description: description,
                image: image
            },
            success:function(data){
                $('.modal').find('#modal-hero').html(data);
            },
            complete:function(){

            }
        });
    }

    $('#service-modal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget) // Button that triggered the modal
        let image = button.data('image') // Extract info from data-* attributes
        let heading = 'Commercial & Residential Locksmiths';
        let description = 'Fully license & bonded with same-day service in Houston & all surrounding communities';
        let hero = getHeroForModal(heading, description, image);

        let modal = $(this)
        modal.find('#modal-hero').html(hero);
    })

    $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 768) {
            let headerHeight = $('#masthead').height();
            $('#content').css('padding-top', headerHeight);
            $('#primary').css('margin-top', 0);
        }
    }

})( jQuery );