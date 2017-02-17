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
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                    <div class="col-xs-2 w3ls_about_grid_left1">
                        <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 w3ls_about_grid_left2">
                        <p>Sunt in culpa qui officia deserunt mollit
                            anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-xs-2 w3ls_about_grid_left1">
                        <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 w3ls_about_grid_left2">
                        <p>Sunt in culpa qui officia deserunt mollit
                            anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3ls_about_grid_right">
                    <img src="images/Fashion/77.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="team-bottom">
        <div class="container">
            <h3>Are You Ready For Awesomeness? Flat <span>50% Offer</span> For Women's</h3>
            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                repellat.</p>
            <a href="dresses.html">Start Now</a>
        </div>
    </div>
@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection