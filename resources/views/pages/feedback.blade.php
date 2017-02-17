@extends('layouts.master')

@section('title')
    Feedback - Monumenta
@endsection

@section('keywords')
    das
@endsection

@section('banner')
    @include('includes.search-banner')
@endsection

@section('content')
    <!-- Feedback -->
    <div class="feedback main-grid-border">
        <div class="container">
            <h2 class="head">Feedback</h2>
            <div class="feed-back">
                <h3>Tell us what you think of us</h3>
                <p></p>
                <div class="feed-back-form">
                    <form action="/Feedback" method="post">
                        {{ csrf_field() }}
                        <span>User Details</span>
                        <input type="text" name="FirstName" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required>
                        <input type="text" name="LastName" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required>
                        <input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                        <input type="text" name="phone" value="Phone No" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone No';}">
                        <span>Is there anything you would like to tell us?</span>
                        <textarea type="text" name="msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // Feedback -->
@endsection

@section('footer')
    @include('includes.footer')
@endsection