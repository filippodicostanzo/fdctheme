var $ = jQuery.noConflict();

$(document).ready(function () {

    $('#select-2').closest('.vc_column_container').fadeOut();
    $('#select-3').closest('.vc_column_container').fadeOut();

    $('#select-1').change(function (e) {

        $(this).closest('.vc_column_container').addClass('vc_col-sm-4');
        $('#date-1').closest('.vc_column_container').addClass('vc_col-sm-4');
        $('#select-2').closest('.vc_column_container').fadeOut();
        $('#select-3').closest('.vc_column_container').fadeOut();
        var text = $('#select-1').val();

        console.log(text);

        if (text == 'Service Type') {
            $('#select-2').attr('disabled', false);
            $('#select-2').closest('.vc_column_container').fadeOut();
            $('#select-3').closest('.vc_column_container').fadeOut();
            setTimeout(function () {
                $('#date-1').closest('.vc_column_container').removeClass('vc_col-sm-4').removeClass('vc_col-sm-3');
                $('#select-1').closest('.vc_column_container').removeClass('vc_col-sm-4').removeClass('vc_col-sm-3');
            }, 600);
        } else {
            console.log(text);
            $.ajax({
                type: "POST",
                url: my_ajax_object.ajax_url,
                dataType: "json",
                data: {
                    action: 'data_custom_ajax',
                    step: 1,
                    text: text,
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
                        jQuery('#select-2').closest('.vc_column_container').fadeIn(100);

                    }
                    else {
                        alert("fail");
                    }
                }

            });
        }
    });

    $('#select-2').change(function (e) {
        var select_1 = $('#select-1').val();
        var select_2 = $('#select-2').val();

        e.preventDefault();

        $.ajax({
            type: "POST",
            url: my_ajax_object.ajax_url,
            dataType: "json",
            data: {
                action: 'data_custom_ajax',
                step: 2,
                select_1: select_1,
                select_2: select_2
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

                    console.log(k.length);

                    if (k.length == 0) {

                        $('#select-3').closest('.vc_column_container').fadeOut();

                        setTimeout(function () {
                            $('#date-1').closest('.vc_column_container').removeClass('vc_col-sm-3');
                            $('#select-1').closest('.vc_column_container').removeClass('vc_col-sm-3');
                            $('#select-2').closest('.vc_column_container').removeClass('vc_col-sm-3');
                        }, 600);

                    }

                    else {

                        $('#date-1').closest('.vc_column_container').addClass('vc_col-sm-3');
                        $('#select-1').closest('.vc_column_container').addClass('vc_col-sm-3');
                        $('#select-2').closest('.vc_column_container').addClass('vc_col-sm-3');
                        $('#select-3').closest('.vc_column_container').addClass('vc_col-sm-3');
                        $('#select-3').closest('.vc_column_container').fadeIn();

                        for (var i = 0; i < k.length; i++) {
                            $('#select-3').append('<option value="' + response.data_result[k[i]] + '">' + response.data_result[k[i]] + '</option>');
                        }
                        /*
                                            response.data_result.forEach(function (item) {
                                                $('#select-2').append('<option value="' + item.name + '">' + item.name + '</option>');
                                            });
                        */
                        $('#select-3').attr('disabled', false);

                    }
                }
                else {
                    alert("fail");
                }
            }

        });

    });


});
