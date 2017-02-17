@extends('layouts.master')

@section('title')
    Login - Monumenta
@endsection

@section('keywords')
    asdd
@endsection

@section('content')
<section>
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
                <div class="sign-in-form">
                    <div class="sign-in-form-top">
                        <h1>Log in</h1>
                    </div>
                    <div class="signin">
                        <div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
                            <p><a href="#">Click Here</a> </p>
                            <div class="clearfix"> </div>
                        </div>
                        <form action="{{ route('postLogin') }}" method="post" id="signinForm">
                            {{ csrf_field() }}
                            <div class="log-input">
                                <div class="log-input-left">
                                    <input type="text" name="email" class="user" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"required/>
                                    @if(count($errors))
                                        {{ $errors->first('email') }}
                                    @endif
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="log-input">
                                <div class="log-input-left">
                                    <input type="password" class="lock" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"required/>
                                    @if(count($errors))
                                        {{ $errors->first('password') }}
                                    @endif
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            @if(request('redirect'))
                                <input type="hidden" name="_redirect" value="{{ request('redirect') }}">
                            @endif
                            <input type="submit" value="Log in">
                        </form>
                    </div>
                <div class="new_people">
                    <h2>For New People</h2>
                    <p>Create an account to take full advantage of everything Monumenta.biz has to offer. By Signing up you agree to our Terms & Privacy Policy.</p>
                    @if(request('redirect'))
                        <a href="{{ route('register') }}?redirect={{ request('redirect') }}">Register Now!</a>
                    @else
                        <a href="{{ route('register') }}">Register Now!</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--footer section start-->
    <footer class="diff">
        <p class="text-center">&copy 2016 Monumenta. All Rights Reserved | Design by <a href="http://www.saintswebnology.com" target="_blank">SaintsWebnology</a></p>
    </footer>
    <!--footer section end-->
    <script type="text/javascript">
        $("#signinForm").validate({
            rules: {
                password: {
                    required: true
                },
                email: {
                    required: true
                }
            }
        });
    </script>
</section>
@endsection