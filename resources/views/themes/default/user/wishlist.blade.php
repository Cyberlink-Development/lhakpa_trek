@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="{{ asset('theme-assets/img/bg/pattern.png') }}" alt="" uk-img>
    <div class="uk-container uk-width-1-1 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Wishlist</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
            @include('themes.default.user.sidebar')

            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Your Favourite Trips :
                </p>
         
                <!--  -->
                @if($trips->count() > 0)
                @foreach ($trips as $row)
                <div class="uk-margin-bottom uk-inline">
                    <div class="uk-position-top-right uk-overlay uk-flex uk-flex-right">
                        <a href="{{ route('delete-wishlist',$row->id) }}" class="uk-delete-button"><span uk-icon="icon: close; ratio: 0.9"></span></a>
                    </div>
                    <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                        <div class="uk-width-2-5@l">
                            <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                                <img src="{{!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="{{$row->trip_title}}">
                            </a>
                        </div>
                        <div class="uk-width-3-5@l uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
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
                                <h2>US ${{$row->price}}</h2>
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
                                        <p class="uk-trip-description uk-margin-remove">{{$row->duration}} days</p>
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
                                        <p class="uk-trip-description uk-margin-remove">{{$row->trip_grade}}</p>
                                    </div>
                                </div>
                                <div class="uk-visible@s">
                                    <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-btn uk-btn-secondary">Know more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <h3>Wishlist is empty!</h3>
                @endif
                <!--  -->
                @if($trips->count() > 0)
                @include('themes.default.user.pagination')
                @endif
                </div>
        </div>
    </div>
</section>
@stop