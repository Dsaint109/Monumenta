@extends('layouts.master')

@section('title')
    Contact Us - Monumenta
@endsection

@section('keywords')
    das
@endsection

@section('banner')
    @include('includes.search-banner')
@endsection

@section('content')
    <!-- Terms of use -->
    <div class="contact main-grid-border">
        <div class="container">
            <h2 class="head text-center">Contact Us</h2>
            <section id="hire">
                <form id="filldetails" name="contact-form" method="post" action="/Contact-Us">
                    {{ csrf_field() }}
                    <div class="field name-box">
                        <input type="text" name="name" id="name" placeholder="Who Are You?" value="{{ old('name') }}" required>
                        <label for="name">Name*</label>
                        <span class="ss-icon">check</span>
                    </div>

                    <div class="field email-box">
                        <input type="text" id="email" name="email" placeholder="example@email.com" value="{{ old('email') }}" required>
                        <label for="email">Email*</label>
                        <span class="ss-icon">check</span>
                    </div>

                    <div class="field ad-ID">
                        <input type="text" id="email" name="subject" placeholder="Subject">
                        <label for="email">Subject</label>
                        <span class="ss-icon">check</span>
                    </div>

                    <div class="field phonenum-box">
                        <input type="text" id="email" name="phone" placeholder="Phone Number"/>
                        <label for="email">Phone*</label>
                        <span class="ss-icon">check</span>
                    </div>

                    <div class="field msg-box">
                        <textarea id="msg" name="msg" rows="4" placeholder="Your message goes here..." value="{{ old('msg') }}" required /></textarea>
                        <label for="msg">Your Msg</label>
                        <span class="ss-icon">check</span>
                    </div>

                    <div class="clear"></div>
                        <input class="button" type="submit" value="Send" />
                    </form>
            </section>
            <script>
                $('textarea').blur(function () {
                    $('#hire textarea').each(function () {
                        $this = $(this);
                        if (this.value != '') {
                            $this.addClass('focused');
                            $('textarea + label + span').css({ 'opacity': 1 });
                        } else {
                            $this.removeClass('focused');
                            $('textarea + label + span').css({ 'opacity': 0 });
                        }
                    });
                });
                $('#hire .field:first-child input').blur(function () {
                    $('#hire .field:first-child input').each(function () {
                        $this = $(this);
                        if (this.value != '') {
                            $this.addClass('focused');
                            $('.field:first-child input + label + span').css({ 'opacity': 1 });
                        } else {
                            $this.removeClass('focused');
                            $('.field:first-child input + label + span').css({ 'opacity': 0 });
                        }
                    });
                });
                $('#hire .field:nth-child(2) input').blur(function () {
                    $('#hire .field:nth-child(2) input').each(function () {
                        $this = $(this);
                        if (this.value != '') {
                            $this.addClass('focused');
                            $('.field:nth-child(2) input + label + span').css({ 'opacity': 1 });
                        } else {
                            $this.removeClass('focused');
                            $('.field:nth-child(2) input + label + span').css({ 'opacity': 0 });
                        }
                    });
                });
                $('#hire .field:nth-child(3) input').blur(function () {
                    $('#hire .field:nth-child(3) input').each(function () {
                        $this = $(this);
                        if (this.value != '') {
                            $this.addClass('focused');
                            $('.field:nth-child(3) input + label + span').css({ 'opacity': 1 });
                        } else {
                            $this.removeClass('focused');
                            $('.field:nth-child(3) input + label + span').css({ 'opacity': 0 });
                        }
                    });
                });
                $('#hire .field:nth-child(4) input').blur(function () {
                    $('#hire .field:nth-child(4) input').each(function () {
                        $this = $(this);
                        if (this.value != '') {
                            $this.addClass('focused');
                            $('.field:nth-child(4) input + label + span').css({ 'opacity': 1 });
                        } else {
                            $this.removeClass('focused');
                            $('.field:nth-child(4) input + label + span').css({ 'opacity': 0 });
                        }
                    });
                });
                //@ sourceURL=pen.js
            </script>
            <script>
                if (document.location.search.match(/type=embed/gi)) {
                    window.parent.postMessage("resize", "*");
                }
            </script>
        </div>
    </div>
    <!-- // Contact-us section -->
@endsection

@section('footer')
    @include('includes.footer')
@endsection