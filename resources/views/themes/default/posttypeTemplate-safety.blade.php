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

<section class="uk-section uk-primary-bg uk-about-text">
    <div class="uk-container">
        <div class="uk-contents uk-title-font uk-same-height">
            <h1 class="uk-secondary">{{$data->associated_title}}</h1>
            <span class="dotted-line-black uk-margin-bottom"></span>
            {{-- <p class="uk-white uk-text-justify"> --}}
                {!! $data->content !!}
            {{-- </p> --}}
        </div>
    </div>
</section>

@if ($posts->isNotEmpty())
    @foreach ($posts as $row)
        @if($loop->iteration % 2 != 0)
            <section class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid uk-flex uk-flex-middle">
                        <div class="uk-width-2-3@m uk-flex-first@m uk-flex-last">
                            <div class="uk-title-font uk-light-bg border uk-padding">
                                <h1 class="uk-secondary">{{$row->post_title}}</h1>
                                <span class="dotted-line-primary"></span>
                                <p>{!! $row->post_content !!}</p>
                            </div>
                        </div>
                        <div class="uk-width-1-3@m uk-media-280 uk-flex-first uk-flex-last@m uk-margin-bottom">
                            <img src="{{ !empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" class="border uk-same-height cover" alt="{{$row->post_title}}">
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="uk-section uk-padding-remove-top">
                <div class="uk-container">
                    <div class="uk-grid uk-flex uk-flex-middle">
                        <div class="uk-width-1-3@m uk-media-280 uk-margin-bottom">
                            <img src="{{ !empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" class="border uk-same-height cover" alt="">
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="uk-title-font uk-light-bg border uk-padding">
                                <h1 class="uk-secondary">{{$row->post_title}}</h1>
                                <span class="dotted-line-primary"></span>
                                <p>{!! $row->post_content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif

@endsection
