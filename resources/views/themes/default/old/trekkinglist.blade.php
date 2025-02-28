@extends('themes.default.common.master')
@section('title',$parent->title)
@section('meta_keyword',$parent->title)
@section('meta_description',$parent->brief)
@section('thumbnail',$parent->thumbnail)
@section('content')
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{asset('uploads/banners/'.$parent->banner)}} " uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <h5 class="uk-margin-top white-center-underline ">Activity</h5>
        <p class="banner-heading  uk-margin-remove">{{ $parent->title }}</p>
        <p class="text-white bottom-font">{{ $parent->sub_title }}</p>
    </div>
</section>
<section class="uk-section bg-light why-bg bottom-pattern">
    <div class="uk-container">
        <div class="section-title uk-text-justify">
            {!! $parent->content !!}
    </div>
</section>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-1  uk-child-width-1-2@m  uk-child-width-1-3@l uk-flex uk-flex-center uk-grid">
            @foreach ($data as $item)
                <div class="uk-activities uk-margin-medium-bottom">
                    <div class="uk-media-480 uk-border-rounded uk-cover-container  uk-display-block" href="{{ route('trekking-list', $item->uri) }}">
                        <img class="uk-image uk-cover" alt="{{ $item->title }}" src="{{asset('uploads/icon/'.$item->thumbnail)}}" />
                        <div class="uk-overlay-banner  uk-position-cover"></div>
                        <div class="uk-position-bottom-center uk-activities uk-text-center uk-margin">
                            <h1 class=" expedition-font  text-white uk-margin-remove">{{ $item->title }}</h1>
                            <a href="{{ route('trekking-list',$item->uri) }}" class="white-btn">EXPLORE MORE</a>
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