@extends('layouts.fashion-master')

@section('title')
    {{ $product->name . ' by ' .$shop->name }}
@endsection

@section('breadcrumbs')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('Fashion/css/materialize-tags.css') }}">
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('fashion-home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>{{ $product->slug }}</li>
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
                        @foreach($color->pictures as $pics)
                            <li data-thumb="{{ $pics->image_url }}">
                                <div class="thumb-image"> <img src="{{ $pics->image_url }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                        @endforeach
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
            <div class="col-md-8 single-right">
                <h3>{{ $product->name }}</h3><h5>by : <a href="/Shops/{{ $shop->slug }}"> {{ $shop->name }}</a></h5><br>
                <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
                </div>
                <div class="description">
                    <h5><i>Description</i></h5>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="color-quality">
                    <div class="color-quality-left">
                        <h5>Color : </h5>
                        <ul>
                            @foreach($colors as $col)
                            <li data-color="{{ $col->id }}"><a href="#"><span style="background-color: {{ $col->value }}"></span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="color-quality-right">
                        <h5>Quality :</h5>
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                            </div>
                        </div>
                        <!--quantity-->
                        <script>
                            $('.value-plus1').on('click', function(){
                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                if(newVal<={{ $product->stock }}){
                                    divUpd.text(newVal);
                                }
                            });

                            $('.value-minus1').on('click', function(){
                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                if(newVal>=1){
                                    if(newVal<={{ $product->stock }}){
                                        divUpd.text(newVal);
                                    }

                                }
                            });
                        </script>
                        <!--quantity-->

                    </div>
                    @if($product->tags->first())
                    <div class="clearfix"></div><br>
                    <div class="color-quality-left">
                        <h5>Trends : </h5>
                        <div class="materialize-tags">
                            @foreach($product->tags as $tags)
                                <span class="chip">{{ $tags->name }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="clearfix"> </div>
                </div><br><br>

                <div class="occasional">
                    <h5>Options :</h5>
                    @foreach($opt as $op)

                        @if($op->type == 'checkbox')
                    <h4>{{ $op->name }}</h4>
                            @foreach($op->optionValues as $o)
                    <div class="colr ert">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="{{ $op->name }}"><i> </i>{{ $o->value }}</label>
                        </div>
                    </div>
                            @endforeach
                    <div class="clearfix"> </div><br><br>
                        @elseif($op->type == 'select')
                    <h4>{{ $op->name }}</h4>
                    <ul>
                            @foreach($op->optionValues as $o)
                        <li>
                            <input type="radio" id="f-option[{{$loop->index}}]" name="{{ $op->name }}">
                            <label data-selected-label="0" for="f-option[{{$loop->index}}]">{{ $o->value }}</label>
                            <div class="check"></div>
                        </li>
                            @endforeach
                    </ul><div class="clearfix"></div>
                        @endif
                    @endforeach
                </div>


                <div class="simpleCart_shelfItem">
                    <p><img src="/images/naira.svg" alt="Naira" height="15px"> <span>{{ $product->notPrice }}</span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px"> {{ $product->price }}</i></p>
                    <p><a class="item_add" href="#">Add to cart</a></p>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="additional_info">
        <div class="container">
            <div class="sap_tabs">
                <div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
                    <ul>
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Information</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
                    </ul>
                    <div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                    </div>

                    <div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
                        <h4>(0) Reviews</h4>
                        {{--
                        <!--
                        <div class="additional_info_sub_grids">
                            <div class="col-xs-2 additional_info_sub_grid_left">
                                <img src="images/1.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-xs-10 additional_info_sub_grid_right">
                                <div class="additional_info_sub_grid_rightl">
                                    <a href="single.html">Laura</a>
                                    <h5>April 03, 2016.</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                                        quo voluptas nulla pariatur.</p>
                                </div>
                                <div class="additional_info_sub_grid_rightr">
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="additional_info_sub_grids">
                            <div class="col-xs-2 additional_info_sub_grid_left">
                                <img src="images/2.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-xs-10 additional_info_sub_grid_right">
                                <div class="additional_info_sub_grid_rightl">
                                    <a href="single.html">Michael</a>
                                    <h5>April 04, 2016.</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                                        quo voluptas nulla pariatur.</p>
                                </div>
                                <div class="additional_info_sub_grid_rightr">
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star-.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="images/star.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        -->
                        --}}
                        <div class="review_grids">
                            <h5>Add A Review</h5>
                            <form action="#" method="post">
                                <input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                <input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                <input type="text" name="subject" value="Title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                                <textarea name="review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
                                <input type="submit" value="Submit" >
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <script src="{{ URL::to('Fashion/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab1').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
            </script>
        </div>
    </div>

@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection