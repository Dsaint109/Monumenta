<div class="main-banner banner text-center">
    <div class="container animated bounceInUp dg" >
        <div class="banner-info">
            <h3>We connect you to the world. </h3>
            <div class="search-form">
                <form action="#" method="post">
                    <input type="text" placeholder="Discover..." name="search" id="search" onclick="activeSearchOpen()" onkeydown="activeSearchOpen()" autocomplete="off">
                    <input type="submit" value=" " >
                </form>
            </div>
        </div>
    </div>
    <div class="container-search animated slideInDown zn">
        <div class="close">
            <i class="fa fa-close" id="search-close" onclick="activeSearchClose()"></i>
        </div>
        <div class="banner-info-active">
            <div class="search-form">
                <form action="#" method="post">
                    <input type="text" placeholder="Discover..." name="active-search" id="active-search" autocomplete="off" autofocus>
                    <input type="submit" value=" " >
                </form>
            </div>
        </div>

    </div>
    <div id="search-box"></div>
</div>