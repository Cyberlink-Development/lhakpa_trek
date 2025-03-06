@extends('themes.default.common.master')
@section('title',$parent->title)
@section('meta_keyword',$parent->title)
@section('meta_description',$parent->brief)
@section('thumbnail',$parent->thumbnail)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ asset('uploads/banners/'.$parent->banner)}} " alt="" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="{{url('/')}}" class="uk-white">Home</a></li>
                    {{-- <li><span class="uk-secondary">Activity</span></li> --}}
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>Activity</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s" uk-grid uk-scrollspy="target: img,h2,.uk-overlay-primary; cls: uk-animation-fade; delay: 100;">
            @foreach ($data as $item)
                <div>
                    @if($item->external_link)
                        <a href="{{ $item->external_link }}" class="uk-display-block uk-inline-clip uk-transition-toggle border ">
                    @else
                        <a href="{{ route('activity-list', $item->uri) }}" class="uk-display-block uk-inline-clip uk-transition-toggle border ">
                    @endif
                        <div class="uk-inline uk-media-260">
                            <img src="{{ asset('uploads/icon/'.$item->thumbnail) }}" loading="lazy" class="border uk-transition-scale-up uk-transition-opaque" alt="{{ $item->title }}">
                            <div class="uk-overlay-primary uk-position-cover border"></div>
                            <div class="uk-overlay uk-position-center uk-light">
                                <h1 class="text-secondary"> {{ $item->title }}</h1>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {!! $data->links('themes.default.common.pagination') !!}
    </div>
</section>
<!-- list section end -->

@stop