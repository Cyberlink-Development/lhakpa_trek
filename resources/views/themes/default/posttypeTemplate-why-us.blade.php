@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain9.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary">{{ $data->post_type }}</span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>{{ $data->sub_title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" uk-light-bg">
    <div>
        <div class="uk-grid-collapse uk-grid" uk-height-match="target: .uk-same-height">
            <div class="uk-width-2-3@m uk-same-height">
                <div class="uk-title-font  uk-container uk-section uk-padding-large">
                    <h1 class="uk-secondary">{{$data->associated_title}}</h1>
                    <span class="dotted-line-primary"></span>
                    <p>{!! $data->content !!}</p>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <img src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain8.jpeg') }}" class="cover uk-same-height" alt="{{ $data->post_type }}">
            </div>
        </div>
    </div>
</section>

@if ($posts->isNotEmpty())
    <section class="uk-section">
        <div class="uk-container">
            <ul uk-tab class="uk-why-us-tab">
                @foreach ($posts as $row)
                    <li><a href="#">{{$row->post_title}}</a></li>
                @endforeach
            </ul>
            <div class="uk-switcher uk-margin uk-margin-large-top">
                @foreach ($posts as $value)
                    <div>
                        <div class="uk-grid">
                            <div class="uk-width-1-3@m">
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                    <div class="uk-slider-items uk-child-width-1-1">
                                        @foreach($value->images as $image)
                                            <div class="uk-media-280">
                                                <img src="{{ $image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')}}"  class="border" alt="{{ $image->title }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="uk-title-font">
                                    <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right" aria-hidden="true"></i>{{$value->post_excerpt}}</span>
                                    <h2 class="uk-primary">{{$value->sub_title}}</h2>
                                    <p>
                                        {!! $value->post_content !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

@endsection
