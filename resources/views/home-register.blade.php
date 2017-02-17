@extends('layouts.master')

@section('title')
    Sign up - Monumenta
@endsection

@section('keywords')
    sib
@endsection

@section('content')
    <section>
        <div id="page-wrapper" class="sign-in-wrapper">
            <div class="graphs">
                <div class="sign-up">
                    <h1>Create an account</h1>
                    <p class="creating">Create an account to take full advantage of everything Monumenta.biz has to
                        offer. By Signing up you agree to our <a href="{{ route('terms') }}">Terms</a> & <a href="{{ route('privacy') }}">Privacy Policy</a>.</p>
                    <h2>Personal Information</h2>
                    <form action="{{ route('postSignup') }}" method="post" id="signupForm">
                        {{ csrf_field() }}
                        <div class="sign-u form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
                            <div class="sign-up1">
                                <h4>First Name* :</h4>
                            </div>
                            <div class="sign-up2">

                                <input type="text" placeholder="John" name="Firstname" value="{{ old('Firstname') }}"
                                       required/>

                                @if(count($errors))
                                    {{ $errors->first('Firstname') }}
                                @endif

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sign-u form-group {{ $errors->has('lname') ? 'has-error' : '' }}">
                            <div class="sign-up1">
                                <h4>Last name* :</h4>
                            </div>
                            <div class="sign-up2">

                                <input type="text" placeholder="Doe" name="Lastname" value="{{ old('Lastname') }}"
                                       required/>

                                @if(count($errors))
                                    {{ $errors->first('Lastname') }}
                                @endif

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sign-u form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <div class="sign-up1">
                                <h4>Email Address* :</h4>
                            </div>
                            <div class="sign-up2">

                                <input type="email" placeholder="JohnDoe@example.com" value="{{ old('email') }}"
                                       name="email" required/>

                                @if(count($errors))
                                    {{ $errors->first('email') }}
                                @endif

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4>Password* :</h4>
                            </div>
                            <div class="sign-up2 form-group {{ $errors->has('password') ? 'has-error' : '' }}">

                                <input type="password" placeholder="******" name="password" id="password" required/>

                                @if(count($errors))
                                    {{ $errors->first('password') }}
                                @endif

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4>Confirm Password* :</h4>
                            </div>
                            <div class="sign-up2">

                                <input type="password" placeholder="" id="password_again" name="password_again"
                                       required/>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sub_home">
                            <div class="sub_home_left">


                                @if(request('redirect'))
                                    <input type="hidden" name="_redirect" value="{{ request('redirect') }}">
                                @endif

                                <input type="submit" value="Create">

                            </div>
                            <div class="sub_home_right">

                                @if(request('redirect'))
                                    <p>Go Back to <a href="{{ route(request('redirect')) }}"> {{ request('redirect') }} </a></p>
                                @else
                                    <p>Go Back to <a href="{{ route('home') }}">Home</a></p>
                                @endif

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        <!--footer section start-->
        <footer class="diff">
            <p class="text-center">&copy 2016 Monumenta. All Rights Reserved | Design by <a
                        href="http://www.saintswebnology.com" target="_blank">SaintsWebnology.</a></p>
        </footer>
        <!--footer section end-->

    </section>

    <script type="text/javascript">
        $("#signupForm").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 5
                },
                password_again: {
                    required: true,
                    equalTo: "#password",
                    minlength: 5
                }
            },
            messages: {
                Firstname: "Please enter your First Name",
                Lastname: "Please enter your Last Name",
                password: {
                    required: "You must input a Password",
                    minlength: "Your Password must be at least 5 characters long"
                },
                password_again: {
                    required: "You must confirm a Password",
                    equalTo: "Password Mismatch",
                    minlength: "Your Password must be at least 5 characters long"
                }
            }
        });
    </script>

@endsection