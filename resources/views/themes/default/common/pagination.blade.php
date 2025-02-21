@if ($paginator->hasPages())
<div class="uk-flex uk-flex-center">
<nav aria-label="Pagination">

    <ul class="uk-pagination" uk-margin>
          @if ($paginator->onFirstPage())
        <li><span uk-pagination-previous disabled class="text-primary"></span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}"><span uk-pagination-previous></span></a></li>
    @endif
     @foreach ($elements as $element)
      @if (is_string($element))
                <!-- <li class="uk-disabled"><span>{{ $element }}</span></li> -->
                <li class=""><span>…</span></li>
            @endif
                     {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())    
                        <li class="uk-active"><span aria-current="page">{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
    
        @endforeach

        @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}"><span uk-pagination-next class="text-primary"></span></a></li>
        @else
        <li> <span uk-pagination-next disabled></span></li>
    @endif 
    </ul>
</nav>
</div>
@endif