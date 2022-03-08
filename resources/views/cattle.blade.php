@extends('layouts.app')



@section('content')
<section class="shop-single-section">
    <div class="auto-container">

        <div class="shop-single">
            <div class="product-details">

                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <figure class="image-box"><a href={{ asset('upload').'/'.$cattle->coverPhoto }}
                                    title="{{ $cattle->name }}"><img src="{{asset('upload').'/'.$cattle->coverPhoto}}"
                                        alt=""></a>

                                    </figure>

                        </div>
                        <div class="info-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h4>{{ $cattle->name }}</h4>

                                <div class="price">Price : <span>BDT {{ $cattle->price }}</span></div>
                                @guest

                                <div class="other-options clearfix">
                                    {{-- <div class="item-quantity"><label class="field-label">Quantity :</label><input class="quantity-spinner" type="text" value="2" name="quantity"></div> --}}
                                    @if ($cattle->bookingStatus)
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Sorry! This one is booked!</strong>
                                    </div>
                                   @else
                                   <a href="tel:{{ $appearance->phone_number }}" class="theme-btn cart-btn">Call To Make Booking</a>
                                   @endif

                                </div>

                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
                <!--Basic Details-->


                <!--Product Info Tabs-->
                <div class="product-info-tabs">
                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-details" class="tab-btn active-btn">Descripton</li>

                            @if($cattle->photos->count() or $cattle->videoLink)
                            <li data-tab="#prod-spec" class="tab-btn">Photos and Video</li>
                            @endif
                            {{-- <li data-tab="#prod-reviews" class="tab-btn">Review (2)</li> --}}
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="prod-details">
                                <div class="content">
                                    {!! $cattle->description !!}
                                </div>
                            </div>

                            <!--Tab-->
                            @if($cattle->photos->count() or $cattle->videoLink)
                            <div class="tab" id="prod-spec">
                                <div class="content">
                                    @if($cattle->videoLink)
                                        <h4>Video</h4>
                                        @php
                                        $newUrl="";
                                        $myurl=$cattle->videoLink;
                                        $newUrl=preg_replace(
                                        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                                        "<iframe src=\"//www.youtube.com/embed/$2\" width='100%' height='600'
                                            allowfullscreen></iframe>",
                                        $myurl
                                        );
                                    @endphp
                                    {!! $newUrl !!}

                                    @if($cattle->photos->count())
                                    <hr>
                                    @endif
                                    @endif
                                    @if($cattle->photos->count())
                                    <h4>Photo Album</h4>
                                    @include('includes.media_gallery', ['images' => $cattle->photos])
                                    @endif



                                </div>
                            </div>
                            @endif



                        </div>
                    </div>

                </div>
                <!--End Product Info Tabs-->

            </div>
        </div>

    </div>
</section>


@endsection
