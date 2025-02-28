@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
@section('content')
@if($data->page_banner)
<section class="uk-header-inner uk-position-relative  uk-background-cover uk-background-top-center uk-light" data-src="{{asset('uploads/banners/'.$data->page_banner)}}" uk-img>
    <div class=" uk-container ">
        <h1>{{$data->post_title}}</h1>
        <ul class="uk-breadcrumb uk-text-center uk-margin-top-remove">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><span>{{$data->post_title}}</span></li>
        </ul>
    </div>
    <div class="uk-overlay "></div>
</section>
@else
<section class="uk-section-padding-page uk-faq pattern">
    <div class=" uk-container ">
        <h1>{{$data->post_title}}</h1>
        <ul class="uk-breadcrumb uk-text-center uk-margin-top-remove">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><span>{{$data->post_title}}</span></li>
        </ul>
    </div>
</section>
@endif
<div class="waves"></div>
<section class="uk-section-padding uk-who uk-bg-white">
    <div class=" uk-container  ">
        <ul uk-grid>
            <li class="uk-width-expand@m  uk-flex uk-flex-column uk-flex-center">
                <div class="uk-padding-large uk-padding-remove-vertical">
                    @if($data->sub_title)
                    <div class="uk-main-title-home uk-margin-bottom">
                        <h2 class="uk-text-bold  uk-text-primary">{{$data->sub_title}}</h2>
                        <span></span>
                    </div>  
                    @endif
                    {!!$data->post_content!!}
                </div>
            </li>
            @if($data->page_thumbnail)
            <li class="uk-width-2-5@m">
                <img src="{{asset('uploads/original/'. $data->page_thumbnail)}}">
            </li>
            @endif
        </ul>
    </div>
</section>
@if($data_child->count()>0)
@foreach ($data_child as $item)
    <section class="uk-section uk-who uk-bg-white">
        <div class=" uk-container">
             @if($loop->even)
            <ul class="uk-height-match" uk-grid>
                @if($item->page_thumbnail)
                <li class="uk-width-3-5@m">
                    <div class="uk-media-img-large">
                        <img src="{{asset('uploads/original/'. $item->page_thumbnail)}}" >
                    </div>
                </li>
                @endif
                <li class="uk-width-expand@m uk-padding-large uk-flex uk-flex-column uk-flex-center">
                    <div class="uk-main-title-home uk-margin-bottom">
                        <h2 class="uk-text-bold  uk-text-primary">{{ $item->post_title }}</h2>
                        <span></span>
                    </div>
                       {!! $item->post_content !!}
                </li>
            </ul>
            @else
            <ul uk-grid>
            <li class="uk-width-expand@m  uk-flex uk-flex-column uk-flex-center">
                <div class="uk-padding-large uk-padding-remove-vertical">
                    <div class="uk-main-title-home uk-margin-bottom">
                        <h2 class="uk-text-bold  uk-text-primary">{{$item->post_title}}</h2>
                        <span></span>
                    </div>  
                    {!!$item->post_content!!}
                </div
            </li>
            @if($item->page_thumbnail)
            <li class="uk-width-2-5@m">
                <img src="{{asset('uploads/original/'. $item->page_thumbnail)}}">
            </li>
            @endif
        </ul>
        @endif
        </div>
    </section>
@endforeach
@endif
@endsection 