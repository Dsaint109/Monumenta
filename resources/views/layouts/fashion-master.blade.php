<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <meta name="keywords" content="@yield('keywords')" />


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="theme-color" content="#ad1457">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
    <!-- //for-mobile-apps -->


    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::to('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ URL::to('css/animate.css')  }}"><!-- load animate -->
    <link href="{{ URL::to('Fashion/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::to('Fashion/css/fasthover.css') }}" rel="stylesheet" type="text/css" media="all" />



    <!-- js -->
    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js')  }}"></script>
    <!-- //js -->



    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <!-- //for bootstrap working -->



    <script type="text/javascript">
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

    <!-- start-smooth-scrolling -->
    <script type="text/javascript">

        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    @yield('extra-head')

</head>

<body>
<div class="se-pre-con"></div>


<!-- swal -->
<link href="{{ URL::to('css/sweetalert.css')  }}" rel="stylesheet" type="text/css" media="all"/>
<script async src="{{ URL::to('js/sweetalert.min.js')  }}"></script>


<!--flexisel -->

<script async src="{{ URL::to('Fashion/js/jquery.flexisel.js')  }}"></script>

@include('sweet::alert')
<!-- //swal -->



@include('Fashion.includes.modal')

<!-- header -->
@include('Fashion.includes.header')
<!-- //header -->


<!-- banner -->
@yield('banner')
<!-- //banner -->

<!-- breadcrumbs -->
@yield('breadcrumbs')
<!-- //breadcrumbs -->

<!-- Content -->
@yield('content')
<!-- //Content -->


@yield('banner-bottom')




@yield('new-products')




@yield('special-deals')




@yield('top-brands')




@yield('newsletter')




@yield('footer')



<!-- flashy -->
@include('flashy::message')
<!-- //flashy -->

</body>

</html>
<script async type="text/javascript" src="{{ URL::to('Fashion/js/jquery.flexisel.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93504971-1', 'auto');
    ga('send', 'pageview');

</script>