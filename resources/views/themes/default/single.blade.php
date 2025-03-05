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

<section class="uk-section-padding-page pattern">
  <div class=" uk-container">

      <div class="uk-text-left" uk-grid>
          <div class="uk-width-expand@m">
              <!--  -->
              <div class=" uk-margin-medium-bottom">
                  <div class="uk-margin">
                      <h3> {{$data->post_title}} </h3>
                      <span class="uk-date">{{$data->created_at->format('d M Y')}}</span>
                  </div>
                  <div uk-lightbox>
                    @if($data->page_banner != null)
                      <a href="{{asset('uploads/banners/'. $data->page_banner)}}"><div class="uk-card-media-top uk-news-details-img ">
                          <img src="{{asset('uploads/banners/'. $data->page_banner)}}" alt="{{$data->post_title}}">
                      </div></a>
                    @endif
                  </div>

                  <div class="uk-card uk-card-default uk-card-body uk-blog-list">
                    {!! $data->post_content !!}
                      <hr>
                      <div class="sharethis-inline-share-buttons"></div>
                  </div>
              </div>
              <!--  -->
          </div>
      </div>
  </div>
</section>
@endsection
