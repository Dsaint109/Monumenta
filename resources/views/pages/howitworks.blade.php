@extends('layouts.master')

@section('title')
    How it works - Monumenta
@endsection

@section('keywords')
    das
@endsection

@section('banner')
    @include('includes.search-banner')
@endsection

@section('content')
    <!-- How it works -->
    <div class="work-section" data-aos="fade-up">
        <div class="container">
            <h2 class="head">How It Works</h2>
            <div class="work-section-head text-center">
                <p>Fast, easy and free to post an ad and you will find, what you are looking for.</p>
            </div>
            <div class="work-section-grids text-center">
                <div class="col-md-3 work-section-grid">
                    <i class="fa fa-pencil-square-o"></i>
                    <h4>Post an Ad</h4>
                    <p> You can visit any of the categories and post an Ad on your brand. Or</p>
                    <span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
                </div>
                <div class="col-md-3 work-section-grid">
                    <i class="fa fa-eye"></i>
                    <h4>Find an item</h4>
                    <p> You can browse through our directory of products and services. Everything built to guarantee your satisfaction</p>
                    <span class="arrow2"><img src="images/arrow2.png" alt="" /></span>
                </div>
                <div class="col-md-3 work-section-grid">
                    <i class="fa fa-phone"></i>
                    <h4>contact the Agent</h4>
                    <p> Once you've seen what you're looking for, Order then we connect you with the agents. </p>
                    <span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
                </div>
                <div class="col-md-3 work-section-grid">
                    <i class="fa fa-money"></i>
                    <h4>make transactions</h4>
                    <p> Make the transaction and you're good to go. Simple as 1 2 3 4</p>
                </div>
                <div class="clearfix"></div>
                <a class="work" href="{{ route('home') }}">Get started Now</a>
            </div>
        </div>
    </div>
    <div class="happy-clients">
        <div class="container">
            <div class="happy-clients-head text-center wow fadeInRight" data-wow-delay="0.4s" data-aos="fade-in">
                <h3>Happy Clients</h3>
                <p>Clients testimonial about monumenta.biz</p>
            </div>
            <div class="happy-clients-grids">
                <div class="col-md-6 happy-clients-grid wow bounceIn" data-wow-delay="0.4s" data-aos="fade-right">
                    <div class="client">
                        <img src="images/client_1.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <p><img src="images/open-quatation.jpg" class="open" alt="" />I am a Graphics Designer who was finding it really difficult to get jobs. Until I came in contact with Monumenta.biz's Tech4Hire. Now I have more jobs than i can handle.<img src="images/close-quatation.jpg" class="closeq" alt="" /></p>
                        <h4><a href="#">Jimmy Tubi, </a>GRAPHICS DESIGNER</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 happy-clients-grid span_66 wow bounceIn" data-wow-delay="0.4s"data-aos="fade-in">
                    <div class="client">
                        <img src="images/client_2.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <p><img src="images/open-quatation.jpg" class="open" alt="" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<img src="images/close-quatation.jpg" class="closeq" alt="" /></p>
                        <h4><a href="#">Madam Elisabath, </a>Creative Director</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 happy-clients-grid wow bounceIn" data-wow-delay="0.4s" data-aos="fade-right">
                    <div class="client">
                        <img src="images/client_3.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <p><img src="images/open-quatation.jpg" class="open" alt="" />I always wanted to go into modelling, but I never knew how to start or who to meet. When I joined Monumenta.biz's Modelling Apprentice, all I had to do was create a profile. Then all of a sudden i started getting messages from modelling agencies and photographers.<img src="images/close-quatation.jpg" class="closeq" alt="" /></p>
                        <h4><a href="#">Bunmi Volani, </a>Model</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 happy-clients-grid span_66 wow bounceIn" data-wow-delay="0.4s" data-aos="fade-in">
                    <div class="client">
                        <img src="images/client_4.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <p><img src="images/open-quatation.jpg" class="open" alt="" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<img src="images/close-quatation.jpg" class="closeq" alt="" /></p>
                        <h4><a href="#">zam cristafr,  </a>manager</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- // How it works -->
@endsection

@section('footer')
    @include('includes.footer')
@endsection