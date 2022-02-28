@extends('layouts.app')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}

@section('content')

<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            @if ($banners==null )
            @foreach ($banners as $banner)
            <div class="swiper-slide" style="background-image: url(upload/{{ $banner->image }});">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h1>{{ $banner->title }}</h1>
                            <div class="text">{{ $banner->subtitle }}</div>
                            <div class="link-box">
                                <a href="{{ url('/cattles') }}" class="theme-btn btn-style-one"><span>View all cattles</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach   
            @else
            <div class="swiper-slide" style="background-image: url(images/main-slider/image-2.jpg);">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h1>Demo Title</h1>
                            <div class="text">Enter sliders from admin dashboard</div>
                            <div class="link-box">
                                <a href="{{ url('/cattles') }}" class="theme-btn btn-style-one"><span>View all products</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            @endif
           
            

            <!-- Slide Item -->
            {{-- <div class="swiper-slide" style="background-image: url(images/main-slider/image-2.jpg);">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h1>Healthy Natural Products</h1>
                            <div class="text">Dairy producers worldwide face similar challenges around animal welfare, <br>farm profitability, food safety and work efficiency. </div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span>View all products</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Slide Item -->
            {{-- <div class="swiper-slide" style="background-image: url(images/main-slider/image-3.jpg);">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h1>100% Natural & Healthy Milk</h1>
                            <div class="text">Dairy producers worldwide face similar challenges around animal welfare, <br>farm profitability, food safety and work efficiency. </div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span>View all products</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="banner-slider-nav">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i></span></div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="far fa-angle-right"></i></span> </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- Welcome Section -->
<section class="welcome-section pb-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ $appearance->welcome_header }}</h2>
            <div class="text">
                {!! $appearance->welcome_message !!}
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-4 welcome-block-one">
               
                <a href="{{ route('service-detail', $service->slug) }}">
                <div class="inner-box">
                    <div class="image"><img style="height: 15rem;" src="{{asset('upload').'/'.$service->image}}" alt=""></div>
                    <div class="content">
                        <h4>{{$service->title}}</h4>
                        <div class="text">Click to see detail!</div>
                    </div>
                </div>
                </a>
               
            </div>
            @endforeach
           
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about-section" class="about-section" style="background-image: url(images/background/bg-1.jpg);">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-7">
                <div class="sec-title">
                    <h2>Our Story</h2>
                    <div class="text">
                        {!! $appearance->about_us !!}
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
            <div class="col-lg-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9E30O-WVu88" allowfullscreen></iframe>
                  </div>
            </div>
        </div>
    </div>
</section>
<h1>{{$showPopUp}}</h1>
<!-- CTA Section -->
{{-- <section class="cta-section" style="background-image: url(images/background/bg-2.jpg);">
    <div class="auto-container">
        <div class="outer-box">
            <h2>Milking Land of Milk & Honey</h2>
            <div class="text">Dairy producers worldwide face similar challenges around animal welfare, farm profitability, food safety and work efficiency. Discover how our customers are solving these challenges. Also known as the land of milk and honey for its rich and vibrant farming tradition.</div>
        </div>
    </div>
</section> --}}

<!-- Services Section -->
{{-- <section class="services-section" style="background-image: url(images/background/bg-3.jpg);">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>What We Offer</h2>
            <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque <br> ipsa quae ab illo inventore veritatis et quasi architecto beatae.</div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="image"><img src= "{{asset('images/resource/image-4.jpg')}}" alt=""></div>
                    <h4>Butter</h4>
                    <div class="text">Dairy cultivating's been a piece of <br> horticulture for long of years.</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 service-block-one">
                <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                    <div class="image"><img src= "{{asset('images/resource/image-5.jpg')}}" alt=""></div>
                    <h4>Milk</h4>
                    <div class="text">Dairy cultivating's been a piece of <br> horticulture for long of years.</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="image"><img src= "{{asset('images/resource/image-6.jpg')}}" alt=""></div>
                    <h4>Cheese</h4>
                    <div class="text">Dairy cultivating's been a piece of <br> horticulture for long of years.</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 service-block-one">
                <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                    <div class="image"><img src= "{{asset('images/resource/image-7.jpg')}}" alt=""></div>
                    <h4>Creame</h4>
                    <div class="text">Dairy cultivating's been a piece of <br> horticulture for long of years.</div>
                </div>
            </div>
        </div>
        <div class="view-all text-center mt-3"><a href="#" class="theme-btn btn-style-one style-two"><span>View all products</span></a></div>
    </div>
</section> --}}

<!-- Features Section -->
{{-- <section class="features-section">
    <div class="image-one"><img src= "{{asset('images/resource/sketch-1.jpg')}}" alt=""></div>
    <div class="image-two"><img src= "{{asset('images/resource/sketch-2.jpg')}}" alt=""></div>
    <div class="auto-container">
        <div class="feature-block-one">
            <div class="inner-box">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src= "{{asset('images/resource/image-8.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-80">
                            <h3>Natural & Organic <br> Products</h3>
                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-block-one">
            <div class="inner-box">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2">
                        <div class="image wow fadeInLeft" data-wow-duration="1500ms"><img src= "{{asset('images/resource/image-9.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pr-lg-80 pt-lg-5">
                            <h3>Featured Recipe</h3>
                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Our Products -->
{{-- <section class="products-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Shop</h2>
            <div class="text">Dairy foods like low-fat or fat-free milk, yogurt and cheese are fundamental to good nutrition. Healthy eating styles that include <br> fat-free or low-fat dairy foods have been linked to health benefits.</div>
        </div>
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "4" }}}'>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Pure Chees</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Evaporated Milk</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Paturised Cream</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Fresh Paneer</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Pure Chees</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Evaporated Milk</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Paturised Cream</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="inner-box">
                    <div class="image">
                        <a href="product-details.html"><img src= "{{asset('images/resource/products/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="product-details.html">Fresh Paneer</a></h4>
                        <div class="price">$4.90 – $8.99</div>
                        <a href="product-details.html" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Our Team -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ $appearance->team_header }}</h2>
            <div class="text">
                {!! $appearance->team_message !!}
            </div>
        </div>
        <div class="row justify-content-center" >
            @foreach ($members as $member)
            <div class="col-lg-3 col-md-6 team-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('images/team').'/'.$member->image}}" alt=""> 
                        {{-- <div class="overlay-box">
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            </ul>
                        </div>                                 --}}
                    </div>
                    <div class="content">
                        <h4>{{ $member->name }}</h4>
                        <div class="designation">{{ $member->designation }}</div>
                    </div>
                </div>
            </div>    
            @endforeach
            
            
           
            
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section" style="background-image: url(images/background/bg-4.jpg);">
    <div class="auto-container">
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
            @foreach ($testimonials as $testimonial)
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="image"><img src="{{asset('images/testimonial').'/'.$testimonial->image}}" alt=""></div>
                    <div class="content">
                        <h2>What our client says</h2>
                        <div class="text">{{ $testimonial->quote }}</div>
                        <div class="author-info">
                            <h4>{{ $testimonial->name }}</h4>
                            <div class="designation">{{ $testimonial->designation }}</div>
                        </div>                                
                    </div>                            
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>


<!-- Blog Section -->
{{-- <section class="blog-section">
    <div class="image-one"><img src= "{{asset('images/resource/sketch-3.jpg')}}" alt=""></div>
    <div class="auto-container">
        <div class="sec-title">
            <h2>Latest Blogs</h2>
            <div class="text">Farm proud  blog from our dedicated farmers</div>
        </div>
        <div class="row">
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="blog-details.html"><img src= "{{asset('images/resource/news-1.jpg')}}" alt=""></a></div>
                    <div class="content">
                        <div class="date">May 02, 2020</div>
                        <a href="blog-details.html"><h4>Earth Is What We All Have in Common...</h4></a>
                    </div>
                </div>
            </div>
            <div class="news-block-two col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="blog-details.html"><img src= "{{asset('images/resource/news-2.jpg')}}" alt=""></a></div>
                    <div class="content">
                        <div class="date">May 02, 2020</div>
                        <a href="blog-details.html"><h4>Spring into Robotic Milking Savings with us...</h4></a>
                        <a href="blog-details.html" class="read-more">Continue Reading ...</a>
                    </div>
                </div>
            </div>
            <div class="news-block-two col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="blog-details.html"><img src= "{{asset('images/resource/news-3.jpg')}}" alt=""></a></div>
                    <div class="content">
                        <div class="date">May 02, 2020</div>
                        <a href="blog-details.html"><h4>Earth Is What We All Have in Common...</h4></a>
                        <a href="blog-details.html" class="read-more">Continue Reading ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 --}}







      
@endsection

@if ($appearance->adevertise_image and $showPopUp)
@section('custom_footer')
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" >
      <div class="modal-content">
        
        <div class="modal-body">
          <img  src="{{asset('images/popup').'/'.$appearance->adevertise_image}}">
        </div>        
      </div>
    </div>
  </div>
@endsection
@endif
