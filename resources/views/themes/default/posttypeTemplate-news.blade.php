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

@if ($news->isNotEmpty())
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m" uk-grid>
                @foreach ($news as $row)
                    <div class="uk-margin-top">
                        <a href="{{ route('page.pagedetail', $row->uri) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-280">
                            <img src="{{ !empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain5.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="{{$row->post_title}}">
                        </a>
                        <div class="uk-flex uk-flex-between uk-flex-middle">
                            <div class="uk-text-title uk-margin-top">
                                <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> {{ date('l F j, Y', strtotime($row->post_date)) }}</span>
                                <a href="{{ route('page.pagedetail', $row->uri) }}" class="uk-news-title">
                                    <h2>{{$row->post_title}}</h2>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('page.pagedetail', $row->uri) }}">
                                    <i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $news->links('themes.default.common.pagination') !!}
        </div>
    </section>
@endif

@endsection
