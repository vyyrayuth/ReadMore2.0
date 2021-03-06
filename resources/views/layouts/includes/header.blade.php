<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src="img/logo3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Homepage</a></li>
                            <li><a href=""> Browse <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('extends.cat-extend')}}"> Categories </a></li>
                                    <li><a href="{{ route('extends.det-extend')}}">Anime Details</a></li>
                                    <li><a href="{{ route('extends.watch-extend')}}">Anime Watching</a></li>
                                    <li><a href="{{ route('extends.blog-extend')}}">Blog Details</a></li>
                                    <li><a href="{{ route('extends.sign-extend')}}">Sign Up</a></li>
                                    <li><a href="{{ route('extends.login-extend')}}">Login</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('extends.our-blog-extend')}}">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="{{ route('extends.login-extend')}}"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->