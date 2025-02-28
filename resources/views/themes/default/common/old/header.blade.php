<!DOCTYPE html>
<html>

<head>
    <title>{{ $setting->site_name }} - @yield('post_title') @yield('title')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('theme-assets/images/logo.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('theme-assets/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#c43426">
    <meta name="keywords" content="@yield('meta_keyword')- {{$setting->meta_key}} "/>
    <meta name="description" content="@yield('meta_description') -{{$setting->meta_description}}"/>
    <link rel="stylesheet" href="{{ asset('theme-assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/css/accordion.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="{{$setting->site_name}}"/>
    <meta property="og:description" content="@yield('meta_description')"/>
   @if (trim($__env->yieldContent('thumbnail')))
	   <meta property="og:image" content="{{ asset('uploads/original/' ) }}/@yield('thumbnail')" />
	@else
	   <meta property="og:image" content="{{asset('theme-assets/images/favicon.png')}}" />
	@endif
    <meta property="og:image:width" content="1000"/>
    <meta property="og:image:height" content="600"/>
    @if (trim($__env->yieldContent('thumbnail')))
    <meta name="twitter:image" content="{{ asset('uploads/original/' ) }}/@yield('thumbnail')"/>
    @else
    <meta property="twitter:image" content="{{ asset('theme-assets/images/logo.png') }}"/>
    @endif
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:card" content="summary_large_image"/>
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!--Flags icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.2.3/css/flag-icons.min.css" integrity="sha512-bZBu2H0+FGFz/stDN/L0k8J0G8qVsAL0ht1qg5kTwtAheiXwiRKyCq1frwfbSFSJN3jooR5kauE0YjtPzhZtJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <style>
      body{
         top: 0!important;
      }
      .skiptranslate > iframe{
         display: none!important;
      }
      .goog-te-gadget-icon{
         display: none!important;
      }

      iframe.VIpgJd-ZVi9od-xl07Ob-OEVmcd.skiptranslate{
         height: 190px!important;
      }
      .skiptranslate.goog-te-gadget span{
         display:inline-block;
      }
      #goog-gt-tt {
         display: none !important;
      }
      .VIpgJd-yAWNEb-VIpgJd-fmcmS-sn54Q {
         background:transparent!important;
         box-shadow:none!important;
      }
      .VIpgJd-ZVi9od-aZ2wEe-wOHMyf{
         display:none!important;
      }
      
      /********* google captcha *********/
      .grecaptcha-badge{
          display: none!important;
      }
   </style>

    <style>
        /* Custom notification styles */
        .uk-notification-message-danger {
            background-color: #ffebee !important;
            color: #c62828 !important;
            border-left: 4px solid #d32f2f !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-danger .uk-notification-close {
            color: #c62828 !important;
        }
        .uk-notification-message-danger:hover {
            background-color: #ffcdd2 !important;
        }

        .uk-notification-message-success {
            background-color: #e8f5e9 !important;
            color: #2e7d32 !important;
            border-left: 4px solid #4caf50 !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-success .uk-notification-close {
            color: #2e7d32 !important;
        }
        .uk-notification-message-success:hover {
            background-color: #c8e6c9 !important;
        }

        .uk-notification-message-warning {
            background-color: #fff3e0 !important;
            color: #ff9800 !important;
            border-left: 4px solid #ffb74d !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-warning .uk-notification-close {
            color: #ff9800 !important;
        }
        .uk-notification-message-warning:hover {
            background-color: #ffe0b2 !important;
        }

        .uk-notification-message-info {
            background-color: #e3f2fd !important;
            color: #1976d2 !important;
            border-left: 4px solid #64b5f6 !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        }
        .uk-notification-message-info .uk-notification-close {
            color: #1976d2 !important;
        }
        .uk-notification-message-info:hover {
            background-color: #bbdefb !important;
        }

        /* Ensure the notification container is positioned correctly */
        .uk-notification {
            top: 10px !important; /* Adjust as needed */
            right: 10px !important; /* Adjust as needed */
            z-index: 100000 !important;
        }
    </style>
</head>
<body>
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @foreach ($errors->all() as $index => $error)
                    setTimeout(function() {
                        showNotification("{{ $error }}", 'danger');
                    }, {{ $index * 300 }}); // 300ms delay between each notification
                @endforeach
            });

            function showNotification(message, status) {
                UIkit.notification({
                    message: message,
                    status: status,
                    pos: 'top-right',
                    timeout: 5000,
                    click: true
                });
            }
        </script>
    @endif
    @if(session('success') || session('warning') || session('info') || session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @if(session('success'))
                    showNotification("{{ session('success') }}", 'success');
                @endif
                @if(session('warning'))
                    showNotification("{{ session('warning') }}", 'warning');
                @endif
                @if(session('info'))
                    showNotification("{{ session('info') }}", 'info');
                @endif
                @if(session('error'))
                    showNotification("{{ session('error') }}", 'danger');
                @endif
            });

            function showNotification(message, status) {
                UIkit.notification({
                    message: message,
                    status: status,
                    pos: 'top-right',
                    timeout: 5000
                });
            }
        </script>
    @endif

    <div  id="preloader"class=" uk-position-cover uk-flex uk-flex-center uk-flex-middle" >
        <div class="spinner-container">
            <img src="{{ asset('theme-assets/images/logo.png') }}" alt="" class="uk-logo-dark">
            <div uk-spinner="ratio: 5"></div>
        </div>
    </div>
    <!-- header -->
              <!-- <div id="google_translate_element" style="position:absolute; right:50px; top:0px; z-index:100000;"></div> -->

    <div uk-sticky="start: 300; animation: uk-animation-slide-top; cls-active:uk-navbar-sticky; sel-target:.uk-navbar-container; class:uk-sticky;">
        <!-- Main Menu -->
        <div class="uk-visible@l uk-main-header-transparent uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar="dropbar: true; uk-dropbar-top">
                    <div class="uk-navbar-left ">
                        <a class="uk-navbar-item uk-logo " href="{{ url('/') }}"> <img src="{{ asset('theme-assets/images/adventure-logo.png') }}" alt="" class="uk-logo-dark"> </a>  
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-position-relative">
                            <li><a href="{{ url('/') }}"> Home</a> </li>
                            @if ($navigations->count() > 0)
                                @foreach ($navigations->take(1) as $row)
                                    @if (has_posts($row->id))
                                        <li>
                                            <a href="#"> {{ $row->post_type }} <span uk-navbar-parent-icon></span></a>
                                            <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;" style="background-image: url({{ asset('theme-assets/images/navbar.jpg') }}); background-position: top right;  ">
                                        
                                                <div class="uk-container">
                                                    <div class="uk-child-width-1-4 uk-grid-medium" uk-grid>
                                                        <!--  -->
                                                       
                                                        @foreach (has_posts($row->id) as $item)
                                                            <div class="uk-activities ">
                                                                <a
                                                                    href="{{ url(geturl($item->uri, $item->page_key)) }}">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block "
                                                                        href="{{ url(geturl($item->uri, $item->page_key)) }}">
                                                                        @if ($item->page_thumbnail)
                                                                            <img src="{{ asset('uploads/original/' . $item->page_thumbnail) }}"
                                                                                class="uk-image uk-cover"
                                                                                alt="{{ $item->title }}">
                                                                        @else
                                                                            <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                                                                class="uk-image uk-cover"
                                                                                alt="{{ $item->title }}">
                                                                        @endif
                                                                        <div
                                                                            class="uk-overlay-banner  uk-position-cover">
                                                                        </div>
                                                                        <div
                                                                            class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1
                                                                                class=" expedition-small-font  text-white uk-margin-remove">
                                                                                {{ $item->post_title }}</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                            @if ($activity != null)

                                <li><a href="{{ route('page.activitylist') }}">Activity<span
                                            uk-navbar-parent-icon></span>
                                    </a>
                                    <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;"  style="background-image: url({{ asset('theme-assets/images/navbar.jpg') }}); background-position: top right; ">
                                        <div class="uk-container">
                                            <div class="uk-child-width-1-4 uk-grid-medium" uk-grid>
                                                <!--  -->
                                                @foreach ($activity as $row)
                                                    <div class="uk-activities">
                                                        @if($row->external_link)
                                                            <a href="{{$row->external_link}}">
                                                        @else
                                                            <a href="{{ route('page.activitydetail', $row->uri) }}">
                                                        @endif
                                                                <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block ">
                                                                    @if ($row->thumbnail)
    
                                                                        <img src="{{ asset('uploads/icon/' . $row->thumbnail) }}"
                                                                            class="uk-image uk-cover"
                                                                            alt="{{ $row->title }}">
                                                                    @else
                                                                        <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                                                            class="uk-image uk-cover"
                                                                            alt="{{ $row->title }}">
                                                                    @endif
    
                                                                    <div class="uk-overlay-banner uk-position-cover"></div>
                                                                    <div
                                                                        class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                        <h1
                                                                            class=" expedition-small-font  text-white uk-margin-remove">
                                                                            {{ $row->title }}</h1>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                    </div>
                                                @endforeach
                                                <!--  -->

                                            </div>
                                            <div class="uk-text-center">

                                                <a href="{{ route('page.activitylist') }}"
                                                    class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar text-white">View
                                                    All <span uk-icon="icon:  arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if ($expedition != null)
                                <li><a href="{{ route('page.expeditionlist') }}">Expeditions <span uk-navbar-parent-icon></span></a>
                                    <div class="uk-dropbar uk-dropbar-top"
                                        uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;"
                                        style="background-image: url({{ asset('theme-assets/images/navbar.jpg') }}); background-position: top right;  ">
                                        <div class="uk-container">
                                            <div class="mega-border-top">
                                                <div uk-grid class="uk-grid-small">
                                                    <ul class="tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  "
                                                        data-uk-tab="{connect:'.uk-switcher'}">
                                                        @foreach ($expedition as $item)
                                                            <li> <a href="">{{ $item->title }}</a> </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="uk-switcher uk-width-expand@m uk-padding-menu ">

                                                        <!-- 8000ers --> <!---->
                                                        <div class="uk-position-relative uk-visible-toggle uk-light"
                                                            tabindex="-1" uk-slider>

                                                            <div
                                                                class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                               
                                                                @foreach ($exp_8000ers as $item)
                                                                    <div class="uk-activities ">
                                                                        <a
                                                                            href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                            <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block "
                                                                                href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                                @if ($item->thumbnail)
                                                                                    <img src="{{ asset('uploads/original/' . $item->thumbnail) }}"
                                                                                        class="uk-image uk-cover"
                                                                                        alt="{{ $item->trip_title }}">
                                                                                @else
                                                                                    <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                                                                        class="uk-image uk-cover"
                                                                                        alt="{{ $item->trip_title }}">
                                                                                @endif
                                                                                <div
                                                                                    class="uk-overlay-banner  uk-position-cover">
                                                                                </div>
                                                                                <div
                                                                                    class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                                    <h1
                                                                                        class=" expedition-small-font  text-white uk-margin-remove">
                                                                                        {{ $item->trip_title }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                                 <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="{{ route('expedition-list','8000ers') }}" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                        </div>
                                                        <!-- end of 8000ers -->
                                                        <!-- 7000ers -->
                                                        <div class="uk-position-relative uk-visible-toggle uk-light"
                                                            tabindex="-1" uk-slider>

                                                            <div
                                                                class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                                @foreach ($exp_7000ers as $item)
                                                                    <div class="uk-activities ">
                                                                        <a
                                                                            href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                            <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block "
                                                                                href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                                @if ($item->thumbnail)
                                                                                    <img src="{{ asset('uploads/original/' . $item->thumbnail) }}"
                                                                                        class="uk-image uk-cover"
                                                                                        alt="{{ $item->trip_title }}">
                                                                                @else
                                                                                    <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                                                                        class="uk-image uk-cover"
                                                                                        alt="{{ $item->trip_title }}">
                                                                                @endif
                                                                                <div
                                                                                    class="uk-overlay-banner  uk-position-cover">
                                                                                </div>
                                                                                <div
                                                                                    class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                                    <h1
                                                                                        class=" expedition-small-font  text-white uk-margin-remove">
                                                                                        {{ $item->trip_title }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                       <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="{{ route('expedition-list','7000ers') }}" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>


                                                        </div>
                                                        <!-- end of 7000ers -->
                                                        <!-- 6000ers -->
                                                        <div class="uk-position-relative uk-visible-toggle uk-light"
                                                            tabindex="-1" uk-slider>
                                                          
                                                                <div
                                                                    class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            @foreach ($exp_6000ers as $item)
                                                                    <div class="uk-activities ">
                                                                        <a
                                                                            href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                            <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block "
                                                                                href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                                @if ($item->thumbnail)
                                                                                    <img src="{{ asset('uploads/original/' . $item->thumbnail) }}"
                                                                                        class="uk-image uk-cover"
                                                                                        alt="{{ $item->trip_title }}">
                                                                                @else
                                                                                    <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                                                                        class="uk-image uk-cover"
                                                                                        alt="{{ $item->trip_title }}">
                                                                                @endif
                                                                                <div
                                                                                    class="uk-overlay-banner  uk-position-cover">
                                                                                </div>
                                                                                <div
                                                                                    class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                                    <h1
                                                                                        class=" expedition-small-font  text-white uk-margin-remove">
                                                                                        {{ $item->trip_title }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                            @endforeach
                                                                </div>
                                                                 <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="{{ route('expedition-list','6000ers') }}" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                           



                                                        </div>
                                                        <!-- end of 6000ers -->
                                                    </div>

                                                </div>
                                            </div>
                                      
                                        </div>
                                    </div>
                                </li>
                            @endif

                            @if ($trekking != null)
                                <li><a href="{{ route('page.trekkinglist') }}">Trekking <span uk-navbar-parent-icon></span></a>
                                    <div class="uk-dropbar uk-dropbar-top"
                                        uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;"
                                        style="background-image: url({{ asset('theme-assets/images/navbar.jpg') }}); background-position: top right;  ">
                                        <div class="uk-container">
                                            <div class="mega-border-top">
                                                <div uk-grid class="uk-grid-small">
                                                    <ul class="tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  "
                                                        data-uk-tab="{connect:'.uk-switcher'}">
                                                        @foreach ($trekking as $value)
                                                            <li> <a href="">{{ $value->title }}</a> </li>
                                                        @endforeach

                                                    </ul>
                                                    <div class="uk-switcher uk-width-expand@m uk-padding-menu ">

                                                        @foreach ($trekking as $key => $value)
                                                            <!-- 8000ers -->
                                                            <div class="uk-position-relative uk-visible-toggle uk-light"  
                                                                tabindex="-1" uk-slider>
                                                                <div
                                                                    class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                                    @foreach (get_triplist($value->id) as $item)
                                                                        <div class="uk-activities">
                                                                            <a
                                                                                href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                                <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block "
                                                                                    href="{{ url('page/' . tripurl($item->uri)) }}">
                                                                                    @if ($item->thumbnail)
                                                                                        <img src="{{ asset('uploads/original/' . $item->thumbnail) }}"
                                                                                            class="uk-image uk-cover"
                                                                                            alt="{{ $item->trip_title }}">
                                                                                    @else
                                                                                        <img src="{{ asset('theme-assets/images/default-thumbnail.png') }}"
                                                                                            class="uk-image uk-cover"
                                                                                            alt="{{ $item->trip_title }}">
                                                                                    @endif
                                                                                    <div
                                                                                        class="uk-overlay-banner  uk-position-cover">
                                                                                    </div>
                                                                                    <div
                                                                                        class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                                        <h1
                                                                                            class=" expedition-small-font  text-white uk-margin-remove">
                                                                                            {{ $item->trip_title }}
                                                                                        </h1>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                                <div
                                                                    class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                                    <a class="uk-nav-slider-btn " href="#"
                                                                        uk-icon="icon:arrow-left; ratio: 1.5"
                                                                        uk-slider-item="previous"></a>
                                                                    <a href="{{ route('trekking-list',$value->uri) }}"
                                                                        class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                        All <span
                                                                            uk-icon="icon:  arrow-right"></span></a>
                                                                    <a class="uk-nav-slider-btn" href="#"
                                                                        uk-icon="icon:arrow-right; ratio: 1.5"
                                                                        uk-slider-item="next"></a>
                                                                </div>

                                                            </div>
                                                            <!-- end of 8000ers -->
                                                        @endforeach


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif

                            @if ($useful_info != 'null')
                                <li>
                                    <a href="avoide:javascript;">Useful Info <span uk-navbar-parent-icon></span>
                                    </a>
                                    <div uk-drop="mode:hover; pos: bottom-center; delay-hide: 10;"
                                        class="uk-dropdown uk-useful-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav uk-useful-nav">
                                            @foreach ($useful_info as $item)
                                                <li>
                                                    <a href="{{ url(geturl($item->uri, $item->page_key)) }}" class="uk-useful-link"> <span uk-icon="icon:  chevron-right"></span>{{ $item->post_title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endif
                            @if ($contact_us != 'null')
                                <li> <a href="{{ route('page.posttype_detail', $contact_us->uri) }}">
                                        {{ $contact_us->post_type }}</a> </li>
                            @endif
                            <li><a href="{{ route('payment.direct') }}"><button class="uk-button uk-button-default">Payment</button></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end main menu -->
        <!-- mobile menu -->
        <div class="uk-header-mobile uk-hidden@l " uk-header="">
            <div class="uk-navbar-container ">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar="{&quot;container&quot;:&quot;.uk-header-mobile&quot;}">
                        <div class="uk-navbar-left">
                            <a href="{{ url('/') }}" class="uk-logo uk-navbar-item"> <img
                                    src="{{ asset('theme-assets/images/adventure-logo.png') }}" alt="" class="uk-logo-dark"> </a>
                        </div>
                        <div class="uk-navbar-right">

                            <a uk-toggle aria-label="Open Menu" href="#uk-dialog-mobile"
                                class="uk-navbar-toggle uk-navbar-toggle-animate" aria-expanded="false">
                                <div uk-navbar-toggle-icon class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="uk-dialog-mobile" class="uk-dropbar uk-padding-remove"
                uk-drop="{&quot;clsDrop&quot;:&quot;uk-dropbar&quot;,&quot;flip&quot;:&quot;false&quot;,&quot;container&quot;:&quot;.uk-header-mobile&quot;,&quot;target-y&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;mode&quot;:&quot;click&quot;,&quot;target-x&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;stretch&quot;:true,&quot;bgScroll&quot;:&quot;false&quot;,&quot;animation&quot;:&quot;reveal-top&quot;,&quot;animateOut&quot;:true,&quot;duration&quot;:300,&quot;toggle&quot;:&quot;false&quot;}">
                <div class="uk-height-min-1-1 uk-flex uk-flex-column">
                    <div class="uk-margin-auto-bottom">
                        <div class="uk-grid uk-child-width-1-1 uk-grid-stack" uk-grid="">
                            <div>
                                <div class="uk-panel" id="module-menu-dialog-mobile">
                                    <ul class="uk-nav uk-nav-primary  uk-nav-divider uk-nav-accordion uk-margin-top"
                                        uk-nav="targets: > .js-accordion">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        @if ($navigations->count() > 0)
                                            @foreach ($navigations->take(1) as $row)
                                                @if (has_posts($row->id))
                                                    <li class="js-accordion uk-parent"><a href=""
                                                            aria-expanded="false"> {{ $row->post_type }} <span
                                                                uk-nav-parent-icon=""
                                                                class="uk-icon uk-nav-parent-icon"></span>
                                                        </a>
                                                        <ul class="uk-nav-sub">
                                                            @foreach (has_posts($row->id) as $item)
                                                                <li>
                                                                    <a
                                                                        href="{{ url(geturl($item->uri, $item->page_key)) }}">

                                                                        {{ $item->post_title }}

                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                            <!--  -->
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if ($activity != null)
                                            <li class="js-accordion uk-parent"><a href="{{ route('page.activitydetail', $row->uri) }}"
                                                    aria-expanded="false"> Activities <span uk-nav-parent-icon=""
                                                        class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                    @foreach ($activity->whereNotIn('id',['58','59']) as $row)
                                                        <li>
                                                            <a href="{{ route('page.activitydetail', $row->uri) }}">

                                                                {{ $row->title }}

                                                            </a>
                                                        </li>
                                                    @endforeach
                                             <li><a href="{{ route('page.trekkinglist') }}">Trekking</a></li>

                                             <li><a href="{{ route('page.expeditionlist') }}">Expeditions</a></li>
                                                    <!--  -->
                                                </ul>
                                            </li>
                                        @endif
                                        @if ($expedition != null)

                                            <li class="js-accordion uk-parent"><a href="#"
                                                    aria-expanded="false"> Expedition <span uk-nav-parent-icon=""
                                                        class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                    @foreach ($expedition as $row)
                                                        <li>
                                                            <a href="{{ route('expedition-list', $row->uri) }}">
                                                                {{ $row->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                    <!--  -->
                                                </ul>
                                            </li>
                                        @endif
                                        <li class="js-accordion uk-parent"> <a href="#"
                                                aria-expanded="false">
                                                Trekking
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                              @foreach ($trekking as $key => $value)
                                                <li><a href="{{ route('trekking-list',$value->uri) }}">{{ $value->title }}</a></li>
                                           @endforeach
                                            </ul>
                                        </li>

                                        @if ($useful_info != 'null')
                                            <li class="js-accordion uk-parent">
                                                <a href="" aria-expanded="false">Useful Info <span
                                                        uk-nav-parent-icon=""
                                                        class="uk-icon uk-nav-parent-icon"></span>
                                                </a>

                                                <ul class="uk-nav-sub">
                                                    @foreach ($useful_info as $item)
                                                        <li>
                                                            <a href="{{ url(geturl($item->uri, $item->page_key)) }}">
                                                                {{ $item->post_title }}</a>
                                                        </li>
                                                    @endforeach


                                                </ul>
                                            </li>
                                        @endif
                                        @if ($contact_us != 'null')
                                            <li> <a href="{{ route('page.posttype_detail', $contact_us->uri) }}">
                                                    {{ $contact_us->post_type }}</a> </li>
                                        @endif
                                        <li><a href="{{ route('payment.direct') }}"><button class="uk-button uk-button-default">Payment</button></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end mobile menu -->
    </div>
    <!-- end header    -->
    <div class="uk-sticky-right uk-position-fixed uk-position-bottom-right  uk-margin" style="z-index:900;"> 
        <div id="google_translate_element" style="position:absolute; right:0px; top:-25px; z-index:100000;"></div>
    </div>
    

