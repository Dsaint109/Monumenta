@extends('layouts.master')

@section('title')
    Download Our App - Monumenta
@endsection

@section('keywords')
    das
@endsection

@section('banner')
    @include('includes.search-banner')
@endsection

@section('content')

    <!-- Terms of use -->
    <div class="mobilaapp main-grid-border">
        <div class="container">
            <div class="app">
                <div class="col-md-5 app-left mpl">
                    <h2>Monumenta mobile app on your smartphone!</h2>
                    <p>Connect with Monumenta.biz quickly and easily straight from your phone.</p>
                    <div class="app-devices">
                        <h5>Get the app from</h5>
                        <a href="#"><img src="images/1.png" alt=""></a>
                        <a href="#"><img src="images/2.png" alt=""></a>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-7 app-image">
                    <img src="images/mob2.png" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="app-bottom-grids text-center">
            <div class="container">
                <div class="col-md-3 app-bottom-grid">
                    <i class="fa fa-search"></i>
                    <h3>Search</h3>
                    <p>Faster and Simpler Search form to help you find what you need in no time.<br></p>
                </div>
                <div class="col-md-3 app-bottom-grid">
                    <i class="fa fa-bell-o"></i>
                    <h3>Notifications</h3>
                    <p>Get notifications on your device when an event occurs.</p>
                </div>
                <div class="col-md-3 app-bottom-grid">
                    <i class="fa fa-plus"></i>
                    <h3>Add ads</h3>
                    <p>Easier to add Ads with our improved layout with material design.<br></p>
                </div>
                <div class="col-md-3 app-bottom-grid">
                    <i class="fa fa-reply-all"></i>
                    <h3>Get reply</h3>
                    <p>Keeping in touch with customers or agents has become easier.<br></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- // Terms of use -->

@endsection

@section('footer')
    @include('includes.footer')
@endsection