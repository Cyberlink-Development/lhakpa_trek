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
        uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-position-center uk-text-center uk-inner-banner"
            uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
            <h5 class="uk-margin-top white-center-underline ">{{ posttypeById($data->post_type)->post_type }}</h5>
            <p class="banner-heading  uk-margin-remove">{{ $data->post_title }}</p>
            <p class="text-white bottom-font">{{ posttypeById($data->post_type)->sub_title }}</p>
        </div>
    </section>
    <section class="uk-section bg-light why-bg bottom-pattern">
        <div class="uk-container">
            <div class="section-title uk-text-center">
                <h5 class="uk-margin-top uk-margin-remove-bottom center-underline"> {{ $data->sub_title }}
                </h5>
                <h2 class="uk-margin-remove">{{ $data->post_title }}</h2>
                 <p>{!! $data->post_content !!}</p>
            </div>
           
        </div>
    </section>
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-1  uk-child-width-1-3@m  uk-child-width-1-4@l uk-grid">
                @foreach ($associated_posts as $item)
                    <div class="uk-margin-medium-bottom uk-team">
                        <a href="" uk-toggle="target: #modal{{ $item->id }}">
                            @if ($item->thumbnail != null)
                                <div class="uk-media-350 uk-border-rounded uk-box-shadow-large">
                                    <img src="{{ asset('uploads/associated/' . $item->thumbnail) }}"
                                        alt="{{ $item->title }}" class="">
                                </div>
                            @else
                                <div class="uk-media-350 uk-border-rounded uk-box-shadow-large">
                                    <img src="{{ asset('theme-assets/images/default-thumbnail.jpg') }}"
                                        alt="{{ $item->title }}" class="">
                                </div>
                            @endif
                            <div
                                class="bg-primary
        uk-box-shadow-large uk-border-rounded uk-margin-small-top uk-text-center climber-info">
                                <h4 class="text-white uk-margin-remove">{{ $item->title }}</h4>
                                <span class="text-white uk-margin-remove">{!! $item->brief !!}</span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <!-- This is the modal with the default close button -->
            @foreach ($associated_posts as $item)
                <div id="modal{{ $item->id }}" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-padding-remove">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-header uk-padding-small border-left">
                            <h2 class="uk-modal-title ">{{ $item->title }}</h2>
                            <p class="uk-margin-remove text-primary">{!! $item->brief !!}</p>
                        </div>
                        <div class="uk-modal-body">
                            <p class="uk-text-justify">{!! $item->content !!}
                            </p>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
        {!!$associated_posts->links('themes.default.common.pagination')!!}
    </section>
@endsection
