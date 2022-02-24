@extends('layouts.app')
@section('content')

@include('includes.title', ['title'=>'Services'])
<!-- Our Services Two -->
<section class="services-section-two">
    <div class="auto-container">
        <div class="sec-title">
            <h2>What We Do </h2>
            <div class="text">{{$appearance->service_text}}</div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-6 service-block-two">
                <div class="inner-box">
                    <div class="image">
                        <a href="{{ route('service-detail', $service->slug) }}">
                            <img src="{{asset('upload').'/'.$service->image}}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <a href="{{ route('service-detail', $service->slug) }}">
                            <h4>{{$service->title}}</h4>
                        </a>
                        
                    </div>
                </div>
            </div>    
            @endforeach
            
        
            
            
        </div>
    </div>
</section>
@endsection