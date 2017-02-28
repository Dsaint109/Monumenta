<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Top Shops</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">

                @foreach($shops->take(10) as $shop)
                    <li>
                        @if($shop->image_url)
                            <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}" class="img-responsive" />
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
                    </li>
                @endforeach


                    <li>
                        <img src="images/Fashion/5.png" alt=" " class="img-responsive" />
                    </li>

                    <li>
                        <img src="images/Fashion/6.png" alt=" " class="img-responsive" />
                    </li>

                    <li>
                        <img src="images/Fashion/7.png" alt=" " class="img-responsive" />
                    </li>

                    <li>
                        <img src="images/Fashion/46.jpg" alt=" " class="img-responsive" />
                    </li>

            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
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
    </div>
</div>
<!-- //top-brands -->
