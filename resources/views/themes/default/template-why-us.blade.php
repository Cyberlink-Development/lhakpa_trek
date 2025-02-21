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
        data-src="@if ($data->page_thumbnail) {{ asset('uploads/original/' . $data->page_thumbnail) }} @else {{ asset('uploads/original/' . $data->page_banner) }} @endif"
        alt="{{ $data->post_title }}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-position-center uk-text-center uk-inner-banner"
            uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
            <h5 class="uk-margin-top white-center-underline ">{{ posttypeById($data->post_type)->post_type }}</h5>
            <p class="banner-heading  uk-margin-remove">{{ $data->post_title }}</p>
            <p class="text-white bottom-font">{{ posttypeById($data->post_type)->sub_title }}</p>
        </div>
    </section>

    <section class="uk-section mountain-bg">
        <div class="uk-container ">
            <div uk-grid>
                <div class="uk-width-1-3@m ">
                    <div class="uk-inline uk-light uk-box-shadow-large uk-media-400 uk-border-radius">
                        @if ($data_child[1]->page_thumbnail || $data_child[1]->page_banner)
                            <img class=" uk-cover "
                                src="@if ($data_child[1]->page_thumbnail) {{ asset('uploads/original/' . $data_child[1]->page_thumbnail) }} @else {{ asset('uploads/banners/' . $data_child[1]->page_banner) }} @endif"
                                alt="{{ $data_child[1]->post_title }}">
                        @else
                            <img class=" uk-cover " src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                alt="{{ $data_child[1]->post_title }}">
                        @endif
                        <div class="uk-position-center " uk-lightbox>
                            <a id="play-video" class="video-play-button" href="{{ $data_child[1]->post_excerpt }}"
                                autoplay>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-2-3@m">
                    <div class="uk-info">
                        <div class="section-title uk-text-left">
                            <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">
                                {{ $data_child[1]->sub_title }}</h5>
                            <h2 class="uk-margin-remove">{{ $data_child[1]->post_title }}</h2>
                        </div>
                        <div class="uk-margin-small-top uk-text-justify">
                            <p>
                                {!! $data_child[1]->post_content !!}

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="uk-container uk-margin-large-bottom">
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
            @foreach (get_postimage($data_child[1]->id) as $value)
                @if ($loop->iteration <= 3)
                    <div>
                        <a class="uk-inline uk-media-260 uk-box-shadow-large uk-border-radius"
                            href="{{ asset('uploads/medium/' . $value->file_name) }}" data-caption="Caption 1">
                            <img src="{{ asset('uploads/medium/' . $value->file_name) }}"
                                class="uk-box-shadow-large uk-cover" alt="">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    <section class="why-bg bg-light up-pattern uk-section uk-padding-remove-bottom">
        <div class="uk-container uk-margin-large-bottom">
            <div class="section-title uk-text-center">
                <h5 class="uk-margin-top uk-margin-remove-bottom center-underline">{{ $data_child[0]->sub_title }}
                </h5>
                <h2 class="uk-margin-remove">{!! $data_child[0]->post_title !!}</h2>
            </div>
        </div>

        @if (has_associatedpost($data_child[0]->id) > 0)
            <div class="uk-container">
                <div class="uk-child-width-1-2@m uk-grid">
                    @foreach (get_associatedpost($data_child[0]->id) as $value)
                        <div class="uk-margin-bottom">
                            <div class="uk-flex uk-items-center icon-section">
                                <div class="icon-bg uk-margin-right">
                                    <img src="{{ asset('uploads/associated/' . $value->thumbnail) }}" alt="{{ $value->title }}">
                                </div>
                                <h2 class="uk-margin-remove">{{ $value->title }}</h2>
                            </div>
                            <p class="uk-text-justify">{!! $value->content !!}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        @endif
    </section>

    <div><img src="{{ asset('theme-assets/images/about-last.jpg') }}" alt=""></div>

@endsection
