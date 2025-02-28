@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')
    <section
        class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed"
        uk-height-viewport
        data-src="@if ($data->page_thumbnail) {{ asset('uploads/original/' . $data->page_thumbnail) }} @else {{ asset('uploads/banners/' . $data->page_banner) }} @endif"
        alt="{{ $data->post_title }}" uk-img
        uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-position-center uk-text-center uk-inner-banner">
            <h5 class="uk-margin-top white-center-underline ">{{ posttypeById($data->post_type)->post_type }}</h5>
            <p class="banner-heading  uk-margin-remove">{{ $data->post_title }}</p>
            <p class="text-white bottom-font">{{ posttypeById($data->post_type)->sub_title }}</p>
        </div>
    </section>
    <!-- introduction-section -->
    <section class="uk-section mountain-bg">
        <div class="uk-container ">
            <div class="uk-info">
                <div class="section-title uk-text-left">
                    <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">{{ $data_child[2]->sub_title }}
                    </h5>
                    <h2 class="uk-margin-remove">{{ $data_child[2]->post_title }}</h2>
                </div>
                <div class="uk-margin-small-top uk-text-justify">
                    <p>{!! $data_child[2]->post_content !!}
                    </p>
                </div>
            </div>
            <hr class="uk-divider-icon uk-margin-large-top">
        </div>
    </section>
    <!-- end of introduction-section -->
    <!-- Mission Section -->
    <section class="uk-section uk-padding-remove-top">
        <div class="uk-container ">
            <div uk-grid>
                <div class="uk-width-1-3@m ">
                    <div class=" uk-light uk-box-shadow-large uk-media-400 uk-border-radius">

                        <img class=" uk-cover "
                            src="@if ($data_child[0]->page_thumbnail) {{ asset('uploads/medium/' . $data_child[0]->page_thumbnail) }} @else {{ asset('theme-assets/images/default-thumbnail.png') }} @endif"
                            alt="{{ $data_child[0]->post_title }}">

                    </div>
                </div>
                <div class="uk-width-2-3@m uk-mission-vision">
                    <div class="uk-info">
                        <div class="section-title uk-text-left">
                            <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">
                                {{ $data_child[0]->sub_title }}
                            </h5>
                            <h2 class="uk-margin-remove">{{ $data_child[0]->post_title }}</h2>
                        </div>
                        <div class="uk-margin-small-top uk-text-justify">
                            <p>{!! $data_child[0]->post_content !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end of mission section -->
    <div class="uk-text-center middle-banner ">
    </div>
    <!-- vision section -->
    <section class="uk-section uk-padding-remove-bottom">
        <div class="uk-container ">
            <div uk-grid>
                <div class="uk-width-2-3@m uk-mission-vision">
                    <div class="uk-info">
                        <div class="section-title uk-text-left">
                            <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">
                                {{ $data_child[1]->sub_title }}</h5>
                            <h2 class="uk-margin-remove">{{ $data_child[1]->post_title }}</h2>
                        </div>
                        <div class="uk-margin-small-top uk-text-justify">
                            <p>{!! $data_child[1]->post_content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m ">
                    <div class=" uk-light uk-box-shadow-large uk-media-400 uk-border-radius">

                        <img class=" uk-cover "
                            src="@if ($data_child[1]->page_thumbnail) {{ asset('uploads/medium/' . $data_child[1]->page_thumbnail) }} @else {{ asset('theme-assets/images/default-thumbnail.png') }} @endif"
                            alt="{{ $data_child[1]->post_title }}">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of vision section -->
    <!-- last banner section -->
    <section class="uk-padding-remove uk-media-500 last-banner"></section>
    <!-- end of last banner -->
@endsection
