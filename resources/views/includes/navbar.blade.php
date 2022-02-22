        <!-- Main Menu -->
        <div class="main-menu">
            <div class="auto-container">
                <div class="inner-container">
                    <span class="border-shape"></span>
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="{{ asset('images/icons/icon-bar.png')}}" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                    <li><a href="{{ url('/') }}">Home </a></li>
                                    <li class="dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="about.html">Our Introduction</a></li>
                                            <li><a href="farmers.html">Our Farmers</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="gallery.html">Our Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('allcattles') }}">Qurbani Cattle</a></li>
                                    {{-- <a href="{{ url('/home') }}">Home</a>
                                    @else
                                    <a href="{{ route('login') }}">Login</a> --}}
                                    <li><a href="{{ route('allservices') }}">Qurbani Services</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header main-menu">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="nav-outer">
                        <span class="border-shape"></span>
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->
                        <!-- Main Menu End-->
                        {{-- <button type="button" class="theme-btn search-toggler"><span class="stroke-gap-icon icon-Search"></span></button> --}}
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/logo-three.png')}}" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
