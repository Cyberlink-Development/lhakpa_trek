@extends('themes.default.common.master')
@section('title', $item->trip_title)
@section('meta_keyword', $item->meta_keyword)
@section('meta_description', $item->meta_description)
@section('thumbnail', $item->thumbnail)
@section('content')
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{asset('uploads/banners/'.$item->banner)}}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <h5 class="uk-margin-top white-center-underline ">{{ ucfirst($item->activity_parent) }}</h5>
        <p class="banner-heading  uk-margin-remove">{{ $item->title }}</p>
        <p class="text-white bottom-font">{{ $item->sub_title }}</p>
    </div>
</section>
<section class="uk-section bg-light why-bg bottom-pattern">
    <div class="uk-container">
        <div class="section-title uk-text-center">
            <h5 class="uk-margin-top uk-margin-remove-bottom center-underline"> Adventures for a lifetime Experience</h5>
            <h2 class="uk-margin-remove">{{ $item->title }}</h2>
        </div>
        <p class="uk-text-justify">
          {!! $item->content !!}   
        </p>
    </div>
</section>
<section class="uk-section">
    <div class="uk-container">
        <ul class="uk-child-width-1-1  uk-child-width-1-2@m  uk-child-width-1-3@l uk-flex uk-flex-center uk-grid" uk-grid uk-height-match="target:.uk-trek-description">
            <!--trek -->
            @if($data->count() > 0)
            @foreach ($data as $item)
            <li>
                <div class="uk-trek-list ">
                    <div class="uk-trek-image uk-inline uk-width-1-1">
                         @if($item->thumbnail)
                    <img src="{{asset('uploads/original/'.$item->thumbnail)}}" class="uk-media-260" alt="{{$item->trip_title}}">
                @else
                    <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" class="uk-media-260" alt="{{$item->trip_title}}">
                @endif
                        <div class="uk-position-top-right uk-overlay uk-overlay-default">{{ get_trip_type($item->trip_type) }}</div>
                    </div>
                    <div class="uk-trek-description uk-padding-small uk-panel">
                        <h3 class="uk-margin-small">{{$item->trip_title}}</h3>
                        <div class="uk-grid-small uk-child-width-expand  uk-grid" uk-grid="">
                            <div class="uk-flex uk-flex-middle">
                                <div>
                                    <img class="uk-margin-small-right" src="{{ asset('theme-assets/images/blue-icons/duration.png') }}" width="30" alt="duration">
                                </div>
                                <div>
                                    <span class="uk-font-primary ">Duration</span>
                                    <br>{{$item->duration}}
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div> <img class="uk-margin-small-right" src="{{ asset('theme-assets/images/blue-icons/difficult.png') }}" width="30" alt="difficulty"> </div>
                                <div> <span class="uk-font-primary">Max Altitude</span>
                                    <br>{{$item->max_altitude}}
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <div class="uk-trek-button">
                        <a href="{{ url('page/' . tripurl($item->uri)) }}" class="uk-button uk-button-default uk-margin-remove uk-width-1-1 ">EXPLORE MORE</a>
                    </div>
                </div>
            </li>
                        @endforeach
            @endif
            <!--trek end  -->


        </ul>
    </div>
     <div class="uk-margin-top">
    {!! $data->links('themes.default.common.pagination') !!}
    </div> 
</section>
@stop