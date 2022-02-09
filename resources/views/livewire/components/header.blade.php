<div>
    <header id="masthead" class="site-header affix-top layout-3 header-default sticky-header">
        <div class="header-inner element-to-stick">
            <div class="container">
                <div class="wrap-content-header">
                    <div class="header-logo">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('public/wp-content/uploads/sites/6/2019/02/logo-03.png') }}" alt="IMG">
                        </a>
                        <a href="{{ route('home') }}" class="sticky-logo logo">
                            <img src="{{ asset('public/wp-content/uploads/sites/6/2019/02/logo-03.png') }}" alt="IMG">
                        </a>
                        <a href="{{ route('home') }}" class="retina-logo logo">
                            <img src="{{ asset('public/wp-content/uploads/sites/6/2019/02/logo-03.png') }}" alt="IMG">
                        </a> </div>
                    <nav class="main-navigation">
                        <ul id="primary-menu" class="menu-lists">
                            <li id="menu-item-59"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-18 menu-item-has-children menu-item-59 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                                <a href="{{ route('home') }}" class="tc-menu-inner"><span
                                        class='tc-icon fa fa-home'></span>Home</a>
                            </li>
                            <li id="menu-item-93"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                                <a href="our-teacher/index.html" class="tc-menu-inner"><span
                                        class='tc-icon fa fa-graduation-cap'></span>Admission</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1051"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1051 tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                        <a href="blog/index.html" class="tc-menu-inner tc-megamenu-title">Blog
                                            Grid</a></li>
                                    <li id="menu-item-1052"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1052 tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                        <a href="../blog/index.html" class="tc-menu-inner tc-megamenu-title">Blog
                                            List</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-94"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                                <a href="{{ route('about') }}" class="tc-menu-inner"><span
                                        class='tc-icon fa fa-users'></span>About us</a></li>
                            <li id="menu-item-92"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                                <a href="{{ route('contact') }}" class="tc-menu-inner"><span
                                        class='tc-icon fa fa-book'></span>Contact us</a></li>
                        </ul>
                    </nav>
                    <div class="menu-right">

                        <div class="menu-mobile-effect navbar-toggle">
                            <div class="icon-wrap">
                                <i class="ion-navicon"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    {{--    Mobile Header   --}}
    <nav class="mobile-menu-container mobile-effect" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="inner-menu">
            <div class="widget-area">
                <div class="widget nav navbar-nav">
                    <h3 class="widget-title">Menu</h3>
                    <ul class="menu">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-59 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="{{ route('home') }}" class="tc-menu-inner">
                                <span class='tc-icon fa fa-home'></span>Home
                            </a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-93 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="our-teacher/index.html" class="tc-menu-inner"><span
                                    class='tc-icon fa fa-graduation-cap'></span>Admission</a>
                            <ul class="sub-menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-933 tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                    <a href="../index.html" class="tc-menu-inner tc-megamenu-title">Home 01</a></li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-934 tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                    <a href="../demo-2/index.html" class="tc-menu-inner tc-megamenu-title">Home
                                        02</a></li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-935 tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                    <a href="index.html" class="tc-menu-inner tc-megamenu-title">Home 03</a></li>
                            </ul>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="{{ route('about') }}" class="tc-menu-inner"><span
                                    class='tc-icon fa fa-users'></span> About us</a></li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="{{ route('contact') }}" class="tc-menu-inner"><span
                                    class='tc-icon fa fa-book'></span>Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
