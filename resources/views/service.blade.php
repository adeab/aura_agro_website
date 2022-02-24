@extends('layouts.app')



@section('content')



    <!-- Recipe Details -->
    <section class="recipe-details">
        <div class="auto-container">
            <figure class="image-box"><a href={{ asset('upload').'/'.$service->image }}
                title="{{ $service->title }}"><img src="{{asset('upload').'/'.$service->image}}"
                    alt=""></a></figure>
            <div class="content">
                
                <h3>{{$service->title}}</h3>
                <p>{!!$service->detail!!}</p>
                <div class="print-page"><a href="javascript:window.print()"><i class="flaticon-null"></i> Print This Page</a></div>
            </div>                
        </div>
    </section>

@endsection
