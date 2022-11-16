/* jQuery (Footer) */
(function($) {

    var containerEl = document.querySelector('.products');
    var mixer = mixitup(containerEl, {
        selectors: {
            target: '.mix',
            control: '[data-mixitup-control]'
        },
        callbacks: {
            onMixClick: function(state, originalEvent) {
                console.log("running");
                let dataSort = originalEvent.srcElement.attributes[2].nodeValue;
                let dataSortClean = dataSort.substr(0, dataSort.indexOf(':'));
                const targetClasses = Object.values(originalEvent.target.classList);

                // Update sort text
                let currentSortText = originalEvent.srcElement.text;
                $('#sort-filter-nav option:selected').text('Sort By: ' + currentSortText);

                if (Object.values(targetClasses).indexOf('filter-link') > -1) {
                    $('#sort-filter-nav option').not('.dropdown').each(function() {
                        $(this).removeClass('active-filter');
                    });
                    $('#sort-filter-nav option:selected').addClass('active-filter');

                }
                if (Object.values(targetClasses).indexOf('dropdown-item') > -1) {
                    console.log("targetClasses", targetClasses);
                    $('#sort-filter-nav option').each(function(){
                        $(this).removeClass('active-filter');
                    });
                    $(this).addClass('active-filter');
                }

                // Filters
                // if (originalEvent.srcElement.hasClass('filter-link')) {
                // 	$('#sort-filter-nav li.nav-item').not('.dropdown').each(function() {
                // 		$(this).removeClass('active-filter');
                // 	});
                // 	$(this).closest('li.nav-item').addClass('active-filter');
                // }


                // Sorts
                $('.product-details-list li span.badge').each(function(){
                    $(this).closest('li')
                        .removeClass('current-sort');

                    if (dataSortClean && $(this).hasClass(dataSortClean)) {
                        $(this).closest('li')
                            .addClass('current-sort');
                    }

                });
            }
        }
    });



    // $('.sort-select').on('change', function(){
    // 	let selected = $(this).val()
    // 	mixer.filter('.' + selected);
    // });

    // var mixer = mixitup('.products');

    // var mixer = mixitup(containerEl, {
    // 	"animation": {
    // 		"duration": 0,
    // 		"nudge": false,
    // 		"reverseOut": false,
    // 		"effects": ""
    // 	}
    // });

})( jQuery );