<!--
Author: SaintsWebnology
Author URL: http://saintswebnology.com
-->
<!DOCTYPE html>
<html>
<head>

    @if( Request::is( Config::get('chatter.routes.home')) )
        <title>Forums - Monumenta</title>
    @elseif( Request::is( Config::get('chatter.routes.home') . '/*' ) && isset($discussion->title))
        <title>{{ $discussion->title }} - Monumenta</title>
    @else
        <title>@yield('title')</title>
    @endif


<!-- CSS STYLE -->
    <link rel="stylesheet" href="{{  URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  URL::to('css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/animate.css')  }}"><!-- load animate -->
    <link rel="stylesheet" href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')  }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/aos.css')  }}">


    <!-- META for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="theme-color" content="rgba(1, 161, 133, 0.65)" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- JAVASCRIPT -->
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //JAVASCRIPT -->
    <!-- //for-mobile-apps -->
    <!-- js -->
    <script type="application/javascript" src="{{ URL::to('js/jquery.min.js')  }}"></script>
        <script type="text/javascript">
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
    <!-- //js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js')  }}"></script>
    <script>
        $(document).ready(function () {
            var mySelect = $('#first-disabled2');

            $('#special').on('click', function () {
                mySelect.find('option:selected').prop('disabled', true);
                mySelect.selectpicker('refresh');
            });

            $('#special2').on('click', function () {
                mySelect.find('option:disabled').prop('disabled', false);
                mySelect.selectpicker('refresh');
            });

            $('#basic2').selectpicker({
                liveSearch: true,
                maxOptions: 1
            });
        });
    </script>

    <link href="{{ URL::to('css/jquery.uls.css')  }}" rel="stylesheet"/>
    <link href="{{ URL::to('css/jquery.uls.grid.css')  }}" rel="stylesheet"/>
    <link href="{{ URL::to('css/jquery.uls.lcd.css')  }}" rel="stylesheet"/>
    <script>
        $(document).ready(function () {
            $('.uls-trigger').uls({
                onSelect: function (language) {
                    var languageName = $.uls.data.getAutonym(language);
                    $('.uls-trigger').text(languageName);
                },
                quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
            });
        });
    </script>
    @yield('chatter-css')

    <link href="{{ URL::to('css/sweetalert.css')  }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::to('css/style.css')  }}" rel="stylesheet" type="text/css" media="all"/>

    @yield('extra-head')
</head>

<body>
<div class="se-pre-con"></div>

<!-- Source -->
<script async type="text/javascript" src="{{ URL::to('js/modernizr.custom.js')  }}"></script>
<script src="{{ URL::to('js/jquery.uls.data.js')  }}"></script>
<script src="{{ URL::to('js/jquery.uls.data.utils.js')  }}"></script>
<script async src="{{ URL::to('js/jquery.uls.lcd.js')  }}"></script>
<script async src="{{ URL::to('js/jquery.uls.languagefilter.js')  }}"></script>
<script async src="{{ URL::to('js/jquery.uls.regionfilter.js')  }}"></script>
<script src="{{ URL::to('js/jquery.uls.core.js')  }}"></script>
<script async src="{{ URL::to('js/jquery.leanModal.min.js') }}"></script>
<script async type="text/javascript" src="{{ URL::to('js/jquery.validate.min.js')  }}"></script>
<script async type="text/javascript" src="{{ URL::to('js/sweetalert.min.js')  }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap-select.js')  }}"></script>

@include('sweet::alert')




<!-- header section starts -->
@include('includes.header')
<!-- header section end -->

<!-- banner section starts -->
@yield('banner')
<!-- banner section ends -->

<!-- content-starts-here -->
<div class="content">

@yield('content')

<!--footer section start-->
@yield('footer')
<!--footer section end-->
</div>
@include('flashy::message')
@yield('chatter-js')
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Ubuntu Condensed', 'Roboto:300', 'Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic']
        }
    });
</script>
<script type="text/javascript" src="{{ URL::to('js/aos.js') }}"></script>
<script src="{{ URL::to('js/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/main.js') }}"></script>
<script type="text/javascript">
    AOS.init({
        easing: 'ease-in-out-sine'
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script type="text/javascript">
    (function ($) {
        function setFixed() {
            var ost = 0;
            var ast = $(window).width();
            $(window).resize(function(){
                ast = $(window).width();
            });
            $(window).scroll(function () {
                var cOst = $(this).scrollTop();
                if (cOst > 150 && cOst > ost) {
                    $('#header').addClass('fixed').removeClass('default');
                    $('.container-search').css({'top': '-470px'});
                }
                else {
                    $('#header').addClass('default').removeClass('fixed');
                    if(ast >= 650){
                        $('.container-search').css({'top': '70px'});
                    }else if(ast >= 350 && ast < 650){
                        $('.container-search').css({'top': '110px'});
                    }else if(ast < 350){
                        $('.container-search').css({'top': '70px'});
                    }


                }
                if (cOst < 150) {
                    $('.container-search').css({'position': 'absolute'});
                    $('#header').css({'position': 'relative'});
                } else {
                    $('.container-search').css({'position': 'fixed'});
                    $('#header').css({'position': 'fixed'});
                }
                ost = cOst;
            });
        }
        setFixed();
        $(window).resize(setFixed());
    })(jQuery);
    $('#regionBtn').on('click', function () {
        $('.modal-backdrop').css({'z-index': '940'});
    });
</script>
<script type="text/javascript">
    var ast = $(window).width();
    if(ast < 750){
        $("#change-js-script").attr("data-aos", "fade-right");
    }
    $(window).resize(function(){
        ast = $(window).width();
        if(ast < 750){
            $("#change-js-script").attr("data-aos", "fade-right");
        }
    });
</script>
<script type="text/javascript">
    $('.main-banner').parallax({imageSrc: 'images/banner.jpg'});
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93504971-1', 'auto');
    ga('send', 'pageview');

</script>