var $ = jQuery.noConflict();

$(document).ready(function () {
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (t) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var e = $(this.hash);
            e = e.length ? e : $('[name=' + this.hash.slice(1) + ']'), e.length && (t.preventDefault(), $('html, body').animate({
                scrollTop: e.offset().top
            }, 900, function () {
                var t = $(e);
                if (t.focus(), t.is(':focus')) return !1;
                t.attr('tabindex', '-1'), t.focus();
            }));
        }
    });

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


    $('.navbar-toggler').on('click', function (e) {
        $('#side-slide').animate({right: '0'}, 500);
        $('#body-overlay').fadeIn(900);
    });

    $('.close').on('click', function (e) {
        $('#side-slide').animate({right: '-250'}, 500);
        $('#body-overlay').fadeOut(900);
    })

    /**
     * windows.scroll
     * check if current position is > of navbar for add sticky class
     */

    if ($('.navbar').length) {
        var nav = $('.navbar');
        var offset = nav[0].offsetTop;
        var height = nav.height();

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= (offset + height + 20) && $(this).width() > 991) {
                if (!$('.for-sticky').hasClass('fixed-top')) {

                    if ($('body').hasClass('admin-bar')) {

                        $('.for-sticky')
                            .addClass('fixed-top')
                            .css('top', -60)
                            .animate({
                                'top': '32px'
                            }, 300);
                    } else {
                        $('.for-sticky')
                            .addClass('fixed-top')
                            .css('top', -60)
                            .animate({
                                'top': '0px'
                            }, 300);
                    }
                }
            } else {
                nav.removeClass('fixed-top');


                if ($('body').hasClass('admin-bar')&& $(this).width() > 991) {
                    $('.for-sticky').css('top', 0)
                }

                if ($('body').hasClass('header_4') && $(this).width() > 991) {
                    if ($('body').hasClass('admin-bar')) {
                        nav.css('top', '80px');
                    } else {
                        nav.css('top', '48px');
                    }
                }
            }


            /**************************
             * BACK TO TOP
             **************************/

            if (scroll > 100) {
                $('.back-to-top-fixed').fadeIn(400);
            } else {
                $('.back-to-top-fixed').fadeOut(400);
            }
            /*
            console.log('SCROLL NOW ' + scroll);
            console.log('TOP PRIVATE TOURS ' + toursOffsetTop);
            console.log('PRIVATE TOURS HEIGHT ' + toursHeight);
            console.log('PRIVATE TOURS TOTAL ' + toursTotal);
            */
        });
    }


    /**************************
     * OWL CAROUSEL FLEET
     **************************/


    setTimeout(function () {
        $('.owl-location').owlCarousel(
            {
                items: 1,
                nav: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]

            }
        );

        $('.owl-wedding-01').owlCarousel(
            {
                items: 1,
                nav: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]

            }
        );


        $('.owl-wedding-02').owlCarousel(
            {
                items: 1,
                nav: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]

            }
        );


    }, 300);

    /*
     $('.owl-sponsor').owlCarousel(
       {
         autoplay: true,
         autoplayTimeout: 5000,
         autoplayHoverPause: true,
         loop: true,
         responsive: {
           0: {
             items: 2,
             nav: false
           },
           960: {
             items: 4,
             nav: false
           },
           1240: {
             items: 4,
             nav: false
           }
         }
       }
     );

    */

    /**************************
     * TABS
     **************************/
/*

    $('.fdc-facebook-albums-isotope').isotope({
        itemSelector: '.grid-facebook',
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-facebook-sizer',
            gutter: 20
        }
    });
    $(".fdc-facebook-albums-isotope").isotope('layout').lightGallery({
        selector: 'a'
    });

*/
    /**************************
     * VENOBOX
     **************************/

    var venoOptions = {
        framewidth: '70%',
        frameheight: '70%',
        infinigall: false

    };

    $('.venobox').venobox(venoOptions);



    /**************************
     * PARAMETERS BY NAME
     **************************/
    function getParameterByName(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)'),
            results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }


    if (window.location.pathname.substring(0, 13).toLowerCase() === '/reservation/') {
        var service_1 = getParameterByName('cat');
        var service_2 = getParameterByName('subcat');
        var service_3 = getParameterByName('item');
        $('input[name ="your-name"]').val(getParameterByName('firstname'));
        $('input[name ="your-family-name"]').val(getParameterByName('lastname'));
        $('input[name ="your-email"]').val(getParameterByName('email'));


        if (service_1 != '') {
            $('#select-1').val(service_1);
            $('#date-1').closest('.vc_column_container').removeClass('vc_col-sm-6').addClass('vc_col-sm-4');
            $('#select-1').closest('.vc_column_container').removeClass('vc_col-sm-6').addClass('vc_col-sm-4');
            setTimeout(function () {
                $('#select-2').closest('.vc_column_container').fadeIn();
            }, 600);
        }
        if (service_2 != '') {

            $.ajax({
                type: "POST",
                url: my_ajax_object.ajax_url,
                dataType: "json",
                data: {
                    action: 'data_custom_ajax',
                    step: 1,
                    text: service_1,
                },
                success: function (response) {
                    if (response.lenght != 0) {
                        console.log(response);
                        $('#select-2')
                            .find('option')
                            .remove()
                            .end()
                            .append('<option value="Select">Select</option>');

                        /* var k = Object.keys(response.data_result);
                         for (var i = 0; i < k.length; i++) {
                             $('#select-2').append('<option value="' + response.data_result[k[i]] + '">' + response.data_result[k[i]] + '</option>');
                         }*/

                        response.data_result.forEach(function (item) {

                            if (item.name != undefined) {
                                $('#select-2').append('<option value="' + item.name + '">' + item.name + '</option>');
                            }
                            else {
                                $('#select-2').append('<option value="' + item.post_title + '">' + item.post_title + '</option>');

                            }
                        });

                        $('#select-2').attr('disabled', false);
                        $('#select-2').val(service_2);
                        jQuery('#select-2').closest('.vc_column_container').fadeIn(100);
                    }
                    else {
                        alert("fail");
                    }
                }
            });


        }

        if (service_3 != '') {
            $('#date-1').closest('.vc_column_container').removeClass('vc_col-sm-6').addClass('vc_col-sm-3');
            $('#select-1').closest('.vc_column_container').removeClass('vc_col-sm-6').addClass('vc_col-sm-3');
            $('#select-2').closest('.vc_column_container').removeClass('vc_col-sm-4').addClass('vc_col-sm-3');
            setTimeout(function () {
                $('#select-3').closest('.vc_column_container').fadeIn();
            }, 600);

            $.ajax({
                type: "POST",
                url: my_ajax_object.ajax_url,
                dataType: "json",
                data: {
                    action: 'data_custom_ajax',
                    step: 2,
                    select_1: service_1,
                    select_2: service_2
                },
                success: function (response) {
                    if (response.lenght != 0) {
                        console.log(response);

                        $('#select-3')
                            .find('option')
                            .remove()
                            .end()
                            .append('<option value="Select">Select</option>');

                        var k = Object.keys(response.data_result);

                        for (var i = 0; i < k.length; i++) {
                            $('#select-3').append('<option value="' + response.data_result[k[i]] + '">' + response.data_result[k[i]] + '</option>');
                        }
                        /*
                                            response.data_result.forEach(function (item) {
                                                $('#select-2').append('<option value="' + item.name + '">' + item.name + '</option>');
                                            });
                        */
                        $('#select-3').attr('disabled', false);
                        $('#select-3').val(service_3);
                    }
                    else {
                        alert("fail");
                    }
                }

            });

        }

        console.log(service_1 + service_2 + service_3);
    }



});
