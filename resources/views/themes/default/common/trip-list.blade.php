<!--  -->
@if($trips != null)
@foreach ($trips as $item)
<li>
<div class="uk_trip uk-transition-toggle uk-link-toggle" uk-scrollspy-class>
    <a href="{{ url('page/' . tripurl($item->uri)) }}" class="uk-media-350 uk_trip_image uk-position-relative">
        @if($item->thumbnail != null)
        <img src="{{ asset('uploads/original/'.$item->thumbnail) }}"
            class="uk-image uk-transition-scale-up uk-transition-opaque" alt="{{$item->trip_title}}" loading="eager">
        @else
        <img src="{{asset('theme-assets/images/default-thumbnail.png')}}"
            class="uk-image uk-transition-scale-up uk-transition-opaque" alt="{{$item->trip_title}}" loading="eager">
        @endif
        <div class="uk-panel uk_trip_image_content uk-position-bottom">
            @if($item->discount != null)
            <span class="uk_trip_tag">
                <span>{{$item->discount}}% OFF</span>
            </span>
            @endif
            @if($item->duration==!NULL || $item->trip_grade==!NULL)
            <div class="uk-short-info  uk-width-1-1 uk-panel" uk-scrollspy-class>
                <div class="uk-grid-small uk-grid-divider uk-margin-remove-first-child uk-child-width-1-2 f-13 f-w-600 text-secondary-light"
                    uk-grid>
                    <!--  -->
                    @if($item->duration==!NULL)
                    <div class="uk-flex uk-flex-middle">
                        <div> <img class="uk-margin-small-right" src="{{asset('theme-assets/images/icons/duration.svg')}}"
                                width="40" class="uk-light"> </div>
                        <div>
                            <span class="f-12">Duration</span>
                            <div class="text-orange">{{$item->duration}}@if($item->duration == 1) Day @else Days @endif</div>
                        </div>
                    </div>
                    @endif
                    <!--  -->
                    <!--  -->
                    @if($item->trip_grade==!NULL)
                    <div class="uk-flex uk-flex-middle">
                        <div>
                          <img src="{{asset('theme-assets/images/icons/level'.$item->trip_grade.'.svg')}}"width="40" class="uk-light">
                        </div>
                        <div>
                            <span class="f-12">Difficulty</span>
                            <div class="text-orange">{{grade_message_trek($item->trip_grade)}}</div>
                        </div>
                    </div>
                    @endif
                    <!--  -->
                </div>
            </div>
            @endif
        </div>
    </a>
    <div class="uk_trip_content bg-white uk-flex uk-flex-between uk-flex-column">
        <div>
            <h4 class="uk-text-bold uk-margin-small-bottom"><a href="{{ url('page/' . tripurl($item->uri)) }}"
                    class="text-secondary-light">{{$item->trip_title}}</a>
            </h4>
            @if($item->max_altitude != null)
            <div class="f-14 uk-margin-small-bottom text-secondary-light" uk-scrollspy-class>Max
                Altitude 
                <span class="text-orange">({{$item->max_altitude}})</span>
            </div>
            @endif
            <div class="f-14 uk-margin-remove text-secondary-light" uk-scrollspy-class>
                {!! Str::limit($item->trip_excerpt, 100, ' ...') !!}
            </div>
        </div>
        <a href="{{ url('page/' . tripurl($item->uri)) }}" class="uk-width-1-1 uk-button button-primary button-primary-active uk-margin-top" uk-scrollspy-class>View Details</a>
    </div>
</div>
</li>
@endforeach
@endif
