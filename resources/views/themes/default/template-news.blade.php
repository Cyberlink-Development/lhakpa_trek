@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:400px;" data-src="{{ !empty($data->page_thumbnail) ? asset('uploads/original/'.$data->page_thumbnail) : asset('theme-assets/img/mountain/mountain6.jpeg')}}" alt="{{$data->post_title}}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary">{{$data->post_title}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex">
            <div class="uk-width-1-4@m uk-flex-first@m uk-flex-last">
                <div class="uk-sidebar">
                    <h2 class="uk-primary uk-margin-remove">related news</h2>
                    <ul class="uk-related-news">
                        @foreach ($related->take(4) as $value)
                            <li><a href="{{ route('page.pagedetail', $value->uri) }}" class="line-two">{{$value->post_title}}</a></li>
                        @endforeach
                    </ul>
                    <p>Share this Trip:</p>
                    <div>
                        <a href="" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
                        <a href="" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-3-4@m uk-flex uk-flex-last@m uk-flex-first">
                <div>
                    <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> {{ date('l F j, Y', strtotime($data->post_date)) }}</span>
                    <div class="uk-title-font  uk-container uk-margin-top">
                        <h2 class="uk-secondary">{{ $data->sub_title }}</h2>
                        <span class="dotted-line-primary"></span>
                        <p>{{$data->post_excerpt}}</p>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1">
                                @foreach($data->images as $image)
                                    <div class="uk-media-280">
                                        <img src="{{ $image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')}}"  class="border" alt="{{ $image->title }}">
                                    </div>
                                @endforeach
                            </div>
                            <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                        <p>
                            {!! $data->post_content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection