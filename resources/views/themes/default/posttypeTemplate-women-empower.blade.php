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

<section class="uk-section uk-light-bg">
    <div class="uk-container">
        <div class="uk-title-font">
            <h2 class="uk-secondary">{{ $data->associated_title }}</h2>
            <span class="dotted-line-primary"></span>
            {{-- <ul class="uk-list uk-highlight"> --}}
                {!! $data->content !!}
            {{-- </ul> --}}
        </div>
    </div>
</section>

@php
    $firstPost = $posts->first();
@endphp

@if ($firstPost && $firstPost->images->isNotEmpty())
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                @foreach ($firstPost->images as $image )
                    <div>
                        <a class="uk-inline uk-media-260 uk-display-block uk-transition-toggle" href="{{ $image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')}}" data-caption="{{$image->title}}">
                            <img src="{{ $image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')}}" alt="" class="border uk-transition-scale-up uk-transition-opaque">
                        </a>
                        <h3 class="uk-text-center uk-text-uppercase uk-margin-remove">{{$image->title}}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

@if ($posts->isNotEmpty())
    <section>
        @foreach ($posts->skip(1) as $row)
            @if($loop->iteration % 2 != 0)
                <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid >
                    <div class="uk-primary-bg uk-about-text">
                        <div class="uk-contents uk-title-font uk-container uk-section">
                            <h2 class="uk-secondary">
                                {{$row->post_title}}
                            </h2>
                            {{-- <p class="uk-white"> --}}
                                {!! $row->post_content !!}
                            {{-- </p> --}}
                        </div>
                    </div>
                    <div>
                        <img src="{{ !empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" alt="{{$row->post_title}}">
                    </div>
                </div>
            @else
                <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid >
                    <div class="uk-flex-last uk-flex-first@m">
                        <img src="{{ !empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" alt="{{$row->post_title}}">
                    </div>
                    <div class="uk-primary-bg uk-about-text uk-flex-first uk-flex-last@m">
                        <div class="uk-contents uk-title-font uk-container uk-section">
                            <h2 class="uk-secondary">
                                {{$row->post_title}}
                            </h2>
                            {{-- <p class="uk-white"> --}}
                                {!! $row->post_content !!}
                            {{-- </p> --}}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
@endif

@endsection
