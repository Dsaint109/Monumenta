/**
 * Created by Saints on 2/23/2017.
 */

$(document).ready(function(){



    $('body').delay(600).animate({ scrollTop: 490}, "slow");

    $('.occasional-creator-child').hide();

    $('.occasional-creator h5').on('click', function() {
        $('.selectpicker').selectpicker('deselectAll');
        $('.occasional-creator-child').toggle(200);
    });


    $('#create-occasional').on('changed.bs.select', function(e, c){
        if(c == 1){
            occasionalSelected(c);

        }else if(c == 2){
            occasionalSelected(c);
        }
        $('.occasional-creator h5').trigger('click');
        $(this).selectpicker('deselectAll');
    });


    //region Variable Declarations

    var count = 0;

    var colorArray = [];

    var optionNames = [];

    var optionValues = [];

    var tags = [];

    var j;

    var sa = {
        loader: $('<div />', { class: 'loader'})
    };

    var ehe;

    //endregion

    $("#color").spectrum({
        color: "#333639",
        preferredFormat: "hex",
        containerClassName: 'chatter-color-picker',
        cancelText: '',
        chooseText: 'Select',
        clickOutFiresChange: true,
        change: function(color){count = colorSelected(color, count)}
    });



    function colorSelected(color, count) {

        var howMany = $('.colors-attr li').length;

        var colorElement = '<li data-color-for="'+ count +'">' +
                                '<a href="#" class="rem-color" data-color-for="'+ count +'" id="color[' + count + ']">' +
                                    '<span  style="background-color: ' + color.toHexString() + '"></span>' +
                                '</a>' +
                            '</li>';

        var colorImageElem = '<div class="row" data-color-for="'+ count +'">' +
                                '<span class="color-span rem-color" data-color-for="'+ count +'" style="background-color:' + color.toHexString() +'"></span>' +
                             '</div>' +
                            '<div class="row re-20" data-a="1" data-color-for="'+ count +'">' +
                                '<div class="col-sm-4">' +
                                    '<form enctype="multipart/form-data" id="form['+ howMany +']_1" method="post" data-b="1"> '+
                                        '<input type="file" class="dropify" name="image" data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png svg" />' +

                                        '<input type="hidden" name="_optionV" value="">' +
                                    '</form>' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                    '<form enctype="multipart/form-data" id="form['+ howMany +']_2" method="post" data-b="1"> '+
                                        '<input type="file" class="dropify" name="image" data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png svg" />' +

                                        '<input type="hidden" name="_optionV" value="">' +
                                    '</form>' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                    '<form enctype="multipart/form-data" id="form['+ howMany +']_3" method="post" data-b="1"> '+
                                        '<input type="file" class="dropify" name="image" data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png svg" />' +

                                        '<input type="hidden" name="_optionV" value="">' +
                                    '</form>' +
                                '</div>' +
                            '</div>';


        if (howMany <= 4) {

            if (howMany > 0) {

                $('.colors-attr').append(colorElement);
                $('#img-form-gen').show(200).append(colorImageElem);
                watch(color.toHexString());
                count++;
                return count;

            } else {

                $('.colors-attr').html(colorElement);
                $('#img-form-gen').show(200).append(colorImageElem);
                watch(color.toHexString());
                count++;
                return count;
            }

        } else {
            sweetAlert("Max amount exceeded", "You cannot have more than 4 colors! Click on a color or refresh page to remove it.", "error");
        }

    }


    function watch(c){

        colorArray.push(c);

        $('.dropify').dropify();

        $('.rem-color').on('click', function (e) {
            e.preventDefault();
            removeColor($(this).data('color-for'));

            if($('.colors-attr li').length == 0) {
                $('#img-form-gen').hide(100);
            }


        });

        $('.dropify').on('change', function () {
            ehe = getFormData();
        });

    }


    function removeColor(id) {

        colorArray[id] = "";

        $('[data-color-for = ' + id + ']').remove();

        $('.dropify').on('change', function () {
            ehe = getFormData();
        });
    }




    function occasionalSelected(type) {

        var optionsElem = $('#options');

        var howMany = optionsElem.children().length;

        var optionsMultipleElement = '<div class="occasional occasional-multiple" data-occasional-multiple="'+ howMany +'">' +
                                '<h4>OPTION NAME : <input type="text" data-occasional-name="1" data-for-me="'+howMany+'" data-occasional-type="1" value="e.g. SIZE" autofocus style="width: 50%;"><i class="fa fa-pencil-square-o" data-togle="tooltip" data-placement="bottom" title="edit"></i></h4>' +
                                '<h4> OPTION VALUE : </h4>' +
                                '<div class="colr ert">' +
                                    '<div class="check">'+
                                        '<label class="checkbox"><input type="checkbox" name="checkbox['+ howMany +']" value="" checked=""><i> </i><span data-multipled-label="0">SMALL</span></label>' +
                                        '<input type="text" data-has-auto-replace="1" data-multipled-for="0" data-value="1" data-value-for="'+ howMany +'" data-value-for-type="1" value="SMALL"><i class="fa fa-pencil-square-o"  title="edit"></i>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="colr">' +
                                    '<div class="check">' +
                                        '<label class="checkbox"><input type="checkbox" name="checkbox['+ howMany +']"><i> </i><span data-multipled-label="1">MEDIUM</span></label>' +
                                        '<input type="text" data-has-auto-replace="1" data-multipled-for="1" data-value="1" data-value-for="'+ howMany +'" data-value-for-type="1" value="MEDIUM"><i class="fa fa-pencil-square-o" title="edit"></i>' +
                                    '</div>' +
                                '</div>'+
                                '<div class="colr">'+
                                    '<div class="check">'+
                                        '<label class="checkbox"><input type="checkbox" name="checkbox['+ howMany +']"><i> </i><span data-multipled-label="2">LARGE</span></label>'+
                                        '<input type="text" data-has-auto-replace="1" data-multipled-for="2" data-value="1" data-value-for="'+ howMany +'" data-value-for-type="1" value="LARGE"><i class="fa fa-pencil-square-o" title="edit"></i>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="colr">' +
                                    '<div class="check">' +
                                        '<label class="more-multiple-optionvalues"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp; More Option Values</label>' +
                                    '</div>' +
                                '</div>' +
                               '<div class="clearfix"> </div>' +
                            '</div>';

        var optionsSelectElement = '<div class="occasional occasional-selectable">' +
                                        '<h4>OPTION NAME : <input type="text" data-occasional-name="1" data-for-me="'+howMany+'" data-occasional-type="2" value="e.g SHIRT DETAILS" style="width: 50%"><i class="fa fa-pencil-square-o" data-togle="tooltip" data-placement="bottom" title="edit"></i></h4>' +
                                        '<h4> OPTION VALUE : </h4>' +
                                        '<ul>' +
                                            '<li>' +
                                                '<input type="radio" id="f-option[0]" name="selector['+ howMany +']" checked>' +
                                                '<label data-selected-label="0" for="f-option[0]">Long Sleeves</label>' +
                                                '<input  data-has-auto-replace="1" type="text" data-selected-for="0" data-value="1" data-value-for="'+ howMany +'" data-value-for-type="2" name="" value="Long Sleeves"><i class="fa fa-pencil-square-o"  title="edit"></i>' +
                                                '<div class="check"></div>' +
                                            '</li>' +
                                            '<li>' +
                                                '<input type="radio" id="s-option[0]" name="selector['+ howMany +']">' +
                                                '<label data-selected-label="1" for="s-option[0]">Short Sleeve</label>' +
                                                '<input data-has-auto-replace="1" data-selected-for="1" data-value="1" data-value-for="'+ howMany +'" data-value-for-type="2" type="text" name="" value="Short Sleeves"><i class="fa fa-pencil-square-o"  title="edit"></i>' +
                                                '<div class="check"><div class="inside"></div></div>' +
                                            '</li>' +
                                            '<li>' +
                                                '<input type="radio" id="t-option[0]" name="selector['+ howMany +']">' +
                                                '<label data-selected-label="2" for="t-option[0]">Sleeveless</label>' +
                                                '<input data-has-auto-replace="1" data-selected-for="2" data-value="1" data-value-for="'+ howMany +'" data-value-for-type="2" type="text" name="" value="Sleeveless"><i class="fa fa-pencil-square-o"  title="edit"></i>' +
                                                '<div class="check"><div class="inside"></div></div>' +
                                            '</li>' +
                                        '</ul>' +
                                        '<div class="colr">' +
                                            '<div class="check">' +
                                                '<label class="more-multiple-optionvalues"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp; More Option Values</label>' +
                                            '</div>' +
                                        '</div>' +
                                        '<div class="clearfix"> </div>' +
                                    '</div>';


        if(howMany < 2){

            if(type == 1){

                optionsElem.append(optionsMultipleElement);
                watchOptions();

            }else{

                optionsElem.append(optionsSelectElement);
                watchOptions();

            }


        }else{

            sweetAlert("Max amount exceeded", "You cannot have more than 2 options! Click on a remove or refresh page to remove it.", "error");
        }


    }


    function watchOptions() {


        $('[data-has-auto-replace=1]').on('keyup keydown', function () {

            var identifier = $(this).data('selected-for');

            var val = $(this).val();

            autoReplace(identifier, val);


            var identifier1 = $(this).data('multipled-for');

            var val1 = $(this).val();

            autoReplace1(identifier1, val1);



        });

        getOptions();


    }

    function autoReplace(identifier, val) {

        $('[data-selected-label='+ identifier +']').html(val);

    }

    function autoReplace1(identifier, val) {

        $('[data-multipled-label='+ identifier +']').html(val);

    }


    function makeData() {

        getOptionNames();

        getChips();

        var data = "";

        var string = "_token=";

        string = string.concat($('input[name=_token]').val());

        string = string.concat("&_shop=");

        string = string.concat($('input[name=_shop]').val());

        string = string.concat('&name=');

        string = string.concat(encodeURIComponent($('#product-name').val()));

        string = string.concat('&description=');

        string = string.concat(encodeURIComponent($('#description').val()));

        string = string.concat('&color=');

        string = string.concat(colorArray);

        string = string.concat('&category=');

        string = string.concat($('#category').val());

        string = string.concat('&stock=');

        string = string.concat(encodeURIComponent($('#stock').html()));

        string = string.concat('&tags=');

        string = string.concat(encodeURIComponent(tags));

        string = string.concat('&option_names=');

        string = string.concat(encodeURIComponent(optionNames));

        string = string.concat('&option_values=');

        string = string.concat(encodeURIComponent(optionValues));

        string = string.concat('&not_price=');

        string = string.concat(encodeURIComponent($('.not-price').val()));

        string = string.concat('&price=');

        string = string.concat(encodeURIComponent($('.price').val()));

        data = string;

        tags = [];

        optionNames = [];

        optionValues = [];

        return data;

    }

    function getOptions(){


        var h = $('[data-occasional-name="1"]').length;

        j = h;


    }

    function getOptionNames() {

        for (var i = 0; i < j; i++ ) {

            var s = $('[data-occasional-name="1"]').eq(i).val();
            var t = $('[data-occasional-name="1"]').eq(i).data('occasional-type');
            var u = s +"*-*"+ t;

            optionNames.push(u);
        }

        var f = $('[data-value="1"]');

        for (var g = 0; g < f.length; g++){

            var l = f.eq(g).val();
            var m = f.eq(g).data('value-for');
            var n = $('[data-for-me="'+ m +'"]').val()
            var o = l + "*_*" + n;

            optionValues.push(o);

        }

    }

    function getChips() {

        var c = $('.chip');
        var d = c.length;

        for (var e = 0; e < d; e++){

            var f = c.eq(e).text();
            var g = f.slice(0, -5);


            tags.push(g);
        }


    }


    $('.item_add').on('click', function (e) {

        e.preventDefault();

        var data = makeData();

        var a = $('input[name=_shop]').val();

        var url = '/Products/'+ a +'/Add';

        $.ajax({
            url: url,
            data: data,
            method: 'POST',
            beforeSend: function () {

                $('.simpleCart_shelfItem').append(sa.loader);

            },
            error: function (e) {

                var er = e.responseText;
                var re = /{/gi;
                var err = er.replace(re, "");
                var re = /"/gi;
                var erro = err.replace(re, "");
                var re = /}/gi;
                var error = erro.replace(re, "");

                swal("Whoops!", error, "error");

                $('.simpleCart_shelfItem').find(sa.loader).remove();

            },
            success: function (respond) {

                submitImages(respond);

            }
        });

    });

    function submitImages(r) {

        var b = $('[data-a="1"]');

        //Beware Confussion Awaits Thee
        for (var i = 0; i < b.length; i++){


            var c = b.eq(i).children();

            for(var j = 0; j < c.length; j++){

                var d = c.eq(j).children();

                for(var k = 0; k < d.length; k++){

                    var e = d.eq(k).children("input[name=_optionV]");

                    for(var l = 0; l < e.length; l++){

                        e.eq(l).val(r[i]);

                    }

                }

            }

        }


        var ab = $('[data-b="1"]');

        $('.item_add').hide();

        $('.paoss').show(100);

        for (var z = 0; z < ab.length; z++){

            var ac = ab.eq(z);


            ac.submit(function (e) {
                e.preventDefault();

                var opv = ac.children('input[name=_optionV]').val();
                var processor = '/My-Products/Add/' + opv;

                var request = new XMLHttpRequest();

                var formId = ac.attr('id');

                var form = document.getElementById(formId);

                var formdata = new FormData(form);


                request.upload.addEventListener('progress', function(event){
                    var percent;

                    if(event.lengthComputable === true){
                        percent = Math.round((event.loaded / event.total) * 100);
                        setProgress(percent);
                        if(percent == 100){
                            transferCompleted(request);
                        }
                    }
                });

                request.open('post', processor);
                request.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                request.send(formdata);
            });

            ac.trigger('submit');

        }


    }

    function setProgress(value){

        var progressBar = document.getElementById('pb');

        var progressText = document.getElementById('pt');

        if (progressBar !== undefined) {

            progressBar.style.width = value ? value + '%' : 0;

        }
        if (progressText !== undefined) {

            progressText.innerText = value ? value + '%' : '';

        }

    }

    var az = 0;

    var ay = $('[data-b="1"]').length;

    var ax = ay + 1;

    function getFormData(){

        var form = $('#colorImages');

        var d = form.serialize();

        return d;
    }

    function redirectPage(){
        window.location.href = "http://fashion.localhost:9000/My-Products/All";
    }

    function transferCompleted(data) {

        if (az == ax){

            data.addEventListener('readystatechange', function(){
                if (this.readyState === 4) {
                    if(this.status === 200){
                        sweetAlert("Congratulations", "Your product has been added successfully. you'll be redirected automatically", "success");

                        setTimeout(redirectPage(), 15000);
                    }
                }
            });

        }
        az++;

    }

    
});





