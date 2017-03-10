@if(!Auth::user())
<!-- User ish -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="row">
                    <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul>
                                    <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
                                </ul>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="https://monumenta.biz/Login" method="post">
                                                {{ csrf_field() }}

                                                <input name="email" placeholder="Email Address" type="text" required="">

                                                @if(count($errors))
                                                    {{ $errors->first('email') }}
                                                @endif

                                                <input name="password" placeholder="Password" type="password" required="">

                                                @if(count($errors))
                                                    {{ $errors->first('password') }}
                                                @endif

                                                <input type="hidden" name="_redirect" value="fashion-home">

                                                <div class="sign-up">
                                                    <input type="submit" value="Sign in"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="{{ route('postSignup') }}" method="post">
                                                {{ csrf_field() }}
                                                @if(count($errors))
                                                    {{ $errors->first('Firstname') }}
                                                @endif
                                                <input placeholder="First Name" name="Firstname" type="text" value="{{ old('Firstname') }}" required>
                                                @if(count($errors))
                                                    {{ $errors->first('Lastname') }}
                                                @endif
                                                    <br><br>
                                                <input placeholder="Last Name" name="Lastname" type="text" value="{{ old('Lastname') }}" required>
                                                    @if(count($errors))
                                                        {{ $errors->first('email') }}
                                                    @endif
                                                <input placeholder="Email Address" name="email" type="email" value="{{ old('email') }}" required>
                                                    @if(count($errors))
                                                        {{ $errors->first('password') }}
                                                    @endif
                                                <input placeholder="Password" name="password" type="password" required>

                                                <input placeholder="Confirm Password" name="password_again" type="password" required>

                                                <input type="hidden" name="_redirect" value="fashion-home">

                                                <div class="sign-up">
                                                    <input type="submit" value="Create Account"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="{{ URL::to('Fashion/js/easyResponsiveTabs.js')  }}" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion
                                    width: 'auto', //auto or any width like 600px
                                    fit: true   // 100% fit in a container
                                });
                            });
                        </script>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3 class="other-nw">
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <ul class="social">
                                    <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                                    <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                                    <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                                    <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::to('js/jquery.validate.min.js')  }}"></script>
<script>
    $('#myModal88').modal('show');
</script>
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
<!-- //User ish -->
@endif