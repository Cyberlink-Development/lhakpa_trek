@extends('themes.default.common.master')
@section('title', $data->meta_title ? $data->meta_title : $data->trip_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->thumbnail)
@section('content')
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed"
        uk-height-viewport data-src="{{ asset('uploads/banners/' . $data->banner) }} " uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-position-center uk-text-center uk-inner-banner uk-padding-large"
            uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
            <h5 class="uk-margin-top white-center-underline">{{ $data->activities->isNotEmpty() ? strtoupper($data->activities[0]->activity_parent) : '' }}</h5>
            <p class="banner-heading  uk-margin-remove">{{ $data->trip_title }}</p>
            <p class="text-white bottom-font1">
                {{ $data->sub_title }}
            </p>
        </div>
    </section>
    <section class="uk-section uk-trip-facts mountain-bg">
        <div class="uk-container ">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                    <div class="uk-panel">
                        <div class="uk-margin">
                            <div class="uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid-match uk-grid uk-flex-left uk-trip-feature"
                                uk-grid="">
                                @if ($data->trip_grade)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"><img
                                                    src="{{ asset('theme-assets/images/trip-icons/grade.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong class="text-primary">Trip
                                                            Grade</strong></p>
                                                    <p class="uk-margin-remove">{{ grade_message_trek($data->trip_grade) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->duration)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"> <img
                                                    src="{{ asset('theme-assets/images/trip-icons/duration.png') }}"
                                                    alt=""> </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong
                                                            class="text-primary">Duration</strong></p>
                                                    <p class="uk-margin-remove">{{ $data->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->walking_per_day)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto">
                                                <img src="{{ asset('theme-assets/images/trip-icons/hiking.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong class="text-primary">Daily
                                                            Activity</strong></p>
                                                    <p class="uk-margin-remove">{{ $data->walking_per_day }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->destinations()->first() != null)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"> <img
                                                    src="{{ asset('theme-assets/images/trip-icons/country.png') }}"
                                                    alt=""> </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong
                                                            class="text-primary">Country</strong></p>
                                                    <p class="uk-margin-remove">{{ $data->destinations()->first()->title }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->best_season)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"> <img
                                                    src="{{ asset('theme-assets/images/trip-icons/season.png') }}"
                                                    alt=""> </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong class="text-primary">Season</strong>
                                                    </p>
                                                    <p class="uk-margin-remove">{{ $data->best_season }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->group_size)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"><img
                                                    src="{{ asset('theme-assets/images/trip-icons/group.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong class="text-primary">Group
                                                            Size</strong></p>
                                                    <p class="uk-margin-remove">{{ $data->group_size }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->max_altitude)
                                    <div>

                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"> <img
                                                    src="{{ asset('theme-assets/images/trip-icons/altitude.png') }}"
                                                    alt=""> </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong class="text-primary">Max
                                                            Altitude</strong></p>
                                                    <p class="uk-margin-remove">{{ $data->max_altitude }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endif
                                @if($data->peak_name)
                                    <div>  
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto">
                                                <img src="{{ asset('theme-assets/images/trip-icons/transportation.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong
                                                            class="text-primary">Transportation</strong></p>
                                                    <p class="uk-margin-remove">{{$data->peak_name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->accommodation)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"> <img
                                                    src="{{ asset('theme-assets/images/trip-icons/accommodation.png') }}"
                                                    alt=""> </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong
                                                            class="text-primary">ACCOMMODATION</strong></p>
                                                    <p class="uk-margin-remove">{{ $data->accommodation }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($data->trip_type)
                                    <div>
                                        <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                            uk-grid="">
                                            <div class="uk-width-auto"> <img
                                                    src="{{ asset('theme-assets/images/trip-icons/trip-type.png') }}"
                                                    alt=""> </div>
                                            <div>
                                                <div>
                                                    <p class="uk-margin-remove"><strong class="text-primary">Trip Type</strong>
                                                    </p>
                                                    <p class="uk-margin-remove">{{get_trip_type($data->trip_type) == 'Activity' ? get_experience_type($data) : get_trip_type($data->trip_type)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-position-relative">
        <div class="uk-grid-margin uk-grid-small uk-grid-stack" uk-grid>
            <div class="uk-width-1-1@m">
                <div class="bg-primary uk-light uk-sticky"
                    uk-sticky="offset: 80;  animation: uk-animation-slide-top uk-animation-slow uk-transform-origin-bottom-center"
                    style="z-index:2;">
                    <div class="uk-small-details-nav">
                        <div class="uk-container uk-position-relative">
                            <ul class="uk-navbar-single uk-flex uk-flex-between uk-flex-middle uk-margin-remove-bottom"
                                style="display:block;"uk-tab="connect: #component-tab-right; animation: uk-animation-fade;">
                                <li>
                                    <a href="#"><i class="uk-margin-small-right fa fa-file-text"></i> Overview </a>
                                </li>
                                @if($itinerary->count() > 0)
                                    <li>
                                        <a href="#"> <i class="uk-margin-small-right fa fa-list"></i> Itinerary </a>
                                    </li>
                                @endif
                                @if ($cost_includes->count() > 0)
                                    <li>
                                        <a href="#"> <i class="uk-margin-small-right fa fa-check-circle-o"></i>
                                            Includes </a>
                                    </li>
                                @endif
                                @if ($cost_excludes->count() > 0)
                                    <li>
                                        <a href="#"> <i class="uk-margin-small-right  fa fa-times-circle "></i>
                                            Excludes </a>
                                    </li>
                                @endif
                                @if ($data->trip_map)
                                    <li>
                                        <a href="#"> <i class="uk-margin-small-right fa fa-map"></i> Maps</a>
                                    </li>
                                @endif
                                @if ($schedules->count() > 0)
                                    <li>
                                        <a href="#"> <i class="uk-margin-small-right fa fa-calendar"></i> Dates </a>
                                    </li>
                                @endif
                                 @if ($photo_videos->count() > 0)
                                <li>
                                    <a href="#"> <i class="uk-margin-small-right fa fa-image"></i>Gallery </a>
                                </li>
                                @endif
                                <li>
                                    <a href="#"> <i class="uk-margin-small-right fa fa-user"></i> Review </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="uk-margin-small-right fa fa-cogs"></i> Equipments</a>
                                </li>
                                @if ($faqs->count() > 0)
                                    <li>
                                        <a href="#"> <i class="uk-margin-small-right fa fa-comment"></i> FAQ </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section bg-white ">
        <div class=" uk-container">
            <div class="">
                <div class=" uk-switcher" id="component-tab-right"
                    uk-scrollspy="cls: uk-animation-slide-left-small; target:  li, img, p, h1,a;  delay: 50; repeat: false;">
                    <!-- start Overview -->
                    <div class="uk-single-section uk-padding-remove-top uk-grid">
                        <div class=uk-width-2-3@m>
                            <h3 class="text-primary">OVERVIEW</h3>
                            <hr>
                            {!! $data->trip_content !!}
                            @if($data->thumbnail)
                            <img src="{{ asset('uploads/original/' . $data->thumbnail) }}"
                                class="uk-border-rounded uk-box-shadow-large uk-cover uk-media-300" alt="{{ $data->trip_title }}">
                             @else
                             <img src="{{ asset('theme-assets/images/blank.png') }}"
                                class="uk-border-rounded uk-box-shadow-large uk-cover uk-media-300" alt="{{ $data->trip_title }}">
                             @endif
                             @if($data->trip_highlight)
                            <div class="bg-light uk-padding uk-margin-top">
                                <p class="mid-topic">Trip Highlight</p>
                              {!! $data->trip_highlight !!}

                            </div>
                            @endif
                        </div>
                       @include('themes.default.trip-action')
                    </div>
                    <!-- end Overview -->
                    <!-- iternary  start-->
                    @if ($itinerary->count() > 0)
                        <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                            <div class=uk-width-2-3@m>
                                <h3 class="text-primary">ITINERARY</h3>
                                <hr>
                                <ul uk-accordion class="uk-accordion uk-accordion-outline uk-itinerary">
                                    <!--  -->
                                    @foreach ($itinerary as $item)
                                        <li class="uk-itenary-list">
                                            <div class="uk-accordion-title  uk-itinerary-title">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid uk-height-match>
                                                    <div class="uk-width-auto uk-text-center uk-itenary-day-section">
                                                        <div class="uk-day uk-margin-small-right">
                                                            <p class=" uk-itenary-day">DAY
                                                                <br><span>{{ $item->days }}</span> </p>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand uk-flex uk-flex-middle">
                                                        <div class="uk-width-1-1">
                                                            <p class="uk-margin-remove"> {{ $item->title }} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-accordion-content uk-itinerary-content">
                                                <p>
                                                    {!! $item->content !!}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                    <!--  -->

                                </ul>
                            </div>
                             @include('themes.default.trip-action')
                        </div>
                    @endif
                    <!-- end of itenary -->
                    <!-- includes start -->
                    @if ($cost_includes->count() > 0)
                        <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                            <div class=uk-width-2-3@m>
                                <h3 class="text-primary">INCLUDES</h3>
                                <hr>
                                <ul class="uk-includes">
                                    @foreach ($cost_includes as $item)
                                        <li>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @include('themes.default.trip-action')
                        </div>
                    @endif
                    <!-- end of includes -->
                    <!-- excludes start -->
                    @if ($cost_excludes->count() > 0)
                        <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                            <div class=uk-width-2-3@m>
                                <h3 class="text-primary">EXCLUDES</h3>
                                <hr>
                                <ul class="uk-excludes">
                                    @foreach ($cost_excludes as $item)
                                        <li>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @include('themes.default.trip-action')
                        </div>
                    @endif
                    <!-- end of excludes -->
                    <!-- map start -->
                    @if ($data->trip_map)
                        <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                            <div class=uk-width-2-3@m>
                                <h3 class="text-primary">MAPS</h3>
                                <hr>
                                <div uk-lightbox class="uk-flex uk-flex-center">
                                    <a class="uk-inline" href="{{ asset('uploads/original/' . $data->trip_map) }}"
                                        data-caption="{{ $data->trip_title }}">
                                        <img src="{{ asset('uploads/original/' . $data->trip_map) }}"
                                            class="uk-box-shadow-large"alt=""
                                            style="height: 440px;object-fit: contain;">
                                    </a>
                                </div>
                            </div>
                  @include('themes.default.trip-action')
                        </div>
                    @endif
                    <!-- end of map -->
                    <!--dates start  -->
                    @if ($schedules->count() > 0)
                        <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                            <div class=uk-width-2-3@m>
                                <h3 class="text-primary">AVAILABLE DATES</h3>
                                <hr>
                                @foreach ($schedules as $item)
                                    <div
                                        class="uk-border-rounded uk-box-shadow-medium border-left uk-margin-bottom uk-padding-12">
                                        <div class="uk-child-width-1-3@m uk-grid ">
                                            <div class="uk-flex uk-flex-column uk-flex-center">
                                                <p class="uk-margin-remove"><span class="text-primary uk-text-bold">Trip
                                                        Start:
                                                    </span> {{ $item->start_date }} </p>
                                                <p class="uk-margin-remove"><span class="text-primary uk-text-bold">Trip End:
                                                    </span> {{ $item->end_date }} </p>
                                            </div>
                                           @if($item->availability == 'AVAILABLE')
                                                <div class="uk-flex uk-flex-middle uk-flex-left uk-flex-center@m">
                                                    <p class="uk-text-success uk-margin-remove">{{$item->price}} spots available</p>
                                                </div>
                                            @else
                                                <div class="uk-flex uk-flex-middle uk-flex-left uk-flex-center@m">
                                                    <p class="uk-text-danger uk-margin-remove uk-scrollspy-inview " style="">Fully Booked</p>
                                                </div>
                                            @endif
                                            @if($item->availability == 'AVAILABLE')
                                                <div class="uk-flex uk-flex-middle">
                                                    <form action="{{route('page.booking', $data->uri)}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->start_date }}" name="start_date">
                                                        <input type="hidden" value="{{ $item->end_date }}" name="end_date">
                                                        <button class="uk-small-button uk-button-default" type="submit">Book now</button>
                                                    </form>
                                                    <!--<a href="enquiry.php" class="uk-small-button uk-button-primary-outline">Enquiry</a>-->
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                      @include('themes.default.trip-action')
                        </div>
                    @endif
                    <!-- end of dates -->
                    <!-- gallery start -->
                    @if ($photo_videos->count() > 0)
                    <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                        <div class=uk-width-2-3@m>
                            <h3 class="text-primary">GALLERY</h3>
                            <hr>
                            <div class="uk-switcher switcher-container uk-margin uk-gallery-image">
                                @foreach ($photos as $row)
                                <div><img src="{{ asset('/uploads/original/' . $row->thumbnail) }}" alt="{{ $row->title }}"></div>
                                @endforeach
                            </div>

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-subnav uk-subnav-pill uk-gallery-switcher uk-grid" uk-switcher="connect: .switcher-container">
                                    @foreach ($photos as $row)
                                        <div class="uk-padding-remove">
                                            <a href="{{ asset('/uploads/original/' . $row->thumbnail) }}"><img src="{{ asset('/uploads/original/' . $row->thumbnail) }}" alt="{{ $row->title }}"></a>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
                                    uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
                                    uk-slider-item="next"></a>
                            </div>
                        </div>
                       @include('themes.default.trip-action')
                    </div>
                    @endif
                    <!-- gallery end -->
                    <!-- review start -->
                   
                    <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                        <div class=uk-width-2-3@m>
                            <h3 class="text-primary">REVIEWS</h3>
                            <hr>
                           
                     <div class="uk-slider-container uk-margin-top uk-margin-bottom" uk-slider>
                  <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                     @if($trip_review->count () > 0)
                     <ul class="uk-slider-items uk-child-width-1-1 uk-grid uk-margin-top">
                        @foreach ($trip_review as $value)
                        <li>
                           <div class=" uk-border-rounded uk-box-shadow-medium" style="background-image: url('assets/images/client-testimonial.png') ;padding:12px;">
                           <div class="uk-grid uk-grid-collapse">
                              <div class="uk-width-auto@m uk-margin-bottom uk-flex uk-flex-center ">
                                 <img src="{{asset('uploads/reviews/'.$value->image)}}" alt="" class="uk-border-full-rounded   uk-media-80 uk-cover">
                              </div>
                              <div class="uk-width-expand@m uk-padding-small uk-padding-remove-top uk-text-center uk-text-left@m">
                                 <p class="text-primary uk-margin-remove uk-text-bold">{{ $value->full_name }}</p>
                                 <p class="uk-margin-remove uk-text-bold uk">{{ $value->country }}</p>
                                 @for($i=0; $i < $value->rating; $i++)
                                 <span class="fa fa-star text-primary checked"></span>
                                 @endfor
                    
                                 <p class="uk-text-justify uk-margin-remove">
                                                          {!! $value->message !!}

                                 </p>

                              </div>
                           </div>
                           </div>
                        </li>
                       @endforeach

                     </ul>
                     @endif
                     {{-- <a class="uk-position-center-left uk-position-small" href uk-slidenav-previous uk-slider-item="previous" style="padding: 0px 7px; margin: 28px 0px;"></a>
                     <a class="uk-position-center-right uk-position-small " href uk-slidenav-next uk-slider-item="next"   style="padding: 0px 7px; margin: 28px 0px;"></a> --}}
                  </div>
                  <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
               </div>
               
                            <div class="bg-light uk-margin-medium-top">
                                <form class="uk-contact-form uk-padding" action="{{ route('post-trip-review') }}" method="POST">
                                    <input type="hidden" name="trip_id" value="{{ $data->id }}">
                                    @csrf
                                    <div class=" uk-child-width-1-2 uk-grid">
                                        <div class="uk-margin-top">
                                            <label class="uk-form-label uk-text-bold" for="firstname">Full Name</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="firstnameform-stacked-text" name="full_name" required type="text">
                                            </div>
                                        </div>
                                        <div class="uk-margin-top">
                                            <label class="uk-form-label uk-text-bold" for="lastname">Country</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-input" name="country" required style="-webkit-appearance: listbox;">
                                                    @include('themes.default.common.country')
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="uk-margin-top">
                                            <label class="uk-form-label uk-text-bold" for="email">Email</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="email" name="email" required type="email">
                                            </div>
                                        </div>
                                        <div class="uk-margin-top">
                                            <label class="uk-form-label uk-text-bold" for="contact&quot;">Contact</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="contact" name="contact" required type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label class="uk-form-label uk-text-bold" for="">Rating</label>
                                        <div class="star-rating">
                                            <input type="radio" id="5-stars" name="rating" value="5">
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" id="4-stars" name="rating" value="4">
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" id="3-stars" name="rating" value="3">
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" id="2-stars" name="rating" value="2">
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" id="1-star" name="rating" value="1">
                                            <label for="1-star" class="star">&#9733;</label>
                                        </div>
                                    </div>
                                    <div class="uk-margin uk-margin-remove-top">
                                        <label class="uk-form-label uk-text-bold" for="contact&quot;">Message</label>
                                        <div class="uk-form-controls">
                                            <textarea name="message" class="uk-textarea" rows="5" required></textarea>
                                        </div>
                                        <button type="submit"  class="uk-button uk-button-default uk-margin-top">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                      @include('themes.default.trip-action')
                    </div>
                    <!-- end of review -->
                    <!-- equipment start -->
                    <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                        <div class=uk-width-2-3@m>
                            <h3 class="text-primary">GEARS AND EQUIPMENT</h3>
                            <hr>
                            {!! $data->trip_excerpt !!}
                        </div>
                        @include('themes.default.trip-action')
                    </div>
                    <!-- equipment end -->
                    <!-- faq start -->
                    @if ($faqs->count() > 0)
                        <div class="uk-single-section uk-padding-remove-top uk-margin-remove-top uk-grid">
                            <div class=uk-width-2-3@m>
                                <h3 class="text-primary">FAQ</h3>
                                <hr>
                                <ul uk-accordion class="uk-accordion uk-accordion-outline uk-itinerary">
                                @foreach($faqs as $item)
                                    <li class="uk-itenary-list">
                                        <div class="uk-accordion-title border-left uk-padding-12">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid uk-height-match>
                                                <div class="uk-width-auto uk-text-center uk-flex uk-flex-middle  ">
                                                    <p class="text-primary uk-text-large">{{ $loop->iteration }}</p>
                                                </div>
                                                <div class="uk-width-expand uk-flex uk-flex-middle">
                                                    <div class="uk-width-1-1">
                                                        <p class="uk-margin-remove"> 
                                                        {{ $item->title }}   
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-accordion-content uk-itinerary-content">
                                            <p>
                                            {{ $item->content }}
                                            </p>
                                        </div>
                                    </li>
                                    @endforeach
                                
                                </ul>
                            </div>
                          @include('themes.default.trip-action')
                        </div>
                        </div>
                    @endif
                    <!-- end of faq -->
                </div>
        
            </div>
        </div>
        <div id="uk-stop-sticky" class="uk-clearfix"></div> 
    </section>
    <!-- end section -->
    <section class="uk-section bg-light up-pattern"
        uk-scrollspy="cls: uk-animation-slide-left-small; target:  li,  h1,h5;  delay: 50; repeat: false;">
        <div class="section-title uk-text-center">
            <h5 class="uk-margin-top uk-margin-remove-bottom center-underline"> Adventures for a lifetime Experience</h5>
            <h2 class="uk-margin-remove">Similar Trips</h2>
        </div>
        <div class="uk-container uk-margin-top">
            <ul class="uk-child-width-1-1  uk-child-width-1-2@m  uk-child-width-1-3@l uk-flex uk-flex-center uk-grid"
                uk-grid uk-height-match="target:.uk-trek-description">
                <!--trek -->
                @if($similar_trips->count() > 0)
                @foreach($similar_trips as $item)
                <li class="">
                    <div class="uk-trek-list ">
                        @if ($item->thumbnail)
                        <div class="uk-trek-image uk-inline uk-width-1-1">  
                            <img src="{{ asset('uploads/original/'.$item->thumbnail) }}" class="uk-media-260" />
                            <div class="uk-position-top-right uk-overlay uk-overlay-default">{{ $item->activities->isNotEmpty() ? strtoupper($item->activities[0]->activity_parent) : '' }}</div>
                        </div>
                        @else
                         <div class="uk-trek-image uk-inline uk-width-1-1">  
                            <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}" class="uk-media-260" />
                            <div class="uk-position-top-right uk-overlay uk-overlay-default">{{ $item->activities->isNotEmpty() ? strtoupper($item->activities[0]->activity_parent) : '' }}</div>
                        </div>
                        @endif
                        <div class="uk-trek-description uk-padding-small uk-panel">
                                                    <h3 class="uk-margin-small"> {{$item->trip_title}} </h3>

                            <div class="uk-grid-small uk-child-width-expand  uk-grid" uk-grid="">
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <img class="uk-margin-small-right" src="{{ asset('theme-assets/images/trip-icons/duration.png') }}"
                                            width="30" alt="duration">
                                    </div>
                                    <div>
                                        <span class="uk-font-primary ">Duration</span>
                                        <br>{{ $item->duration }}
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <div> <img class="uk-margin-small-right" src="{{ asset('theme-assets/images/trip-icons/grade.png') }}"
                                            width="30" alt="difficulty"> </div>
                                    <div> <span class="uk-font-primary">Difficulty</span>   
                                        <br>{{ grade_message_trek($item->trip_grade) }}
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <div class="uk-trek-button">
                            <a href="{{ url('page/' . tripurl($item->uri)) }}" class="uk-button uk-button-default uk-margin-remove uk-width-1-1 ">Learn
                                More</a>
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
                <!--trek end  -->
              
            </ul>
        </div>
    </section>
@stop
