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



    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <!-- //for bootstrap working -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">


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


@yield('banner-bottom')




@yield('new-products')




@yield('special-deals')




@yield('top-brands')




@yield('newsletter')




@yield('footer')

<!-- swal -->
<script src="{{ URL::to('js/sweetalert.min.js')  }}"></script>
@include('sweet::alert')
<!-- //swal -->

<!-- flashy -->
@include('flashy::message')
<!-- //flashy -->

</body>

</html>
<script type="text/javascript" src="{{ URL::to('Fashion/js/jquery.flexisel.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>