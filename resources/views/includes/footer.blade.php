
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <div class="column col-lg-4">
                        <div class="widget about-widget">
                            <div class="logo">
                                @include('includes.logo', ['height'=>null])
                            </div>
                        </div>     
                    </div>
                    
                    
                    <div class="column col-lg-4">
                        <div class="footer-widget newsletter-widget">
                            <h3 class="widget-title">Reach Us</h3>
                            <div class="widget-content">
                                {{-- <div class="hint">Get latest updates and offers.</div>
                                <form action="#">
                                    <input type="email" placeholder="Enter your email address">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form> --}}
                                <div class="text">{!!$appearance->address !!}</div>
                                
                            </div>
                        </div>
                    </div>

                    {{-- Column --}}
                    <div class="column col-lg-4">
                        <div class="footer-widget newsletter-widget">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="widget-content">
                                {{-- <div class="hint">Get latest updates and offers.</div>
                                <form action="#">
                                    <input type="email" placeholder="Enter your email address">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form> --}}
                                <strong><h4><a href="tel: {{ $appearance->phone_number }}">{{ $appearance->phone_number }}</a></h4></strong>
                                <br>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="{{ $appearance->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $appearance->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </footer>