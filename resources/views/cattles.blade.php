@extends('layouts.app')



@section('content')
@include('includes.title', ['title'=>'Cattles'])
<!-- Our Products -->
<section class="products-section">
    <div class="auto-container">
        <div class="row">
            {{-- <div class="col-xl-3 col-lg-4">
                <div class="sidebar">
                    <div class="shop-sidebar"> --}}
                        {{-- <div class="widget widget_search">
                            <form action="blog-2.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Your Keyword ..." required="">
                                    <button type="search"><i class="stroke-gap-icon icon-Search"></i></button>
                                </div>
                            </form>
                        </div> --}}
                        {{-- <div class="widget widget_categories">
                            <h3 class="widget-title">Product Categories</h3>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">
                                    <li><a href="#">Milk Bottle<span>(02)</span></a></li>
                                    <li><a href="#">Pure Chees <span>(08)</span></a></li>
                                    <li><a href="#">Rosted Milk <span>(14)</span></a></li>
                                    <li><a href="#">Cream <span>(8)</span></a></li>
                                    <li><a href="#">Desserts <span>(11)</span></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        {{-- <div class="widget widget_filter-price">
                            <h3 class="widget-title">Filter by Price</h3>
                            <div class="range-slider clearfix">
                                <div class="price-range-slider"></div>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <div class="title">Price:</div>
                                        <div class="input"><input type="text" class="property-amount" name="field-name"
                                                readonly></div>
                                    </div>
                                    <div class="float-right">
                                        <a href="#" class="theme-btn">Filter</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    {{-- </div>
                </div>
            </div> --}}
            <div class="col-xl-12 col-lg-11">
                <div class="shop-option-panel">
                    <div class="left-column">
                        {{-- <div class="layout-switcher">
                            <a href="#"><i class="fas fa-th-large"></i></a>
                            <a href="#"><i class="fas fa-list"></i></a>
                        </div> --}}
                        <div class="showing-result">Showing 1 - 12 of {{ $allcattles->total() }} results</div>
                    </div>
                    <div class="right-column">
                        {{--  --}}
                    </div>
                </div>
                <div class="row">
                    @forelse($allcattles as $cattle)
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('cattle-detail', $cattle->slug) }}"><img src="{{asset('upload').'/'.$cattle->coverPhoto}}"
                                        alt="cattle-image"></a>
                                @if ($cattle->bookingStatus)
                                <div class="ribbon-wrapper">
                                    <div class="ribbon">Booked</div>
                                    </div>
                                @endif
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{ route('cattle-detail', $cattle->slug) }}">{{ $cattle->name }}</a></h4>
                                <div class="price">BDT {{ $cattle->price }}</div>
                                <a href="{{ route('cattle-detail', $cattle->slug) }}" class="theme-btn">See Detail</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center col-12">
                    <h3>No Cattle Found!</h3>
                    @if(request()->is('search'))
                    <small>Try changing your search keywords! Or you can <a href="{{url('/cattles')}}">see all</a></small>

                    @endif
                    </div>
                    @endforelse









                </div>

                <div class="shop-pagination">
                   {{ $allcattles->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
