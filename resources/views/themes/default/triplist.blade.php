@extends('themes.default.common.master')
@section('title',$data->title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->thumbnail)
@section('brief',$data->brief)
@section('content')
@if($data->banner)
<section class="uk-header-inner uk-position-relative  uk-background-cover uk-background-top-center uk-light" data-src="{{asset('uploads/original/'.$data->banner)}}" uk-img>
    <div class=" uk-container ">
        <h1>{{$data->title}}</h1>
        <ul class="uk-breadcrumb uk-text-center uk-margin-top-remove">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><span>{{$data->title}}</span></li>
        </ul>
    </div>
    <div class="uk-overlay "></div>
</section>
@else
<section class="uk-section-padding-page uk-faq pattern">
    <div class=" uk-container ">
        <h1>{{$data->title}}</h1>
        <ul class="uk-breadcrumb uk-text-center uk-margin-top-remove">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><span>{{$data->title}}</span></li>
        </ul>
    </div>
</section>
@endif
<section class="uk-section-padding pattern">
  <div class=" uk-container  ">
    @if($data->content) 
        <div class="waves"></div>
        <div class="uk-card uk-card-default uk-margin-large-bottom uk-padding detail-banner">
          <div class="uk-main-title-home uk-margin-bottom uk-text-center">
            <h2 class="uk-text-bold  uk-text-primary">{{$data->title}}</h2>
            <img src="{{asset('theme-assets/images/title-icon.png')}}" alt="{{$data->title}}">
          </div>
          <div class="uk-card-body ">
              {!! $data->content !!}
          </div>
        </div>
    @endif
    <!-- list -->
    <!--  -->
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match" uk-grid>

      <!--  -->
      @if($trips != null)
        @foreach($trips as $item)
        <div>
          <div class="uk-card uk-card-default  uk-hover-img uk-card-hover">
            <div class="uk-card-media-top uk-media-img">
              <a href="{{ url('page/' . tripurl($item->uri)) }}" title="">
                @if($item->thumbnail)
                    <img src="{{asset('uploads/original/'.$item->thumbnail)}}" alt="{{$item->trip_title}}">
                @else
                    <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" alt="{{$item->trip_title}}">
                @endif
            </a>
              @if($item->price)
               <div class="tour-price">{{$item->price}}</div>
               @endif
               <span class="uk-duration">{{$item->duration}} </span>
            </div>
            <div class="uk-card-body">
              <h3 class="uk-card-title uk-text-center"><a href="{{ url('page/' . tripurl($item->uri)) }}">{{$item->trip_title}}</a> </h3>
              <hr>
              <ul class="uk-list">
                @if($item->best_season != null)
                <li><span class="uk-margin-small-right uk-icon"><img src="{{asset('theme-assets/images/icon/season.png')}}" width="25" alt="Best Season"></span> Best Season : <b>{{$item->best_season}}</b></li>
                @endif
                @if($item->max_altitude != null)
                <li><span class="uk-margin-small-right uk-icon"><img src="{{asset('theme-assets/images/icon/altitude.png')}}" width="25" alt="Altitude"></span> Altitude : <b>{{$item->max_altitude}}</b></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      @endif
    </div>
    <!--  -->
    <!-- list -->

    {!! $trips->links('themes.default.common.pagination') !!}
  </div>
</section>
@stop