@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
@section('content')
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
           @include('themes.default.common.sidebar-news');
      </div>
  </div>
</section>
@endsection
