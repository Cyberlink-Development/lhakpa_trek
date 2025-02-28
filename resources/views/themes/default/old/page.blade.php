@extends('themes.default.common.master')
@section('title',$data->post_type)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->banner)
@section('brief',$data->content)
@section('content') 
@if($data->banner)
<section class="uk-header-inner uk-position-relative  uk-background-cover uk-light" data-src="{{ asset('uploads/original/'.$data->banner) }}" uk-img>
    @else
    <section class="uk-header-inner uk-position-relative  uk-background-cover uk-light" data-src="{{ asset('theme-assets/images/trekking.jpg') }}" uk-img>
        @endif
    <div class=" uk-container ">
      <h1>{{$data->post_type}}</h1>
      <ul class="uk-breadcrumb uk-text-center uk-margin-top-remove">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><span>{{$data->post_type}}</span></li>
      </ul>
    </div>
    <div class="uk-overlay "></div>
    
  </section>
  @if($data->content)
  <section class="uk-section-padding pattern">
    <div class=" uk-container  ">
       <div class="waves"></div>
      <div class="uk-card uk-card-default uk-margin-large-bottom uk-padding">
        <div class="uk-card-body ">
           {!!$data->content!!}  
          
        </div>
      </div> 
    </div>
  </section>
  @endif
@stop