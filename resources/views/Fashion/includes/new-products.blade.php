<!-- new-products -->
<div class="new-products w31_related_products">
    <div class="container">
        <h3>New Products</h3>
            <ul id="flexiselNewProducts">

                @foreach($categories as $category)
                @foreach($category->products->take(3) as $product)

                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                            <div class="hs-wrapper hs-wrapper1">

                                @foreach($product->optionValues as $prov)
                                    @if($prov->pictures)
                                        @foreach($prov->pictures->take(10) as $pic)
                                            <img src="{{ $pic->image_url }}" alt="{{ $product->name }}" class="img-responsive" />
                                        @endforeach
                                    @endif
                                @endforeach
                                <div class="w3_hs_bottom w3_hs_bottom_sub">
                                    <ul>
                                        <li style="float: none">
                                            <a href="#" data-toggle="modal" data-target="#myModal{{ $product->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h5><a href="/{{ $product->slug }}">{{ $product->name }}</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p><img src="/images/naira.svg" alt="Naira" height="15px"><span>{{ $product->notPrice }}</span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px">{{ $product->price }}</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </li>

                @endforeach
                @endforeach

            </ul>

            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselNewProducts").flexisel({
                        visibleItems:4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>


                <div class="clearfix"> </div>

    </div>
</div>
<!-- //new-products -->