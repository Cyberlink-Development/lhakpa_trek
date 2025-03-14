<div class="uk-flex uk-flex-center uk-margin-top uk-margin-bottom">
    <nav aria-label="Pagination">
        <ul class="uk-pagination" uk-margin>
            {{-- Previous Page Link --}}
            @if ($trips->onFirstPage())
                <li class="uk-disabled"><span uk-pagination-previous></span></li>
            @else
                <li><a href="{{ $trips->previousPageUrl() }}"><span uk-pagination-previous></span></a></li>
            @endif

            {{-- Pagination Links --}}
            @foreach ($trips->getUrlRange(1, $trips->lastPage()) as $page => $url)
                @if ($page == $trips->currentPage())
                    <li class="uk-active"><span aria-current="page">{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($trips->hasMorePages())
                <li><a href="{{ $trips->nextPageUrl() }}"><span uk-pagination-next></span></a></li>
            @else
                <li class="uk-disabled"><span uk-pagination-next></span></li>
            @endif
        </ul>
    </nav>
</div>
