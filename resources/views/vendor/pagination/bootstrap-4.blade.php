@if ($paginator->hasPages())
    <ul class="clearfix" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="prev disabled">
                {{-- <span class="page-link" aria-hidden="true">&lsaquo;</span> --}}
                <a href="#">
                    <i class="fa fa-arrow-left"></i>Older Page
                </a>
            </li>
        @else
            <li class="prev">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-arrow-left"></i>Older Page</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span >{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><a><span >{{ $page }}</span></a></li>
                    @else
                        <li><a  href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next">
                <a  href="{{ $paginator->nextPageUrl() }}" rel="next" >Next Page<i class="fa fa-arrow-right"></i></a>
            </li>
        @else
            <li class="next disabled">
                {{-- <span  aria-hidden="true">&rsaquo;</span> --}}
               <a href="#">Next Page<i class="fa fa-arrow-right"></i></a>
            </li>
        @endif
    </ul>
@endif
