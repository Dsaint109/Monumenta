@extends('layouts.master')

@section('title')
    @if(Auth::user())
        {{ $user->name }} - Monumenta
    @else
        Monumenta
    @endif
@endsection

@section('keywords')

@endsection

@section('extra-head')
    <style type="text/css">
        .clearfix {
        }
        .about-inner {
            margin: 60px 0;
        }
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font-family: 'Roboto', sans-serif;
        }
        .grey.lighten-5 {
            background-color: #fafafa !important;
        }
        .root-sec {
            position: relative;
        }
        .padd-tb-60 {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .grey {
            background-color: #9e9e9e !important;
        }
        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block;
        }
        @media only screen and (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }
        @media only screen and (min-width: 992px) {
            .container {
                width: 970px;
            }
        }
        @media only screen and (min-width: 768px){
            .container {
                width: 750px;
            }
            .container {
                padding: 0 15px;
                margin: 0 auto;
                max-width: 1170px;
                width: 90%;
            }
            .container {
                position: relative;
            }
        }
        .container .row {
            margin-right: -15px;
            margin-left: -15px;
        }
        .person-info h5 {
            border-bottom: 1px solid #eeeeee;
            color: #727272;
            font-size: 14px;
            margin-bottom: 12px;
            padding-bottom: 12px;
        }
        .about-social {
            margin: 25px 0 0;
        }

        .about-social ul li {
            display: inline-block;
            margin-right: 8px;
        }
        ul li {
            list-style-type: none;
        }
        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            z-index: 1;
            will-change: opacity, transform;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -ms-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .btn-floating {
            display: inline-block;
            color: #FFF;
            position: relative;
            z-index: 1;
            width: 37px;
            height: 37px;
            line-height: 37px;
            padding: 0;
            background-color: #26a69a;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background-clip: padding-box;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            -ms-transition: 0.3s;
            transition: 0.3s;
            cursor: pointer;
        }
        .z-depth-1, nav, .btn-floating {
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }
        .white {
            background-color: #FFFFFF !important;
        }
        .static-menu li i:hover, .static-menu li a:hover, .submenu-ul li a:hover, .home-title span, .about-subtitle, .person-about > a.btn-large, .about-social ul li a i, .skill-title, .skill-count, .single-widget ul li a, .single-post-content a, .share-post li a:hover, .com-title a, span.num {
            color: #1ABBAC;
        }
        .about-social ul li a i {
            font-size: 14px;
        }

        .btn-floating i {
            width: inherit;
            display: inline-block;
            text-align: center;
            color: #FFF;
            font-size: 1.6rem;
            line-height: 97px;
        }
        .btn i, .btn-large i, .btn-floating i, .btn-large i, .btn-flat i {
            font-size: 1.3rem;
            line-height: inherit;
        }
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transform: translate(0, 0);
        }
        .clearfix:after {
            clear: both;
        }
        .clearfix:before, .clearfix:after {
            content: " ";
            display: table;
        }
        .person-img img {
            border: 8px solid #fff;
        }
        .about-subtitle {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .person-about p {
            color: #727272;
            font-size: 14px;
            line-height: 28px;
            margin-bottom: 35px;
        }
        .top-h1{
            font-size: 26px;
            font-weight: bold;
            color:#1ABBAC;
            padding-left: 20px;
        }
        .clearfix1 {
            margin: 50px;
        }
        .person-img {
            position: relative;
            background-color: black;
        }
        .person-img-options {
            position: absolute;
            bottom: 0;
            margin-bottom: 20px;
            margin-right: 30%;
            margin-left: 30%;
            width: 40%;
        }
        .file-upload {
            position: relative;
            overflow: hidden;
            font-size: 20px;
            border: none;
            display: inline-block;
            margin-right: 8px;
        }

        .file-upload input.file-input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .file-upload i {
            font-size: 18px;
            color: #1ABBAC;
        }
        .file-upload:hover, .file-upload:hover i {
            background-color: #1ABBAC;
            color: #ffffff;
        }
        .breadcrumb li a {
            color: #1ABBAC;
        }

    </style>
@endsection

@section('content')
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="top">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active nameOf">{{ $user->name }}</li>
                    </ol>
                </div>
                <div class="clearfix about-inner">

                    <!-- About me image   -->
                    <div class="col-sm-6 col-md-4">
                        <div class="person-img wow fadeIn" data-toggle="tooltip" data-placement="top" title="{{ $user->name }}">
                            <img class="z-depth-1" id="needNameOf" src="/images/uploads/profile/{{ $user->avatar }}" alt="{{ $user->name }}" >
                        </div>
                    </div>
                    <!-- //about me image -->

                    <div class="clearfix1"></div>

                    <div class="col-sm-6 col-md-4">
                        <div class="person-info mainDetails">

                            <h3 class="about-subtitle">Personal Information</h3>

                                <h5>
                                    <span>Name :</span>&nbsp;&nbsp;&nbsp;&nbsp;

                                    <span class="toHideAtFirst nameOf">
                                    {{ $user->name }}
                                    </span>

                                </h5>

                                <h5>
                                    <span>Age :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <span class="toHideAtFirst" id="ageOf">
                                        @if( $user->details->age )
                                            {{ $user->details->age }} Years Old
                                        @else
                                            <em>Nothing to show</em>
                                        @endif
                                    </span>
                                </h5>

                                <h5>
                                    <span>Phone :</span>&nbsp;&nbsp;&nbsp;

                                    <span class="toHideAtFirst" id="phoneOf">
                                    @if( $user->details->phone )
                                            {{ $user->details->phone }}
                                        @else
                                            <em>Nothing to Show</em>
                                        @endif
                                    </span>

                                </h5>

                                <h5>
                                    <span>Email :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <span>
                                        {{ $user->email }}
                                    </span>


                                </h5>

                                <h5>
                                    <span>Address :</span>

                                    <span class="toHideAtFirst" id="addressOf">
                                        @if( $user->details->address )
                                            {{ $user->details->address }}
                                        @else
                                            <em>Nothing to Show</em>
                                        @endif
                                    </span>

                                </h5>
                        </div>

                        <div class="about-social">
                            <ul>

                                <li data-toggle="tooltip" data-placement="bottom" title="Facebook">
                                    <a href="http://{{ $user->details->facebook }}" target="_blank" id="facebookURL" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                                </li>

                                <li data-toggle="tooltip" data-placement="bottom" title="Twitter">
                                    <a href="http://{{ $user->details->twitter }}" target="_blank" id="twitterURL" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li data-toggle="tooltip" data-placement="bottom" title="Google">
                                    <a href="http://{{ $user->details->google }}" target="_blank" id="googleURL" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                                </li>

                                <li data-toggle="tooltip" data-placement="bottom" title="LinkedIn">
                                    <a href="http://{{ $user->details->linkedin }}" target="_blank" id="linkedinURL" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- about him info -->


                    <div class="clearfix1"></div>

                    <div class="col-sm-12 col-md-4">
                        <div class="person-about">
                            <h3 class="about-subtitle">My Bio</h3>

                            <p id="bioText">
                                @if ($user->details->bio)
                                    {!! $user->details->bio  !!}
                                @else
                                    <em>Nothing to Show</em>
                                @endif

                            </p>

                        </div>
                    </div>
                    <!-- about him description -->

                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <script type="text/javascript" src="{{ URL::to('js/jquery.form.min.js')  }}"></script>
    <script src="{{ URL::to('js/additional-methods.min.js')  }}"></script>

@endsection

@section('footer')
    @include('includes.footer')
@endsection