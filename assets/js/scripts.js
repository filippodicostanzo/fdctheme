var $ = jQuery.noConflict();

$(document).ready(function () {

    /**
     * function adminBarH()
     * return height of ADMIN BAR of WP
     * @returns {number}
     */

    function adminBarH() {
        var height = 0;

        // WP adminbar
        if ($('body').hasClass('admin-bar')) {
            height += $('#wpadminbar').innerHeight();
        }

        // WC demo store
        if ($('body').hasClass('woocommerce-demo-store')) {
            height += $('body > p.demo_store').innerHeight();
        }

        return height;
    }


    /**
     * windows.scroll
     * check if current position is > of navbar for add sticky class
     */

    var nav = $(".navbar");
    var offset = nav[0].offsetTop;
    var height = nav.height();

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= (offset + height + 20) && $(this).width() > 767) {

            if (!$('.for-sticky').hasClass('fixed-top')) {
                $('.for-sticky')
                    .addClass('fixed-top')
                    .css('top', -60)
                    .animate({
                        'top': '0px'
                    }, 300);
            }
        }

        else {
            nav.removeClass('fixed-top');
        }
    });

})