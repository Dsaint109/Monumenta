/**
 * Created by Saints on 2/17/2017.
 */



$(function() {

/*
    var res = {
        loader: $('<div />', { class : 'loader'}),
        container: $('.person-img')
    };

    $('#upload').submit(function (event) {

        event.preventDefault();

        var form = $(this);

        var data = form.serialize();

        $.ajax({
            url: '/profile',
            data: data,
            method: 'post',
            beforeSend: function () {
                res.container.append(res.loader);
            },
            success: function (respond) {
                res.container.find(res.loader).remove();
                $('#needNameOf').attr('src', respond.link);
            },
            error: function (e) {
                res.container.find(res.loader).remove();
            }
        });

    });*/


    $('input:file').change(function (){

        var form = $('#upload');

        form.validate({
            rules: {
                avatar: {
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














    //Editing Of Personal Information

    $('#edit-btn').on('click', function (e) {

        e.preventDefault();

        $('.toHideAtFirst').hide();

        $("body").animate({ scrollTop: 200 }, "slow");

        $('.tSAF').show();

        $('.toShowAtFirst').show('200');

        $(this).hide();

        $('#submit-edit-btn').show();

    });

    $('#piForm').submit(function (event) {

        event.preventDefault();

        var form = $(this);

        var data = form.serialize();

        $.ajax({
            url: '/details',
            data: data,
            method: 'post',
            success: function (respond) {
                $('.nameOf').html(respond.name);
                $('#ageOf').html(respond.age + ' Years Old');
                $('#phoneOf').html(respond.phone);
                $('#addressOf').html(respond.address);
                $('#facebookURL').attr('href', 'http://' + respond.facebook);
                $('#twitterURL').attr('href', 'http://' + respond.twitter);
                $('#googleURL').attr('href', 'http://' + respond.google);
                $('#linkedinURL').attr('href', 'http://' + respond.linkedin);
            },
            error: function (error) {
                alert(error);
            }
        });

    });

    $('#submit-edit-btn').on('click', function (e){

        e.preventDefault();

        var phone = $('#phoneInput').val();
        var age = $('#ageInput').val();

        if (!phone) {
            $('#phoneInput').val(0);
        }

        if (!age) {
            $('#ageInput').val(0);
        }

        $('#piForm').submit();

        $("body").animate({ scrollTop: 0 }, "slow");

        $('.toShowAtFirst').hide();

        $('.tSAF').hide();

        $('.toHideAtFirst').show('100');

        $(this).hide();

        $('#edit-btn').show();


    });










    //Bio
    $('#edBio').on('click', function (e) {

        e.preventDefault();

        $('#bioText').hide();

        $('#edBio').hide();

        $('#confirmBioEdit').show();

        $('.edBioTextArea').show(100);


    });


    $('#bioForm').submit(function (event) {

        event.preventDefault();

        var form = $(this);

        var data = form.serialize();

        $.ajax({

            url: '/bio',
            method: 'post',
            data: data,
            success: function(respond){
                $('#bioText').html(respond.bio);
            },
            error: function (error) {
                alert(error);
            }
        });

    });






    $('#confirmBioEdit').on('click', function (e){

        e.preventDefault();

        $('.edBioTextArea').hide();

        $('#confirmBioEdit').hide();

        $('#bioForm').submit();

        $('#edBio').show();

        $('#bioText').show(100);

    });

});