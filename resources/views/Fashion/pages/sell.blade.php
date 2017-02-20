@extends('layouts.fashion-master')

@section('title')
    Create a Shop on Monumenta Fashion
@endsection

@section('banner')
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Create your Shop</h2>
        </div>
    </div>
@endsection

@section('breadcrumbs')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('fashion-home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Sell</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <!-- Create-Brand -->
    <script src="{{ URL::to('js/jquery.validate.min.js')  }}"></script>
    <div class="create-brand">
        <div class="container">

            <h3>Create Shop</h3>

            <div class="row">

                <div class="col-md-3 col-md-offset-1 brand brand-logo" data-toggle="tooltip" data-placement="top" title="Brand Logo">

                    <div class="fill-logo">
                        <h1 id="fill-text-name">Shop Name</h1>
                        <h2 id="fill-text-cp">Catch Phrase</h2>
                    </div>

                </div>



                <div class="col-md-6 col-md-offset-1 brand" style="padding-top: 30px;">

                    <form class="form-horizontal" id="sell-form" action="/sell" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="shopName" class="col-sm-3 control-label form-label">Shop Name *:</label>
                            <div class="col-sm-9 form-w3">
                                <span>
                                    @if(count($errors))
                                        <em>{{ $errors->first('name') }}</em>
                                    @endif
                                </span>
                                <input type="text" class="" id="shopName" autocomplete="off" maxlength="24" name="name" value="{{ old('name') }}" placeholder="Shop Name">
                                <span class="text-counter">24</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shopName" class="col-sm-3 control-label form-label">Catch Phrase :</label>
                            <div class="col-sm-9 form-w3">
                                <span>
                                    @if(count($errors))
                                        <em>{{ $errors->first('tagline') }}</em>
                                    @endif
                                </span>
                                <input type="text" class="" maxlength="42" autocomplete="off" id="catchPhrase" value="{{ old('tagline') }}" name="tagline" placeholder="Catch Phrase">
                                <span class="cat-counter">42</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="webUrl" class="col-sm-3 control-label form-label">Website url :</label>
                            <div class="col-sm-9 form-w3">
                                <span>
                                    @if(count($errors))
                                        <em>{{ $errors->first('web_url') }}</em>
                                    @endif
                                </span>
                                <input type="url" class="" id="webUrl" value="{{ old('web_url') }}" name="web_url" placeholder="Leave blank if none">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-sm-3 control-label form-label" required>Address *:</label>
                            <div class="col-sm-9 form-w3">
                                <span>
                                    @if(count($errors))
                                        <em>{{ $errors->first('address') }}</em>
                                    @endif
                                </span>
                                <textarea class="" id="address" rows="4" value="{{ old('address') }}" name="address" placeholder="Shop Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 control-label form-label">
                                Boost Store:
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" name="featured" id="inlineRadio1" value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="featured" id="inlineRadio2" value="0" checked> No
                                </label>
                            </div>
                            <div class="col-sm-5" style="font-size: 12px; line-height: 2.7em">
                                <small>
                                    <em>(Additional charges)</em>
                                </small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10 form-w3">
                                <button type="submit" class="btn btn-default">Create Shop</button>
                            </div>
                        </div>
                    </form>


                </div>



            </div>


        </div>
    </div>
    <script type="text/javascript">
        $("#sell-form").validate({
            errorElement: "em",
            errorPlacement: function(error, element) {
                error.appendTo(element.prev("span"));
            },
            rules: {
                name: {
                    required: true,
                    maxlength: 24
                },
                tagline: {
                    required: false,
                    maxlength: 42
                },
                address: {
                    required: true
                }
            },
            messages: {
                name: {
                    required:"This field is required",
                    maxlength: "Not more than 24 characters"
                },
                tagline: {
                    required:"This field is required",
                    maxlength: "Not more than 42 characters"
                },
                address: "This field is required"
            }
        });
    </script>
    <script src="{{ URL::to('js/additional-methods.min.js')  }}"></script>
    <script type="text/javascript" src="{{ URL::to('Fashion/js/sell-ajax.js')  }}"></script>
    <!-- //Create-Brand -->
@endsection

@section('top-brands')
    @include('Fashion.includes.top-brands')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection