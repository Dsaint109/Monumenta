@extends('layouts.fashion-master')

@section('title')
    Contact Monumenta Fashion
@endsection

@section('keywords')
    Monumenta Fashion, Fashion, Clothes
@endsection

@section('banner')
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </div>
@endsection

@section('breadcrumbs')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('fashion-home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="mail">
        <div class="container">
            <h3>Contact Us</h3>
            <div class="agile_mail_grids">
                <div class="col-md-5 contact-left">
                    <h4>Address</h4>
                    <p>Our official headquarters - 45 Alhaji Azeez, Yaba<br>
                        <span>Lagos. Nigeria.</span></p>
                    <ul>
                        <li>Toll Free : 0800 MONU MENTA</li>
                        <li>Telephone : +234 802 501 8384</li>
                        <li>Fax :+1 078 4589 2456</li>
                        <li><a href="mailto:fashion@monumenta.biz">fashion@monumenta.biz</a></li>
                    </ul>
                </div>
                <div class="col-md-7 contact-left">
                    <h4>Contact Form</h4>
                    <form action="#" method="post">
                        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                        <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit" >
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="contact-bottom">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96908.54934770924!2d-73.74913540000001!3d40.62123259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanimal+rescue+service+near+Inwood%2C+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1436335928062" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection