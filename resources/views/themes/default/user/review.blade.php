@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="assets/img/bg/pattern.png" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Your Travel Opinion</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
            @include('themes.default.user.sidebar')
            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Your review about the travel :
                </p>
                @if($data->count() > 0)
                    @foreach ($data as $row)
                        <!--  -->
                        <div class="uk-margin-bottom">
                            <div class="uk-light-bg border uk-padding">
                                <a href="{{ url('page/' . tripurl($row->trips->uri)) }}" class="uk-news-title">
                                    <h2 class="uk-margin-remove">{{ $row->trips->trip_title }}</h2>
                                </a>
                                <div class="uk-star-rating">
                                    @for ($i = 0; $i < $row->rating; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>
                                <p >“{{ $row->message }}“</p>
                            </div>
                        </div>
                        <!--  -->
                    @endforeach
                @else
                    <h3>Review is empty!</h3>
                @endif
                @if($data->count() > 0)
                    @include('themes.default.user.pagination')
                @endif
            </div>
        </div>
    </div>
</section>
@stop