@extends('layouts.app')
@section('content')
<section class="page-title" style="background-image:url({{ asset('images/background/bg-7.jpg')}}">
    <div class="auto-container">
        <h2>Services</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Services</li>
        </ul>
    </div>
</section>

<!-- Our Services Two -->
<section class="services-section-two">
    <div class="auto-container">
        <div class="sec-title">
            <h2>What We Do </h2>
            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
        </div>
        <div class="row">
            <div class="col-lg-6 service-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/resource/image-19.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h4>Working on Best Breeding Processes Of Cows</h4>
                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 service-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/resource/image-20.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h4>Selecting The Best Cows for getting More Milk</h4>
                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 service-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/resource/image-21.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h4>Milk Preservation In <br>Farm</h4>
                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 service-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/resource/image-22.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h4>Automated Milking for High <br>Production of Milk</h4>
                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection