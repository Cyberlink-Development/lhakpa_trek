@if($trips->count() > 0)
    @foreach ($trips as $row)
        <div class="uk-margin-bottom">
            <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                <div class="uk-width-2-5@m">
                    <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                        <img src="{{!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                    </a>
                </div>
                <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                    <div class="uk-star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="uk-text-title uk-text-title uk-flex uk-flex-between">
                        <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">
                            <h2>{{$row->trip_title}}</h2>
                        </a>
                        @if($row->price)
                            <h2>US ${{$row->price}}</h2>
                        @endif
                    </div>
                    <p class="uk-margin-remove line-three">
                        {{$row->sub_title}}
                    </p>
                    <hr style="border-color: var(--grey);">
                    <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                        <div class="uk-flex uk-flex-middle uk-trip">
                            <i class="fa-solid fa-calendar"></i>
                            <div>
                                <p class="uk-trip-title uk-margin-remove">Duration</p>
                                <p class="uk-trip-description uk-margin-remove">{{$row->duration}}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-trip ">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <p class="uk-trip-title uk-margin-remove">Location</p>
                                <p class="uk-trip-description uk-margin-remove">{{getDestinationNameByTripId($row->id)}}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-trip ">
                            <i class="fa-solid fa-calendar"></i>
                            <div>
                                <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                <p class="uk-trip-description uk-margin-remove">{{grade_message_trek($row->trip_grade)}}</p>
                            </div>
                        </div>
                        <div>
                            <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-btn uk-btn-secondary">Know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="uk-section uk-text-center">No trips found matching your criteria.</div>
@endif