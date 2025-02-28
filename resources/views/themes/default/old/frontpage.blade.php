@extends('themes.default.common.master')
@section('content')
   @if($banners)
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-center-center" uk-height-viewport data-src="{{asset('uploads/banners/'.$banners->picture)}}" uk-img>
    
    @if($banners->video != null)
   <video src="{{asset('uploads/banners/'.$banners->video)}}"  autoplay loop muted playsinline uk-video></video>
   @endif
   <div class="uk-overlay-banner uk-position-cover"></div>
   <div class="uk-position-center uk-padding uk-child-width-1-1" uk-scrollspy="cls: uk-animation-slide-left-small; target:  p;  delay: 50; repeat: false;">
      <p class="banner-heading uk-width-1-2@m uk-width-1-1">
         {{$banners->title}}
          </p>
          <p class="text-white uk-width-1-2@m uk-width-1-1">
              {{$banners->caption}}
          </p>
            <a class="banner-button"href="#scrolldown" uk-scroll>
                <span class="banner-btn-primary">{{$banners->link}}</span>
                <span class="uk-icon bg-white banner-btn-secondary">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </span>
            </a>
   </div>
   <div class="texture">
      <img src="{{ asset('theme-assets\images\pattern.png') }}" alt="texture">
      </div>

</section>
@endif
<!-- end main video and image banner -->
<!-- about us section -->
@if($whoweare)
<section class="uk-section mountain-bg" uk-scrollspy="cls: uk-animation-slide-left-small; target:  li;  delay: 50; repeat: false;">
   <div class="uk-container">
      <ul class="uk-child-width-1-2@m uk-grid-large uk-grid" uk-height-match="target:.uk-info" uk-grid="">
         <li>
            <div class="uk-info uk-flex uk-flex-column uk-flex-center">
               <ul class="uk-grid-collapse uk-grid" uk-grid="">
                    @foreach ($images->take(1) as $value)
                      <li class="uk-width-1-1">
                         <div class="uk-media-260">
                            <img src="{{ asset('uploads/medium/' . $value->file_name) }}" alt="{{ $whoweare->post_title }}" >
                         </div>
                      </li>
                    @endforeach
                    @foreach ($images->skip(1)->take(1) as $value)
                        <li class="uk-width-2-5 uk-grid-margin">
                         <div class="uk-media-180">
                            <img src="{{ asset('uploads/medium/' . $value->file_name) }}" alt="{{ $whoweare->post_title }}" style="padding:5px 5px 5px 0px">
                         </div>
                        </li>
                    @endforeach
                    @foreach ($images->skip(2)->take(1) as $value)
                  <li class="uk-width-3-5 uk-grid-margin">
                     <div class="uk-media-180">
                        <img src="{{ asset('uploads/medium/' . $value->file_name) }}" alt="{{ $whoweare->post_title }}" style="padding:5px 0 ">
                     </div>
                  </li>
                  @endforeach
               </ul>
            </div>
         </li>
         <li class="uk-flex uk-flex-column uk-flex-center">
            <div class="uk-info" style="min-height: 480px;">
               <div class="section-title uk-text-left">
                  <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">{{ $whoweare->sub_title }}</h5>
                  <h2 class="uk-margin-remove">{{ $whoweare->post_title }}</h2>
               </div>
               <div class="uk-margin-small-top uk-text-justify">
                  {!! $whoweare->post_content !!}
                  {{--<a href="{{ url(geturl('why-us')) }}" class="uk-button uk-button-default uk-margin-top ">Learn More</a>--}}
                  {{--<a href="{{ url(geturl($whoweare->uri)) }}" class="uk-button uk-button-default uk-margin-top ">Learn More</a>--}}
                  <a href="{{ url(geturl(post_parent_by_postId( $whoweare->id)->uri)) }}" class="uk-button uk-button-default uk-margin-top ">Learn More</a>
               </div>
            </div>
         </li>
      </ul>
   </div>
</section>
@endif
<!-- end about us section -->
<!-- why us section -->
@if($whywork)
<section class="uk-section-small bg-light why-bg both-pattern" uk-scrollspy="cls: uk-animation-slide-left-small; target:  div;  delay: 50; repeat: false;">
   <div class="uk-container">
      <div class="uk-grid uk-grid-collapse">
         <div class="uk-width-1-3@m">
            <div class="section-title uk-text-left">
               <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">{{ $whywork->sub_title }}</h5>
               <h2 class="uk-margin-remove">{{ $whywork->post_title }}</h2>
               <p>
                 {{ $whywork->post_excerpt }}
               </p>
               {{--<a href="{{ url(geturl('why-us')) }}" class="uk-button uk-button-default uk-margin-top uk-margin-bottom">Learn More</a>--}}
               <a href="{{ url(geturl(post_parent_by_postId( $whoweare->id)->uri)) }}" class="uk-button uk-button-default uk-margin-top uk-margin-bottom">Learn More</a>
               
               <!--<a href="{{ url(geturl($whywork->uri)) }}" class="uk-button uk-button-default uk-margin-top uk-margin-bottom">Learn More</a>-->
            </div>
         </div>
         <div class="uk-width-2-3@m  uk-why-us uk-padding">
            <div class="uk-container">
               <div class="uk-grid uk-child-width-1-2@m uk-margin-remove">
                   @foreach (get_associatedpost($whywork->id) as $value)
                  <div class="uk-padding-small uk-why-us-section">
                     <div class="uk-flex-middle uk-grid-collapse uk-margin-bottom uk-why-us-list uk-card-hover" uk-grid>
                        <div class="uk-child-width-auto">
                           <div class="icon-bg bg-light ">
                              <img src="{{ asset('uploads/associated/' . $value->thumbnail) }}" alt="">
                           </div>
                        </div>
                        <div class="uk-width-2-3 uk-margin-small-left">
                           <h3 class="why-us-font">{{ $value->title }}</h3>
                        </div>
                     </div>
                  </div>
                  @endforeach
             
               </div>
            </div>
         </div>
      </div>
     </div>
</section>
@endif
<!-- end why us section -->

<!-- Activities Section -->
<section class="uk-section uk-padding-remove-bottom"  id="scrolldown" uk-scrollspy="cls: uk-animation-slide-left-small; target:  div, h5,h1;  delay: 50; repeat: false;">
   <div class="uk-container uk-margin-large-bottom">
      <div class="section-title uk-text-center">
         <h5 class="uk-margin-top uk-margin-remove-bottom center-underline">{{$setting->text1_title}}</h5>
         <h2 class="uk-margin-remove">{{$setting->text1_sub_title}}</h2>
      </div>
   </div>
   <div class="uk-section-default uk-position-relative uk-section uk-padding-remove-top" >
      <div class=" uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
      <div class="uk-width-1-1@m uk-first-column">
         <div class="ge-emotion-accordion">
            <div class="ge-container" style="height: 550px;">
               <div class="ge-source uk-cover-container">
                  <img class="ge-default ge-source-content uk-cover" alt="" uk-cover data-src="{{ asset('uploads/banner-1.jpeg') }}" uk-img>
                  {{-- <img class="uk-0001 ge-source-content uk-cover" alt="" uk-cover data-src="{{ asset('uploads/banner-1.jpeg') }}" uk-img> --}}
                  <img class="uk-0001 ge-source-content uk-cover uk-hidden@l" alt="" uk-cover data-src="{{ asset('uploads/banner-1.jpeg') }}" uk-img>
                  @if( $activity_list->count()>0)
                    @foreach( $activity_list as $activity)
                        <img class="uk-{{$loop->iteration}} ge-source-content uk-cover" alt="{{$activity->title}}" uk-cover data-src="@if($activity->thumbnail){{ asset('uploads/icon/'.$activity->thumbnail) }}@else{{asset('images/default/default.png')}}@endif" uk-img> 
                    @endforeach 
                  @endif             
               </div>
               <div class="ge-tabs ge-all-close">
                  <!--  -->
                    @if( $activity_list->count()>0)
                        @foreach( $activity_list as $activity)  
                            <div id="uk-{{$loop->iteration}}" class="ge-tab uk-item">
                                <div class="ge-close">
                                    <a uk-icon="icon: close; ratio:1.5;" class="uk-icon"></a>
                                </div>
                                <div class="ge-title-close activity-card">
                                    <h2 class="activites-title uk-text-center ge-titlege-title">{{$activity->title}}</h2>
                                    <div class="activity-arrow">
                                      <span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                      </span>
                                    </div>
                                </div>
                                <div class="ge-item-open">
                                    <div class="ge-open-title uk-margin-auto-right accordion-small">
                                        <p class="uk-margin-remove f-w-600 uk-text-center ge-titlege-title">{{$activity->title}}</p>
                                    </div>
                                    <div class="content">
                                        <div class="uk-content uk-margin">
                                            <h2 class=" text-white">{{$activity->sub_title}}</h2>
                                            <p class="uk-text-justify uk-margin-bottom text-white">{{$activity->excerpt}}</p>
                                            @if($activity->external_link)
                                                <a href="{{$activity->external_link}}" class="uk-button uk-button-white-outline">Explore More</a>
                                            @else
                                                <a href="{{ route('page.activitydetail',$activity->uri) }}" class="uk-button uk-button-white-outline">Explore More</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                    @endif
   
                  <!--  -->
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- end of Activities Section -->
<!-- Featured Treks Section -->
<section class="uk-section " uk-scrollspy="cls: uk-animation-slide-left-small; target:  li, h5,h1;  delay: 50; repeat: false;">
   <div class="uk-container">
      <div class="uk-position-relative uk-visible-toggle uk-testimonials uk-width-expand " tabindex="-1" uk-slider="autoplay: true autoplay-interval: 100">
         <div class="uk-grid">
            <div class="uk-width-2-3@m">
               <div class="section-title uk-text-left">
                  <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">{{$setting->text2_title}}</h5>
                  <h2 class="uk-margin-remove">{{$setting->text2_sub_title}}</h2>
               </div>
            </div>
            <div class="uk-width-1-3@m uk-text-right arrows" style="z-index:2;">
               <a class=" uk-position-small  uk-slidenav-large" style="z-index:11; margin:0 7px; background-color:var(--primary); color:var(--white);" href="#" height="20" uk-slidenav-previous uk-slider-item="previous"></a>
               <a class=" uk-position-small uk-slidenav-large" style="z-index:11; margin:0; background-color:var(--primary); color:var(--white);" href="#" height="20" uk-slidenav-next uk-slider-item="next"></a>
            </div>
         </div>
         <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@m uk-margin-top" uk-height-match="target:.uk-trek-description"> 
            <!--trek -->
             @if($famous_trips != null)
        @foreach($famous_trips as $item)
            <li class="uk-padding-small">
                <div class="uk-trek-list ">
                    <div class="uk-trek-image uk-inline uk-width-1-1 ">
                   @if($item->thumbnail)
                       <img src="{{asset('uploads/original/'.$item->thumbnail)}}"  class="uk-media-260" alt="{{$item->trip_title}}">
                @else
                    <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" class="uk-media-260" alt="{{$item->trip_title}}">
                @endif
                        <div class="uk-position-top-right uk-overlay uk-overlay-default">{{get_trip_type($item->trip_type) == 'Activity' ? get_experience_type($item) : get_trip_type($item->trip_type)}}</div>
                    </div>
                    <div class="uk-trek-description uk-padding-small uk-panel">
                        <h3 class="uk-margin-small"> {{$item->trip_title}}</h3>
                        <div class="uk-grid-small uk-child-width-expand  uk-grid" uk-grid="">
                            <div class="uk-flex uk-flex-middle">
                                <div>
                                    <img class="uk-margin-small-right" src="{{ asset('theme-assets/images/blue-icons/duration.png') }}" width="30" alt="duration">
                                </div>
                                <div>
                                    <span class="uk-font-primary ">Duration</span>
                                    <br>{{$item->duration}}
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div> <img class="uk-margin-small-right" src="{{ asset('theme-assets/images/blue-icons/difficult.png') }}" width="30" alt="difficulty"> </div>
                                <div> <span class="uk-font-primary">Difficulty</span>
                                    <br>{{ grade_message_trek($item->trip_grade) }}
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <div class="uk-trek-button">
                        <a href="{{ url('page/' . tripurl($item->uri)) }}" class="uk-button uk-button-default uk-margin-remove uk-width-1-1 ">EXPLORE MORE</a>
                    </div>
                </div>
            </li>
            @endforeach
            @endif
            <!--trek end  -->
        

         </ul>
      </div>
   </div>
</section>
<!-- end of Featured Treks Section -->
<!-- meet our team section -->
<section class="uk-section" uk-scrollspy="cls: uk-animation-slide-left-small; target:  div, h5,h1;  delay: 50; repeat: false;">
   <div class="uk-container">
      <div class=" uk-child-width-1-2@m uk-grid">
         <div>
            <div class=" uk-child-width-1-2@m uk-grid">
               @foreach ($team as $value)
               <div class=" uk-team uk-margin-bottom">
              
                     <div class="uk-media-300 uk-border-rounded uk-box-shadow-large">
                        <img src="{{ asset('uploads/associated/' . $value->thumbnail) }}" alt="{{ $value->title }}">
                     </div>
                     <div class="bg-primary  uk-box-shadow-large uk-border-rounded uk-margin-small-top uk-text-center climber-info">
                        <h4 class="text-white uk-margin-remove">{{ $value->title }}</h4>
                        <span class="text-white uk-margin-remove">{!! $value->brief !!}</span>
                     </div>
              
               </div>
                  @endforeach

            </div>
         </div>
         @if(!empty($guide))
         <div>
            <div class="bg-light uk-padding uk-team">
               <div class="section-title uk-text-left">
                  <h5 class="uk-margin-top uk-margin-remove-bottom right-underline">{{ $guide->post_title }}</h5>
                  <h2 class="uk-margin-remove">{{ $guide->sub_title }}</h2>
               </div>
               {!! $guide->post_content !!} 
               <a href="{{ url(geturl($guide->uri)) }}" class="uk-button uk-button-default uk-margin-top " style="">View All</a>
            </div>
         </div>
         @endif
      </div>
   </div>

</section>
<!-- end meet our team section -->
<!-- bottom banner section -->
<section class="uk-padding-remove uk-media-500 last-banner"></section>
<!-- end of bottom banner section -->
<!-- client section -->
<section class="uk-section bg-light uk-background-cover client-bg" uk-scrollspy="cls: uk-animation-slide-left-small; target:  li, h5,h1;  delay: 50; repeat: false;">
   <div class="uk-container">
      <div class="section-title uk-text-center">
         <h5 class="uk-margin-top uk-margin-remove-bottom center-underline text-white">{{$setting->text3_title}}</h5>
         <h2 class="uk-margin-remove text-white">{{$setting->text3_sub_title}}</h2>
      </div>
      <div class="uk-slider-container uk-margin-top uk-margin-bottom" uk-slider>
         <div class="uk-position-relative uk-visible-toggle uk-light " tabindex="-1">
            <ul class="uk-slider-items uk-child-width-1-1 uk-grid uk-margin-top">
               @if($reviews->count() > 0)
               @foreach ($reviews as $value)  
               <li>
                  <div class="uk-grid uk-card uk-card-default uk-padding uk-box-shadow-large" style="background-image: url('assets/images/client-testimonial.png')">
                     <div class="uk-width-auto@m uk-text-center">
                        @if($value->image != NULL)
                        <img src="{{asset('uploads/reviews/'.$value->image)}}" alt="" class="rounded-border client-img">
                        @else
                       <img src="{{ asset('theme-assets/images/default-thumbnail.jpg') }}" alt="" class="rounded-border client-img">
                        @endif
                     </div>
                     <div class="uk-width-expand@m">
                         <div class="contents uk-text-justify uk-text-left@m" >
                      {!! $value->message !!}
                      </div>
                      <div class="uk-text-center uk-text-left@m" >
                       <span class="learn-more" >Show More</span>
                      </div>
                        <div class="uk-text-center uk-text-left@m">
                           <p class="text-primary uk-margin-remove uk-text-bold">{{ $value->full_name }}</p>
                           <p class="uk-margin-remove uk-text-bold">{{ $value->country }}</p>
                        </div>
                     </div>
                  </div>
               </li>
                @endforeach
               @endif
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
         </div>

         <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
      </div>
   </div>
</section>
<!-- end of client section -->
@stop