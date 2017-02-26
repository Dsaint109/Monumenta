@extends('layouts.fashion-master')

@section('title')
    {{ $shop->name }}
@endsection

@section('banner')
    <div class="banner10" id="home1">
        <div class="container">
            <h2>
                <span class="banner-name">{{ $shop->name }}</span>
                <br>
                <small class="banner-cp">{{ $shop->tagline }}</small>
            </h2>
        </div>
    </div>
@endsection

@section('breadcrumbs')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('fashion-home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Dashboard</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <script src="{{ URL::to('js/jquery.validate.min.js')  }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>
    <div class="create-brand">
        <div class="container">

            <h3>Shop Details</h3>

            <div class="row">

                <div class="col-md-3 col-md-offset-1 brand brand-logo" data-toggle="tooltip" data-placement="top" title="Brand Logo">
                    @if($shop->image_url)
                        <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}" class="brand-logo-img img-responsive" />
                    @else
                        <div class="fill-logo">
                            @if(strlen($shop->name) > 16)
                                <h1 id="fill-text-name" style="font-size: 2.5em">{{ $shop->name }}</h1>
                            @else
                                <h1 id="fill-text-name">{{ $shop->name }}</h1>
                            @endif
                            <h2 id="fill-text-cp">{{ $shop->tagline }}</h2>
                        </div>
                    @endif

                    <div class="edit-option">
                        <a href="" class="edit-option-right file-upload" data-toggle="tooltip" data-placement="bottom" title="Upload Logo">
                            <i class="fa fa-camera"></i>
                            <form enctype="multipart/form-data" action="/shop-image" id="uploadLogo" method="post">
                                {{ csrf_field() }}
                                <input type="file" name="logo" id="logo" data-toggle="tooltip" data-placement="left" title="Upload Logo" class="file-input">
                            </form>
                        </a>
                        @if($shop->image_url)
                        <a href="#" id="removelogo" class="edit-option-left" data-toggle="tooltip" data-placement="right" title="Remove Logo"><i class="fa fa-close"></i></a>
                        @endif
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
                                <input type="text" class="" id="shopName" autocomplete="off" maxlength="24" name="name" value="{{ $shop->name }}" placeholder="Shop Name">
                                <span class="text-counter">{{ 24 - strlen($shop->name) }}</span>
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
                                <input type="text" class="" maxlength="42" autocomplete="off" id="catchPhrase" value="{{ $shop->tagline }}" name="tagline" placeholder="Catch Phrase">
                                <span class="cat-counter">{{ 42 - strlen($shop->tagline) }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="shopLink" class="col-sm-3 control-label form-label">Shop Link :</label>
                            <div class="col-sm-9 form-w3">
                                <input type="text" class="" id="shopLink" maxlength="24" style="font-size: 11px; font-family: monospace; padding-right: 20px; color: #555;" value="https://fashion.monumenta.biz/Shops/{{ $shop->slug }}" readonly>
                                <span class="url-counter" style="cursor: pointer" data-toggle="tooltip" data-placement="right" title="Copy" data-clipboard-target="#shopLink" id="copy-this"><i class="fa fa-link"></i></span>
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
                                <input type="url" class="" id="webUrl" value="{{ $shop->web_url }}" name="web_url" placeholder="Leave blank if none">
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
                                <textarea class="" id="address" rows="4" value="{{ $shop->address }}" name="address" placeholder="Shop Address">{{ $shop->address }}</textarea>
                            </div>
                        </div>

                        @if(!$shop->featured)
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
                        @endif


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10 form-w3">
                                <button type="submit" class="btn btn-default">Update Shop</button>
                            </div>
                        </div>
                    </form>


                </div>



            </div>


        </div>
    </div>

    <div class="team-bottom">
        <div class="container">
            <h3>Are You Ready To Add Products?</h3>
            <p>
                You can Add products from here or by clicking on on your <button id="toAvatar">avatar</button> at the top of the page
            </p>
            <a href="">Start Now</a>
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
    <script type="text/javascript" src="{{ URL::to('Fashion/js/dashboard-ajax.js')  }}"></script>
    <script type="text/javascript">
        new Clipboard('#copy-this');
    </script>

@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection