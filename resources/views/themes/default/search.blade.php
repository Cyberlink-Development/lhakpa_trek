@extends('themes.default.common.master')
{{-- @section('title', $item->trip_title)
@section('meta_keyword', $item->meta_keyword)
@section('meta_description', $item->meta_description)
@section('thumbnail', $item->thumbnail) --}}
@section('content')

    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ ($totalResults > 0) ? asset('uploads/original/'.$results[0]->thumbnail) : asset('theme-assets/img/mountain/mountain6.jpeg') }}" alt="" uk-img>
        <div class="uk-container uk-width-1-1 pt-150">
            <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid uk-height-match="target: .uk-same-height">
                <div class="uk-width-3-4@m" id="container">
                    <div id="originalDiv">
                        <ul class="uk-breadcrumb">
                            <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                        </ul>
                        <div class="uk-sub-banner-font">
                            <h1>Search Results of <em>{{ $query }}</em></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- list section start -->
    <section class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="uk-sidebar uk-grey-bg uk-padding-small " uk-sticky="offset: 90; end: !" style="border-top: 5px solid var(--primary);"> 
                        <div class="uk-title-font">
                            <span class="uk-white  dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>Search Results</span>
                        </div>
                        <div class="uk-margin uk-list-select">
                            <div>{{$totalResults}} Trips Found</div>
                        </div>
                    </div>
                    <div id="my-id"></div>
                </div>
                @if ($totalResults > 0)
                    <div class="uk-width-3-4@m" id="tripsearchResult">
                        <!--  -->
                        @foreach ($results as $row)
                            <div class="uk-margin-bottom">
                                <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                                    <div class="uk-width-2-5@m">
                                        <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                                            <img src="{{!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                                        </a>
                                    </div>
                                    <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                                        <div class="uk-star-rating">
                                            @for ($i = 0 ; $i < $row->rating ; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
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
                                                    <p class="uk-trip-description uk-margin-remove">{{$row->duration}} Days</p>
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
                        {!! $results->links('themes.default.common.pagination') !!}
                    </div>
                @else
                    <div class="uk-section uk-text-center uk-text-bold uk-text-lead"><strong>No trips found.</strong></div>
                @endif

            </div>
        </div>
    </section>
    <!-- list section end -->
@stop