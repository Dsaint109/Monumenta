/**
 * Created by Saints on 1/19/2017.
 */
var ast = $(window).width();
var bst = $(window).height();

$(window).resize(function(){
    ast = $(window).width();
    bst = $(window).height();
});

var otp = 0;
var height = 0;

function activeSearchOpen() {
    $('.dg').hide(300);

    $(window).resize(function(){
        ast = $(window).width();
        bst = $(window).height();
    });

    if(ast >= 650){
        otp = 80;
    }else if(ast >= 450 && ast < 650) {
        otp = 130;
    }else if(ast >= 350 && ast < 450){
        otp = 110;
    }else if(ast < 350) {
        otp = 70;
    }



    height = bst - otp;

    if(ast >= 450 && ast < 650) {
        height += 20;
    }


    $("html").css({'overflow':'hidden'});
    $('.zn').show(500);

    $("body").delay(500).animate({ scrollTop: otp }, "slow");


    $('#active-search').focus();


    $('#search-box').css('height', height);
}

function activeSearchClose() {
    $('#search-box').css({'height':'0%'});
    $('.zn').hide(100);
    $("body").delay(200).animate({scrollTop: 0}, "slow");
    $("html").css({'overflow-y':'scroll'});
    $('.dg').show(200);
}
