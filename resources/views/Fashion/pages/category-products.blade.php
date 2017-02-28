@extends('layouts.fashion-master')

@section('title')
    All Products - {{ $shop->name }}
@endsection

@section('banner')
    {{-- In case of Banner --}}
@endsection

@section('breadcrumbs')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('fashion-home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>My Products</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')


    <!-- content -->
    <div class="dresses">
        <div class="container">
            <div class="w3ls_dresses_grids">
                <div class="col-md-4 w3ls_dresses_grid_left">
                    <div class="w3ls_dresses_grid_left_grid">

                        <h3>Categories</h3>

                        <div class="w3ls_dresses_grid_left_grid_sub">

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title asd">
                                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>All Categories
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body panel_text">
                                            <ul>
                                                @foreach($categories as $category)
                                                    <li><a href="">{{ $category->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title asd">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Trends for {{ $category->name }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body panel_text">
                                            <ul>
                                                @foreach($category->products as $prod)
                                                    @foreach($prod->tags as $tags)
                                                        <li><a href="">{{ $tags->name }}</a></li>
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            {{--
                            <ul class="panel_bottom">
                                <li><a href="products.html">Summer Store</a></li>
                                <li><a href="dresses.html">New In Clothing</a></li>
                                <li><a href="sandals.html">New In Shoes</a></li>
                                <li><a href="products.html">Latest Watches</a></li>
                            </ul>

                            --}}

                        </div>

                    </div>
                </div>




                <div class="col-md-8 w3ls_dresses_grid_right">
                    <div class="col-md-6 w3ls_dresses_grid_right_left">
                        <div class="w3ls_dresses_grid_right_grid1">
                            <img src="/images/Fashion/72.jpg" alt=" " class="img-responsive" />
                            <div class="w3ls_dresses_grid_right_grid1_pos1">
                                <h3>Cosmetics <span>Up To</span> 10% Discount</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls_dresses_grid_right_left">
                        <div class="w3ls_dresses_grid_right_grid1">
                            <img src="/images/Fashion/73.jpg" alt=" " class="img-responsive" />
                            <div class="w3ls_dresses_grid_right_grid1_pos">
                                <h3>Cosmetics <span>Makeup</span> Brush</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>


                    <div class="products">
                        @if(count($products) > 0)

                            @include('Fashion.products.load')


                        @endif
                    </div>

                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>


    @foreach($shop->products as $product)
        <div class="modal video-modal fade" id="myModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal{{ $product->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <section>
                        <div class="modal-body">
                            <div class="col-md-5 modal_body_left">
                                @foreach($product->optionValues()->get() as $prov)
                                    @if($prov->pictures()->first())
                                        <img src="{{ $prov->pictures()->first()->image_url }}" alt=" " class="img-responsive" />
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-md-7 modal_body_right">
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="/images/Fashion/star-.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="/images/Fashion/star-.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="/images/Fashion/star-.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="/images/Fashion/star.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="/images/Fashion/star.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="modal_body_right_cart simpleCart_shelfItem">
                                    <p><img src="/images/naira.svg" alt="Naira" height="15px"><span>{{ $product->notPrice }}</span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px">{{ $product->price }}</i></p>
                                    <p><a class="delete_pr" href="#"><i class="fa fa-trash-o"></i></a> <a class="edit_pr" href="/My-Products/{{ $product->id }}"><i class="fa fa-pencil"></i></a></p>
                                </div>
                                <h5>Color</h5>
                                <div class="color-quality">
                                    <ul>
                                        @foreach($product->optionValues()->where('value', 'like', '#%')->get() as $opva)
                                            <li><a href="#"><span style="background-color: {{ $opva->value }}"></span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endforeach

    <!-- //content -->



    <script type="text/javascript">

        $(function() {
            $('body').on('click', '.pagination a', function(e) {

                e.preventDefault();

                $('#load a').css('color', '#dfecf6');
                $('#load').append('<img style="position: absolute; left: 50%; top: 50%; z-index: 100000;" src="/images/cube.gif" />');

                var url = $(this).attr('href');
                var page = url.split('page=')[1];
                getProducts(url);
                window.history.pushState("", "", url);
            });

            function getProducts(url) {
                $.ajax({
                    url : url
                }).done(function (data) {
                    $('body').animate({ scrollTop: 190}, 1000);
                    $('.products').html(data);
                }).fail(function () {
                    alert('Products could not be loaded.');
                });
            }
        });

    </script>

@endsection

@section('newsletter')
    @include('Fashion.includes.newsletter')
@endsection

@section('footer')
    @include('Fashion.includes.footer')
@endsection