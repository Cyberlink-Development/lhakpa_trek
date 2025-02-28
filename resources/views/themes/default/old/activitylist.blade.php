@extends('themes.default.common.master')
{{-- @section('title',$data->title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->thumbnail)
@section('brief',$data->brief) --}}
@section('content')
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="assets/images/inner-banner.jpg " uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <h5 class="uk-margin-top white-center-underline ">ADVENTURE</h5>
        <p class="banner-heading  uk-margin-remove">Activities</p>
        <p class="text-white bottom-font">Holidays you deserve like you want</p>
    </div>
</section>
<section class="uk-section bg-light why-bg bottom-pattern">
    <div class="uk-container">
        <div class="section-title uk-text-center">
            <h5 class="uk-margin-top uk-margin-remove-bottom center-underline"> Adventures for a lifetime Experience</h5>
            <h2 class="uk-margin-remove">Expedition</h2>
        </div>
        <p class="uk-text-justify">Nepal is home to a wider variety of landscape from the plains of Terai to the hilly region and mountains with ample of biodiversity. On the parallel side, the cultures and lifestyles in these regions are equally diverse. Trekking and Hiking is one of the most popular activities in Nepal primarily due to the presence of landscapes suitable for novice backpackers and experienced adventure seeker also. Contrary to the general perception, trekking in Nepal doesn’t necessarily mean traversing alone along the rural settings; the trekkers meet the locals and fellow trekkers in the route along with good teahouses and get chance for interaction with the locals. Trekkers who don’t prefer ascend to the lofty peaks can wander along the trekking trails that fits their purpose. Hiking along the ridges of valleys such as Kathmandu and Pokhara are popular for short excursions in the hilly trails of Nepal.</p>
    </div>
</section>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-1  uk-child-width-1-2@m  uk-child-width-1-3@l uk-flex uk-flex-center uk-grid">
            @foreach ($data as $item)
            <div class="uk-activities uk-margin-medium-bottom">
                <div class="uk-media-480 uk-border-rounded uk-cover-container  uk-display-block" href="{{ route('page.activitydetail', $item->uri) }}">
                    <img class="uk-image uk-cover" alt="{{ $item->title }}" src="{{asset('uploads/icon/'.$item->thumbnail)}}" />
                    <div class="uk-overlay-banner  uk-position-cover"></div>
                    <div class="uk-position-bottom-center uk-activities uk-text-center uk-margin">
                        <h1 class=" expedition-font  text-white uk-margin-remove">{{ $item->title }}</h1>
                        <!--<a href="{{ route('page.activitydetail', $item->uri) }}" class="white-btn">EXPLORE MORE</a>-->
                        @if($item->external_link)
                             <a href="{{$item->external_link}}" class="white-btn">
                                                        @else
                                                            <a href="{{ route('page.activitydetail', $item->uri) }}" class="white-btn">
                                                        @endif
                                                        EXPLORE MORE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div>
    {{-- <?php include('include/pagination.php'); ?> --}}
    </div>
</section>

@stop