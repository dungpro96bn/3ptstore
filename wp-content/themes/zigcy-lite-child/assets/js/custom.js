jQuery(function ($) {

    $(document).ready(function() {
        $(".facetwp-facet-danh_mc .facetwp-dropdown").chosen({disable_search_threshold: 100});
        $(".woocommerce-ordering select").chosen({disable_search_threshold: 100});
    });

    $(document).ajaxStop(function() {
        $(".facetwp-facet-danh_mc .facetwp-dropdown").chosen({disable_search_threshold: 100});
    });

    $(".woocommerce-pagination li a").click(function () {
        var href = $(this).attr('href');
        window.location.replace(href);
    });

});