<div class="header">
    <div class="container">
        <div class="w3l_login dropdown" id="avatarLogin">

            @if(Auth::user())
                <a id="dLabel" data-target="#" class="a" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="/images/uploads/profile/{{ Auth::user()->avatar }}" width="50px" height="50px" class="img-responsive">
                </a>

                <ul class="dropdown-menu" style="left: 0px;" aria-labelledby="dLabel">



                    @if(!$shops->whereIn('user_id', Auth::user()->id)->first())
                        <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; Profile</a></li>
                        <li><a href="{{ route('fashion-sell') }}"><i class="fa fa-tag"></i>&nbsp;&nbsp;&nbsp; Sell </a></li>
                        <li role="separator" class="divider"></li>
                    @else
                        <li><a href="{{ route('shop-dashboard') }}"><i class="fa fa-cogs"></i>&nbsp;&nbsp;&nbsp; Dashboard</a></li>
                        <li><a href="{{ route('shop-add-products') }}"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp; Add Products</a></li>
                        <li><a href="{{ route('shop-my-products') }}"><i class="fa fa-cart-arrow-down"></i>&nbsp;&nbsp;&nbsp; My Products</a></li>
                        <li><a href="{{-- route('shop-notifications') --}}"><i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp; Notifications </a></li>
                        <li><a href="{{-- route('deal-create') --}}"><i class="fa fa-shopping-bag"></i>&nbsp;&nbsp;&nbsp; Create Deals </a></li>

                        @if (! $shops->whereIn('user_id', Auth::user()->id)->first()->featured)
                            <li><a href=""><i class="fa fa-btn fa-shopping-bag"></i>&nbsp;&nbsp;&nbsp; Boost my Shop</a></li>
                        @endif

                        <li role="separator" class="divider"></li>
                    @endif



                    <li><a href="{{ route('fashion-logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;&nbsp;&nbsp; Logout </a></li>


                </ul>
            @else
                <a href="#" data-toggle="modal" class="a" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            @endif

        </div>
        <div class="w3l_logo">
            <h1><a href="{{ route('fashion-home') }}">Monumenta Fashion<span>For Fashion Lovers</span></a></h1>
        </div>
        <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
            <div class="search_form">
                <form action="#" method="post">
                    <input type="text" name="Search" placeholder="Search...">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        <div class="cart box_1">
            <a href="">
                <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                <i class="fa fa-shopping-cart" style="font-size: 18px"></i>
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('fashion-home') }}" class="@if($route == 'fashion-home')
                                    act
                                @endif">Home</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">

                                        <h6>Categories</h6>

                                        @foreach($categories as $category)
                                            @if($loop->first || $loop->last)
                                                <li><a href="/Category/{{ $category->name }}">{{ $category->name }}<span>New</span></a></li>
                                            @else
                                                <li><a href="/Category/{{ $category->name }}">{{ $category->name }}</a></li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Deals for you</h6>
                                        <li><a href="/Featured/Products">Featured</a></li>
                                        <li><a href="/Deals/Sales">Sales<span>New</span></a></li>
                                        @if($shops->where('featured', 1)->first())
                                        <li><a href="/Shops/{{ $shops->where('featured', 1)->first()->slug }}"><i>{{ $shops->where('featured', 1)->first()->name }}</i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-sm-2">
                                    <ul class="multi-column-dropdown">
                                        <h6>Trending</h6>
                                        <li><a href="sandals.html">Flats</a></li>
                                        <li><a href="sandals.html">Sandals</a></li>
                                        <li><a href="sandals.html">Boots</a></li>
                                        <li><a href="sandals.html">Heels</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w3ls_products_pos">
                                        <h4>50%<i>Off/-</i></h4>
                                        <img src="/images/Fashion/1.jpg" alt=" " class="img-responsive" />
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="{{ route('fashion-about') }}" class="@if($route == 'fashion-about')
                                act
                            @endif">About Us</a></li>
                    <li><a href="{{ route('fashion-sell') }}" class="@if($route == 'fashion-sell')
                                act
                            @endif">Sell</a></li>
                    <li><a href="{{ route('fashion-logout') }}">Back to Monumenta</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>