@extends('themes.default.common.master')
@section('title', $item->trip_title)
@section('meta_keyword', $item->meta_keyword)
@section('meta_description', $item->meta_description)
@section('thumbnail', $item->thumbnail)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $item->banner ? asset('uploads/banners/'.$item->banner) : asset('theme-assets/img/mountain/mountain6.jpeg') }}" alt="" uk-img>
    <div class="uk-container uk-width-1-1 pt-150">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid uk-height-match="target: .uk-same-height">
            <div class="uk-width-3-4@m" id="container">
                <div id="originalDiv">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                        <li><span class="uk-secondary">{{ ucfirst($item->activity_parent) }}</span></li>
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1>{{ $item->title }}</h1>
                    </div>
                    <!-- when video is availabe otherwise hiddeb -->
                    <div class="uk-margin-bottom">
                        @if ($item->category_video)
                            <span class="uk-video">PLAY VIDEO</span>
                            <a class=" uk-margin-small-left bg-secondary uk-play-button" href="#modal-media-youtube" uk-toggle><i class="fa-solid fa-play"></i></a>
                        @endif
                        <div id="modal-media-youtube" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                                <button class="uk-modal-close-outside" type="button" uk-close></button>
                                <iframe src="https://www.youtube-nocookie.com/embed/{{$item->category_video}}" width="1920" height="1080" loading="lazy" uk-video uk-responsive></iframe>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!-- photos section start -->
                <div id="newDiv1" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn1"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-grid" uk-lightbox="animation: slide">
                                @foreach ($dataAll as $row)
                                    <div>
                                        <a class="uk-inline uk-media-270" href="{{ !empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain4.jpeg')}}">
                                            <img src="{{ !empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain4.jpeg')}}" class="border" alt="abc">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
                <!-- photos section end -->

                <!-- information section start -->
                <div id="newDiv2" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline">
                        <div class="uk-position-right">
                            <button id="closeBtn2"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <h2 class="uk-secondary uk-margin-remove-top">{{ $item->title }}</h2>
                        <hr>
                        <p>
                            {!!$item->content!!}
                        </p>
                    </div>
                </div>
                <!-- information section end -->
            </div>
            <div class="uk-width-1-4@m uk-same-height ">
                <div class="uk-grey-bg  uk-padding-dicovery  uk-pattern-bg">
                    <h2 class="uk-white uk-text-uppercase">Discovery</h2>
                    <hr style="border-color: var(--secondary);">
                    <p class="uk-white uk-text-justify line-five">
                        {{$item->excerpt}}
                    </p>
                    <div class="uk-margin uk-text-center">
                        <!-- this button will open the photo section -->
                        <button id="changeBtn1" class="uk-buttons">
                            <span class="uk-secondary uk-margin-right"><i class="fa-solid fa-photo-film uk-margin-small-right"></i> Photos</span>
                        </button>
                    </div>
                    <div class="uk-flex uk-text-center">
                        <!-- this button will open the information section -->
                        <button class="uk-button uk-padding-remove uk-btn uk-btn-secondary uk-width-1-1" id="changeBtn2">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- list section start -->
@if ($data->isNotEmpty())
    <section class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                @include('themes.default.common.sidebar-search')

                <div class="uk-width-3-4@m" id="tripsearchResult">
                    <!--  -->
                    @foreach ($data as $row)
                        <div class="uk-margin-bottom">
                            <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                                <div class="uk-width-2-5@m">
                                    <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                                        <img src="{{!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="{{$row->trip_title}}">
                                    </a>
                                </div>
                                <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                                    <div class="uk-star-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="uk-text-title uk-text-title uk-flex uk-flex-between">
                                        <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">
                                            <h2>{{$row->trip_title}}</h2>
                                        </a>
                                        @if($row->price)
                                            <h2>US ${{$row->price}}</h2>
                                        @endif
                                    </div>
                                    <p class="uk-margin-remove line-three">
                                        {{$row->sub_title}}
                                    </p>
                                    <hr style="border-color: var(--grey);">
                                    <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                                        <div class="uk-flex uk-flex-middle uk-trip">
                                            <i class="fa-solid fa-calendar"></i>
                                            <div>
                                                <p class="uk-trip-title uk-margin-remove">Duration</p>
                                                <p class="uk-trip-description uk-margin-remove">{{$row->duration}}</p>
                                            </div>
                                        </div>
                                        <div class="uk-flex uk-flex-middle uk-trip ">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <div>
                                                <p class="uk-trip-title uk-margin-remove">Location</p>
                                                <p class="uk-trip-description uk-margin-remove">{{getDestinationNameByTripId($row->id)}}</p>
                                            </div>
                                        </div>
                                        <div class="uk-flex uk-flex-middle uk-trip ">
                                            <i class="fa-solid fa-calendar"></i>
                                            <div>
                                                <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                                <p class="uk-trip-description uk-margin-remove">{{$row->trip_grade}}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-btn uk-btn-secondary">Know more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--paginate  -->
                    {!! $data->links('themes.default.common.pagination') !!}
                </div>
            </div>
        </div>
    </section>
@else
    <div class="uk-section uk-text-center">{{ ucfirst($item->title) }} Coming Soon... </div>
@endif
<!-- list section end -->
@stop