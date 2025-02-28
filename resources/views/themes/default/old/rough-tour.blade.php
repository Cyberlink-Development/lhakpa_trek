@extends('themes.default.common.master')
@section('title','Tour List')
@section('content')
<section class="uk-header-inner uk-position-relative  uk-background-cover uk-light" data-src="{{asset('theme-assets/images/banner1.jpg')}}" uk-img>
    <div class=" uk-container ">
      <h1>Tours</h1>
      <ul class="uk-breadcrumb uk-text-center uk-margin-top-remove">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><span>Tours</span></li>
      </ul>
    </div>
    <div class="uk-overlay "></div>
    
  </section>
  <section class="uk-section-padding pattern">
    <div class=" uk-container  ">
      <!--  -->
      <div class="uk-child-width-1-2@s uk-child-width-1-3@m " uk-grid>
        
        <!--  -->
        @if($data != null)
            @foreach ($data as $row)
            <div>
                <div class="uk-card uk-card-default  uk-hover-img  uk-margin-bottom">
                  <div class="uk-card-media-top uk-media-img">
                    <a href="{{ route('page.destinationlist', $row->uri) }}" title="">
                    @if($row->thumbnail)
                        <img src="{{asset('uploads/original/'. $row->thumbnail)}}" alt="{{$row->title}}">
                     @else
                     <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" alt="{{$row->title}}">
                     @endif
                    </a>
                   
                  </div>
                  <div class="uk-card-body">
                    <h3 class="uk-card-title"><a href="{{ route('page.destinationlist', $row->uri) }}">{{$row->title}}</a> </h3>
                  </div>
                </div>
              </div> 
            @endforeach
       @endif
        <!--  --> 
      </div>
      <!--  -->
    </div>
  </section>
@endsection