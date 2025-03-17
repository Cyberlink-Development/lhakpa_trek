<div class="uk-flex uk-flex-center uk-margin-top uk-margin-bottom">
    <nav aria-label="Pagination">
        <ul class="uk-pagination" uk-margin>
            {{-- Previous Page Link --}}
            @if ($data->onFirstPage())
                <li class="uk-disabled"><span uk-pagination-previous></span></li>
            @else
                <li><a href="{{ $data->previousPageUrl() }}"><span uk-pagination-previous></span></a></li>
            @endif

            {{-- Pagination Links --}}
            @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                @if ($page == $data->currentPage())
                    <li class="uk-active"><span aria-current="page">{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($data->hasMorePages())
                <li><a href="{{ $data->nextPageUrl() }}"><span uk-pagination-next></span></a></li>
            @else
                <li class="uk-disabled"><span uk-pagination-next></span></li>
            @endif
        </ul>
    </nav>
</div>
