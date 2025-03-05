@extends('themes.default.common.master')
@section('title',$data->post_type)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->banner)
@section('brief',$data->content)
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