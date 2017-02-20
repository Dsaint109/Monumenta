@extends('layouts.fashion-master')

@section('title')
    About Monumenta Fashion
@endsection

@section('keywords')
    Monumenta Fashion, Fashion, Clothes
@endsection

@section('banner')
    <div class="banner10" id="home1">
        <div class="container">
            <h2>About Us</h2>
        </div>
    </div>
@endsection

@section('breadcrumbs')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('fashion-home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="about">
        <div class="container">
            <div class="w3ls_about_grids">
                <div class="col-md-6 w3ls_about_grid_left">
                    <p>
                        Monumenta Fashion is a platform that allows fashion stores
                        and buyer to come together. It is a subset of Monumenta and offers
                        the same speed and reliability of Monumenta. This awesome platform is secure and
                        handles the unnecessary details of building your own store.
                    </p>
                    <div class="col-xs-2 w3ls_about_grid_left1">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 w3ls_about_grid_left2">
                        <p>
                            <b>Fashion Shops</b> on Monumenta Fashion - As a shop
                            on Monumenta Fashion you have the ability to post your products easily.
                            after a product is purchased you receive automatic notifications. This
                            is the best way to expand <b><span class="glyphicon glyphicon-fullscreen"></span> </b> your brand's reach.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-xs-2 w3ls_about_grid_left1">
                        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 w3ls_about_grid_left2">
                        <p>
                            <b>Customers</b> on Monumenta Fashion - As a customer
                            on Monumenta Fashion you have access to a wide variety of Fashion styles
                            and current trends as fast as possible. Your data is secure <b><span class="glyphicon glyphicon-lock"></span> </b> with us.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3ls_about_grid_right">
                    <img src="images/Fashion/77.jpg" alt=" " style="border-radius: 7px;border: 10px solid #fafafa;" class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="team-bottom">
        <div class="container">
            <h3>Are You Ready For Awesomeness? Create your <span>Shop</span> on Monumenta Fashion</h3>
            <p>
                Hurry up and create your Fashion Shop on Monumenta Fashion now.
                <em>Note: </em> <b>Only Fashion Shops</b> are allowed and accepted on Monumenta
                Fashion
            </p>
            <a href="{{ route('fashion-sell') }}">Start Now</a>
        </div>
    </div>
@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection