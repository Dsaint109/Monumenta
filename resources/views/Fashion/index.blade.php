@extends('layouts.fashion-master')

@section('title')
    Monumenta Fashion
@endsection

@section('keywords')
    Monumenta Fashion, Fashion, Clothes
@endsection

@section('banner')

    <div class="banner" id="home1">
        <div class="container">
            <h3>fashions fade, <span>style is eternal</span></h3>
        </div>
    </div>

@endsection

@section('content')
    @include('Fashion.includes.home-content')
@endsection



@section('new-products')
    @include('Fashion.includes.new-products')
@endsection

@section('special-deals')
    @include('Fashion.includes.special-deals')
@endsection

@section('top-brands')
    @include('Fashion.includes.top-brands')
@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection