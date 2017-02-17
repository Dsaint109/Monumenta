<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <meta name="keywords" content="@yield('keywords')" />


    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <link href="{{ URL::to('Fashion/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::to('Fashion/css/fasthover.css') }}" rel="stylesheet" type="text/css" media="all" />



    <!-- js -->
    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js')  }}"></script>
    <!-- //js -->


    <!-- countdown -->
    <link rel="stylesheet" href="{{ URL::to('Fashion/css/jquery.countdown.css') }}" />
    <!-- //countdown -->



    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <!-- //for bootstrap working -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>


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

<!-- banner-bottom -->
@yield('banner-bottom')
<!-- //banner-bottom -->


<!-- new-products -->
@yield('new-products')
<!-- //new-products -->


<!-- special-deals -->
@yield('special-deals')
<!-- //special-deals -->


<!-- top-brands -->
@yield('top-brands')
<!-- //top-brands -->


<!-- newsletter -->
@yield('newsletter')
<!-- //newsletter -->


<!-- footer -->
@yield('footer')
<!-- //footer -->
@include('sweet::alert')
@include('flashy::message')
</body>

</html>
<script type="text/javascript" src="{{ URL::to('Fashion/js/jquery.flexisel.js') }}"></script>