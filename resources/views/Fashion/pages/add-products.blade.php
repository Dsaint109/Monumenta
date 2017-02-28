@extends('layouts.fashion-master')

@section('title')
    Add Products - {{ $shop->name }}
@endsection

@section('extra-head')


    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('Fashion/css/materialize-tags.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('Fashion/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('Fashion/css/dropify.min.css') }}">


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
                <li><a href="{{ route('shop-my-products') }}">My Products</a> <i>/</i></li>
                <li>Add</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
<div class="single">
    <div class="container">
        <div class="col-md-4 single-left">
            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="/images/Fashion/a.jpg">
                        <div class="thumb-image"> <img src="/images/Fashion/a.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="/images/Fashion/b.jpg">
                        <div class="thumb-image"> <img src="/images/Fashion/b.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="/images/Fashion/c.jpg">
                        <div class="thumb-image"> <img src="/images/Fashion/c.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                </ul>
            </div>
            <!-- flixslider -->
           <script defer src="{{ URL::to('Fashion/js/jquery.flexslider.js') }}"></script>
            <link rel="stylesheet" href="{{ URL::to('Fashion/css/flexslider.css') }}" type="text/css" media="screen" />
            <script>
                // Can also be used with $(document).ready()
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            </script>
            <!-- flixslider -->
            <!-- zooming-effect -->
            <script src="{{ URL::to('Fashion/js/imagezoom.js') }}"></script>
            <!-- //zooming-effect -->
        </div>
        <div class="col-md-8 single-right form-w3">
            <h3><input type="text" id="product-name" value="Product Name" autofocus><i class="fa fa-pencil-square-o" data-togle="tooltip" data-placement="bottom" title="edit"></i></h3>
            <div class="description">
                <h5>Description</h5><i class="fa fa-pencil-square-o pull-right" style="padding-right: 65px; font-size: 24px" data-togle="tooltip" data-placement="bottom" title=""></i>
                <br>
                <textarea id="description" rows="6">Product description</textarea>
            </div>

            <div class=" row category">
                <div class="col-md-5 re-20">
                    <h3 style="color: #ad1457">Select a Category : </h3>
                </div>
                <div class="col-md-7">
                    <select id="category" class="select_item" title="Select a Category" style="width: 80%">
                        <option disabled selected>Select a Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>


            <input type="hidden" name="_shop" value="{{ $shop->id }}">

            <div class="color-quality">
                <div class="color-quality-left">
                    <h5>Colors : </h5>
                    <ul class="colors-attr">

                    </ul>

                    <input id="color" style="display: none;">
                    
                    <br>

                </div>


                <style type="text/css">
                    .sp-replacer{
                        border-radius: 30px;
                        border: solid 2px #f1f5f9;
                        background: none;
                    }
                    .sp-preview {
                        width: 28px;
                        height: 28px;
                        border-color: #7089A9;
                        border-radius: 30px;
                    }
                    .sp-dd {
                        margin-right: 4px;
                        line-height: 0px;
                        -webkit-transform: rotate(180deg);
                        transform: rotate(180deg);
                        color: #7089A9;
                        top: 3px;
                        padding-left: 5px;
                    }
                    .sp-preview-inner {
                        border-radius: 30px;
                        height: 26px;
                        width: 26px;
                    }
                    .chatter-color-picker {
                        background: #ffffff;
                        border: 2px solid #f1f5f9;
                        border-radius: 10px;
                        margin-top: -5px;
                    }
                    .chatter-color-picker .sp-cancel {
                        display: none;
                        color: #aaa !important;
                    }.sp-container button.sp-choose, .sp-container button.sp-choose:hover, .sp-container button.sp-choose:active, .sp-container button.sp-choose:focus {
                         background: none;
                         border: 1px solid #e5e9ef;
                         color: #ccc;
                         font-weight: normal;
                         font-size: 12px;
                         margin-top: 3px;
                         outline: none;
                         box-shadow: 0px 0px 0px;
                         text-shadow: 0px 0px 0px;
                     }
                </style>


                <div class="sp-container sp-hidden sp-light sp-input-disabled sp-palette-buttons-disabled sp-palette-disabled sp-initial-disabled chatter-color-picker"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(0, 128, 255);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="#"></a><button type="button" class="sp-choose">close</button></div></div></div>

                <div class="color-quality-right">
                    <h5>Quantity :  <span style="font-size: 11px;font-family: 'Open Sans', sans-serif; font-weight: bold; text-transform: capitalize;">(How many do you have)</span></h5>

                    <div class="quantity">
                        <div class="quantity-select">
                            <div class="entry value-minus1">&nbsp;</div>
                            <div id="stock" class="entry value1">10</div>
                            <div class="entry value-plus1 active">&nbsp;</div>
                        </div>
                    </div>

                    <!--quantity-->
                    <script>
                        $('.value-plus1').on('click', function(){
                            var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus1').on('click', function(){
                            var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                            if(newVal>=1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->

                </div>
                <div class="clearfix"> </div>

                <br><br>


                <div class="color-quality-left">
                    <h5>Trends : </h5>
                    <input id="trends" data-role="materialtags" placeholder="+Trends e.g. Traditional">
                </div>

                <div class="clearfix"></div>


                    <div class="images-upload" id="img-form-gen" style="display: none">
                        <h3 style="text-align: center"> Upload Images For The Different Colors</h3>

                    </div>
            </div>

            {{csrf_field()}}



            <div id="options">


            </div>


            <div class="occasional  occasional-creator">
                <h5><i class="fa fa-plus"></i> Add Options <span style="font-family: 'Open Sans', sans-serif; font-size: 12px; font-weight: bold">(E.G. SIZE)</span></h5>
                <div class="col-xs-3 col-xs-offset-2 occasional-creator-child">
                    <select id="create-occasional" class="selectpicker" title="Option Type">
                        <option  value="1">Multiple selections (like S, M, L)</option>
                        <option value="2">Single selection (either Short-sleeve or Long)</option>
                    </select>
                </div>
            </div>











            <div class="simpleCart_shelfItem">
                <h3 style="color: #ad1457;">PRICE : </h3>
                <p><img src="/images/naira.svg" alt="Naira" height="15px"><span><input type="number" class="not-price"></span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px"><input type="number" class="price"></i></p>
                <br><br><br>
                <p><a class="item_add" href="#">Add Product</a></p>
            </div>

        </div>

        <div class="col-xs-8 col-xs-offset-4 paoss">
            <div class="row">
                <div class="col-xs-4">Uploading pictures</div>
                <div class="col-xs-8 progress-contain">
                    <div class="pb" id="pb"><h4 class="pt" id="pt"></h4></div>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>



<script type="text/javascript" src="{{ URL::to('Fashion/js/materialize-tags.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('Fashion/js/upload.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.js') }}"></script>
<script type="text/javascript" src="{{URL::to('Fashion/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('Fashion/js/dropify.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('Fashion/js/add-products-ajax.js') }}"></script>

@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection
