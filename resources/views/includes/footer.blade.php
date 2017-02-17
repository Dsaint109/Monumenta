<footer>
    <div class="footer-top">
        <div class="container">
            <div class="foo-grids">
                <div class="col-md-3 footer-grid" data-aos="fade-up-right">
                    <h4 class="footer-head">Who We Are</h4>
                    <p>Monumenta.biz, a portal crafted for you to find whatever it is you need as fast and efficient as possible. Your satisfaction is guaranteed.</p>
                    <p>We are a web directory that helps agencies and entrepreneurs connect with the world fast and seamlessly. Your satisfaction is our major priority.</p>
                </div>
                <div class="col-md-3 footer-grid" data-aos="fade-up">
                    <h4 class="footer-head">Help</h4>
                    <ul>
                        <li><a href="{{ route('howitworks') }}">How it Works</a></li>
                        <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                        <li><a href="{{ route('faq') }}">Faq</a> / <a href="{{ route('Forums') }}">Forums</a> </li>
                        <li><a href="{{ route('feedback') }}">Feedback</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid" data-aos="fade-up">
                    <h4 class="footer-head">Information</h4>
                    <ul>
                        <li><a href="{{ route('regions') }}">Locations Map</a></li>
                        <li><a href="{{ route('terms') }}">Terms of Use</a></li>
                        <li><a href="{{ route('popular-searches') }}">Popular searches</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid" data-aos="fade-up">
                    <h4 class="footer-head">Contact Us</h4>
                    <span class="hq">Our headquarter</span>
                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-map-marker"></span></li>
                            <li>45 Alhaji Azeez, Yaba, Lagos. Nigeria.</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li>+234 802 501 8384</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:contact@monumenta.biz">contact@monumenta.biz</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </address>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="footer-logo">
                <a href="{{ route('home') }}"><span>Monu</span>menta</a>
            </div>
            <div class="footer-social-icons">
                <ul>
                    <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                    <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                    <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                    <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                    <li><a class="youtube" href="#"><span>Youtube</span></a></li>
                </ul>
            </div>
            <div class="copyrights">
                <p> © 2016 -2017 Monumenta. All Rights Reserved | Design by  <a href="http://www.saintswebnology.com" target="_blank"> SaintsWebnology</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ URL::to('js/scrollreveal.min.js')  }}" ></script>
<script type="text/javascript">
    window.sr = ScrollReveal({ reset: true, duration: 800});
    sr.reveal('.focus-grid');
    sr.reveal('.work-section-grid');
    sr.reveal('.person-about');
    sr.reveal('.person-img');
    sr.reveal('.person-info');
</script>