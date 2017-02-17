<div class="special-deals">
    <div class="container">
        <h2>Special Deals</h2>
        <div class="w3agile_special_deals_grids">
            <div class="col-md-7 w3agile_special_deals_grid_left">
                <div class="w3agile_special_deals_grid_left_grid">
                    <img src="images/Fashion/26.jpg" alt=" " class="img-responsive" />
                    <div class="w3agile_special_deals_grid_left_grid_pos1">
                        <h5>30%<span>Off/-</span></h5>
                    </div>
                    <div class="w3agile_special_deals_grid_left_grid_pos">
                        <h4>We Offer <span>Best Products</span></h4>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="sliderfig">
                            <ul id="flexiselDo1">
                                <li>
                                    <img src="images/Fashion/4.jpg" alt=" " class="img-responsive" />
                                </li>
                                <li>
                                    <img src="images/Fashion/5.jpg" alt=" " class="img-responsive" />
                                </li>
                                <li>
                                    <img src="images/Fashion/6.jpg" alt=" " class="img-responsive" />
                                </li>
                                <li>
                                    <img src="images/Fashion/7.jpg" alt=" " class="img-responsive" />
                                </li>
                                <li>
                                    <img src="images/Fashion/8.jpg" alt=" " class="img-responsive" />
                                </li>
                            </ul>
                        </div>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDo1").flexisel({
                                    visibleItems: 3,
                                    animationSpeed: 2000,
                                    autoPlay: true,
                                    autoPlaySpeed: 2000,
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
                                            visibleItems: 2
                                        }
                                    }
                                });

                            });
                        </script>
                    </div>
                </div>

                {{--<div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="images/Fashion/1.png" alt=" " class="img-responsive" />
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur</p>
                                    <h4>Laura</h4>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="images/Fashion/2.png" alt=" " class="img-responsive" />
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur</p>
                                    <h4>Michael</h4>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="images/Fashion/3.png" alt=" " class="img-responsive" />
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur</p>
                                    <h4>Rosy</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="{{ URL::to('Fashion/js/jquery.wmuSlider.js') }}"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>--}}


            </div>
            <div class="col-md-5 w3agile_special_deals_grid_right">
                <img src="images/Fashion/25.jpg" alt=" " class="img-responsive" />
                <div class="w3agile_special_deals_grid_right_pos">
                    <h4>Women's <span>Special</span></h4>
                    <h5>save up <span>to</span> 30%</h5>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>