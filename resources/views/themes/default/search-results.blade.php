@if($trips->count() > 0)
    @foreach ($trips as $row)
        <div class="uk-margin-bottom">
            <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                <div class="uk-width-2-5@m">
                    <div class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">                          
                        <img src="{{!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="{{$row->trip_title}}">
                        <div class="uk-position-top-left uk-overlay uk-overlay-default" style="background: none;">
                            {{-- <button class="uk-wish-button" onclick="toggleActive(this)"><i class="fa-solid fa-heart" aria-hidden="true"></i></button> --}}
                            <button class="uk-wish-button"id="wish-button" data-id="{{ $row->id }}"><i class="fa-solid fa-heart" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                    <div class="uk-text-title uk-text-title uk-flex uk-flex-between uk-flex-middle">
                        <div>
                            <div class="uk-star-rating">
                                @for ($i = 0 ; $i < $row->rating ; $i++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                            </div>
                            <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">
                                <h2>{{$row->trip_title}}</h2>
                            </a>
                        </div>
                        <div>
                            <h2 class="uk-margin-remove uk-text-right" style="font-size:20px;">US ${{$row->price}}</h2>
                            <h3 class="uk-margin-remove uk-secondary uk-text-right" style="font-size:17px;"> € {{$row->price_euro}}</h3>
                        </div>
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
                                <p class="uk-trip-description uk-margin-remove">{{$row->duration}} Days</p>
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
                                <p class="uk-trip-description uk-margin-remove">{{($row->trip_grade)}}</p>
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
    <div class="uk-section uk-text-center uk-text-bold uk-text-lead"><strong>No trips found matching your criteria.</strong></div>
@endif