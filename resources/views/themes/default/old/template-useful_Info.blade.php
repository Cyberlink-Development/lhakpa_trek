@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')

    <section class=" uk-dark-banner bg-dark uk-cover-container uk-position-relative uk-flex uk-flex-bottom ">
        <div class="uk-position-center uk-text-center uk-inner-banner"
            uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
            <h5 class="uk-margin-large-top white-center-underline uk-margin-remove-bottom ">
                {{ posttypeById($data->post_type)->post_type }}</h5>
            <p class="small-banner-heading uk-margin-remove">{{ $data->post_title }}</p>
        </div>
    </section>
    <section class="uk-section bg-white uk-position-relative">

        <div class="uk-container">
            <div uk-grid="" class="uk-grid uk-grid-medium">
                <div class="uk-width-1-4@m">
                    @include('themes.default.common.sidebar')
                </div>
                <div class="uk-width-expand@m uk-first-column">
                    <div class="uk-media-350 uk-margin uk-position-relative  uk-border-rounded">
                        <img src="@if ($data->page_thumbnail) {{ asset('uploads/original/' . $data->page_thumbnail) }} @else {{ asset('theme-assets/images/default-thumbnail.png') }} @endif"
                            alt="Travel Insurance" uk-img="" loading="lazy">

                        <div class="uk-image-caption uk-position-bottom uk-padding-small uk-text-white">
                            <div class="uk-position-cover uk-overlay-primary"></div>
                            <div class="uk-position-relative text-white">{{ $data->post_title }}</div>
                        </div>
                    </div>
                    <div class="uk-text-justify">
                        {!! $data->post_content !!}
                    </div>
                </div>


            </div>
            <div id="uk-stop-sticky"></div>
        </div>
    </section>
@endsection
