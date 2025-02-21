<!--  -->
<div class="uk-sticky-placeholder" style="height: 0px; width: 0px; margin: 0px;" hidden=""></div>
<div class="uk-blog-sidebar uk-sticky" style="z-index: 9; position: sticky; top: 100px;"
    uk-sticky="media:@m; offset: 100; bottom: #uk-stop-sticky">
    <div class="bg-white uk-box-shadow-large  uk-border-rounded">
        <div class=" uk-padding-small border-left" style="height:25px; border-bottom: 1px solid #726f6f2b;">
            <h2 class="uk-form-title">Related Topic</h2>
        </div>
        <ul class="uk-list uk-list-large uk-list-divider text-secondary uk-padding-small">
            @foreach ($related as $value)
                @if ($data->id == $value->id)
                    <li class="move">
                        <a class="uk-active "
                            href="{{ url(geturl($value->uri, $value->page_key)) }}">{{ $value->post_title }}</a>
                    </li>
                @else
                    <li class="move">
                        <a class="text-secondary "
                            href="{{ url(geturl($value->uri, $value->page_key)) }}">{{ $value->post_title }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
<!--  -->
