/**
 * Created by Saints on 2/20/2017.
 */

$(function() {


    $('#shopName').on('keyup', function(){

        var key = $(this).val();

        var keyCount = key.length;

        var dispCount = 24 - keyCount;



        if(keyCount >= 16)
        {
            $('.fill-logo h1').css('font-size', '2.5em');

        }else if(keyCount < 16)
        {
            $('.fill-logo h1').css('font-size', '3.5em');
        }

        $('#fill-text-name').html(key);

        $('.text-counter').html(dispCount);



    })

    $('#catchPhrase').on('keyup', function(){

        var key = $(this).val();

        var keyCount = key.length;

        var dispCount = 42 - keyCount;

        $('#fill-text-cp').html(key);

        $('.cat-counter').html(dispCount);

    });




    $('input:file').change(function (){

        var form = $('#uploadLogo');

        form.validate({
            rules: {
                logo: {
                    required: true,
                    extension: "jpeg|jpg|png"
                }
            }
        });

        if (form.valid())
        {
            form.submit();

        }
        else
        {
            swal('Oops!!', 'Wrong Image format', 'error');
        }

    });


});