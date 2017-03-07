<div class="banner-bottom">
    <div class="container">
        <div class="col-md-5 wthree_banner_bottom_left">
            <div class="video-img">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                </a>
            </div>
            <!-- pop-up-box -->
            <link href="{{ URL::to('Fashion/css/popuo-box.css')  }}" rel="stylesheet" type="text/css" property="" media="all" />
            <script src="{{ URL::to('Fashion/js/jquery.magnific-popup.js')  }}" type="text/javascript"></script>
            <!--//pop-up-box -->
            <div id="small-dialog" class="mfp-hide">
                <iframe src="https://player.vimeo.com/video/126132667?title=0&byline=0&portrait=0"></iframe>
               </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
        </div>
        <div class="col-md-7 wthree_banner_bottom_right">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    @foreach($categories as $category)
                        @if($loop->first)
                            <li role="presentation" class="active"><a href="#{{ $category->name }}" id="{{ $category->name }}-tab" role="tab" data-toggle="tab" aria-controls="{{ $category->name }}">{{ $category->name }}</a></li>
                        @else
                            <li role="presentation"><a href="#{{ $category->name }}" role="tab" id="{{ $category->name }}-tab" data-toggle="tab" aria-controls="{{ $category->name }}">{{ $category->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
                <div id="myTabContent" class="tab-content">

                    @foreach($categories as $category)
                        @if($loop->first)
                    <div role="tabpanel" class="tab-pane fade active in" id="{{ $category->name }}" aria-labelledby="{{ $category->name }}-tab">
                        @else
                    <div role="tabpanel" class="tab-pane fade" id="{{ $category->name }}" aria-labelledby="{{ $category->name }}-tab">
                        @endif
                        <div class="agile_ecommerce_tabs">

                            @foreach($category->products->take(3) as $catprod)
                            <div class="col-md-4 agile_ecommerce_tab_left">
                                <div class="hs-wrapper">
                                    @foreach($catprod->optionValues as $catprov)
                                        @if($catprov->pictures()->get())
                                            @foreach($catprov->pictures()->get()->take(8) as $catprovpics)
                                    <img src="{{ $catprovpics->image_url }}" alt="{{ $catprod->name }}" class="img-responsive" />
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <div class="w3_hs_bottom">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal{{ $catprod->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="/{{ $catprod->slug }}">{{ $catprod->name }}</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><img src="/images/naira.svg" alt="Naira" height="15px"><span>{{ $catprod->notPrice }}</span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px">{{ $catprod->price }}</i></p>
                                    <p><a class="item_add" href="#">Add to cart</a></p>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--modal-video-->

            @foreach($categories as $category)
                @foreach($category->products->take(3) as $catprod)

            <div class="modal video-modal fade" id="myModal{{ $catprod->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal{{ $catprod->id }}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    @foreach($catprod->optionValues as $prov)
                                        @if($prov->pictures()->first())
                                    <img src="{{ $prov->pictures()->first()->image_url }}" alt="{{ $catprod->name }}" class="img-responsive" />
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>{{ $catprod->name }}</h4>
                                    <p>{{ $catprod->description }}</p>
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
                                        <p><span><img src="/images/naira.svg" alt="Naira" height="15px">{{ $catprod->notPrice }}</span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px">{{ $catprod->price }}</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            @foreach($catprod->optionValues()->where('value', 'like', '#%')->get() as $opva)
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
            @endforeach

        </div>
        <div class="clearfix"> </div>
    </div>
</div>