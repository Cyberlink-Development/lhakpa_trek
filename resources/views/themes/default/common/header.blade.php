<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lhakpa Trekking</title>
    <link rel="stylesheet" href="{{asset('theme-assets/css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('theme-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme-assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('theme-assets/css/swiper.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="{{asset('theme-assets/js/uikit.js')}}"></script>
    <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>

    <!---------------- Fav icon starts --------------------->
    	<link rel="icon" type="image/x-icon" href="{{asset('assets/favicon/favicon.ico')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/favicon/android-chrome-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
        <link rel="apple-touch-icon" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
        <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!---------------- Fav icon stops ----------------------->

    <style>
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
    <!-- Header start -->
    <header class="uk-position-top">
        <div class="uk-main-header uk-navbar-container uk-navbar-transparent">
            <!-- top nav menu -->
            <div class="uk-visible@l uk-container uk-white " style="position:relative;z-index:1000;">
                <div class=" uk-flex uk-flex-middle uk-grid-collapse uk-grid uk-margin-top uk-top-nav">
                    <div class="uk-width-auto@m">
                        <a href="{{ url('/') }}"> <img src="{{asset('theme-assets/img/logo.png')}}" width="180" alt=""></a>
                    </div>
                    <div class="uk-width-expand@m">
                        <ul class="uk-flex uk-flex-right uk-topnavbar-ul uk-margin-bottom">
                            @if($news)
                                <li class="border-right"><a href="{{route('page.posttype_detail',$news->uri)}}">{{ $news->post_type }}</a></li>
                            @endif
                            @if($women)
                                <li class="border-right"><a href="{{route('page.posttype_detail',$women->uri)}}">{{ $women->post_type }}</a></li>
                            @endif
                            @if($tourism)
                                <li class="border-right"><a href="{{route('page.posttype_detail',$tourism->uri)}}">{{ $tourism->post_type }}</a></li>
                            @endif
                        </ul>
                        <ul class="uk-flex uk-flex-right uk-topnavbar-ul">  
                            {{-- <li class="border-right">
                                <i class="fa-solid fa-phone uk-margin-small-right"></i> {{ $setting->phone }}
                            </li> --}}
                            <li class="border-right">
                                <a href="{{ route('page.posttype_detail',$contact_us->uri) }}">
                                    <i class="fa-solid fa-phone uk-margin-small-right"></i> {{ $setting->phone }}
                                </a>
                            </li>
                            <li class="border-right">
                                @if(Auth::check())
                                <a href="{{ route('user-wishlist') }}">
                                    <i class="fa-solid fa-heart uk-margin-small-right"></i>My Favourite [{{ Auth::user()->wishlists->count()}}]
                                </a>
                                @else
                                <a href="{{ route('user-wishlist') }}">
                                    <i class="fa-solid fa-heart uk-margin-small-right"></i>My Favourite 
                                </a>
                                @endif
                             </li>
                             @if(Auth::check() && Auth::user()->roles=='user')
                             <li class="border-right">
                                <a href="{{ route('user-profile') }}" >
                                    <i class="fa-solid fa-user uk-margin-small-right"></i>Hi, {{Auth::user()->name}}
                                </a>
                             </li>
                             @else
                             <li class="border-right">
                                <a href="#modal-form" uk-toggle>
                                    <i class="fa-solid fa-user uk-margin-small-right"></i>User Login.
                                </a>
                             </li>
                             @endif
                            <li class="uk-margin-small-left">
                            @if($plan_trip)
                                <a href="{{route('page.posttype_detail',$plan_trip->uri)}}" class="inquiry-btn">{{ $plan_trip->post_type }}</a>
                            @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- top nav menu -->
            <div uk-sticky="top: 0; animation: uk-animation-slide-top; cls-active: uk-navbar-sticky; sel-target: .uk-navbar-container;">
                <!-- Main Menu -->
                <div class="uk-visible@l uk-main-header-transparent uk-navbar-container  uk-navbar-transparent">
                    <div class="uk-container">
                        <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar="dropbar: true; uk-dropbar-top">
                            <div class="uk-navbar-left">
                                <a href="{{ url('/') }}" class="uk-logo-dark"> <img src="{{asset('theme-assets/img/logo.png')}}" width="180" alt=""></a>
                                <h2  class="uk-dark text-container" style="font-size: 20px; color: white; margin-top: 22px;">
                                    Your Travel Partner in Nepal
                                </h2>
                            </div>
                            <div class="uk-navbar-right">
                                <ul class="uk-navbar-nav uk-position-relative">
                                    <li>
                                        <a href="#"> Company <span uk-navbar-parent-icon></span></a>
                                        <div class="uk-dropbar uk-dropbar-top uk-pattern-bg" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;">
                                            <div class="uk-position-relative uk-visible-toggle uk-light uk-container " tabindex="-1" uk-slider>
                                                <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                                                    @foreach ($navigations as $nav)
                                                        <div>
                                                            <a href="{{route('page.posttype_detail',$nav->uri)}}">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="{{ $nav->post_type }}" src="{{ $nav->banner ? asset('uploads/original/'.$nav->banner) : asset('theme-assets/img/mountain/mountain1.jpeg') }}" />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">{{$nav->post_type}}</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="uk-flex uk-flex-middle uk-flex-center uk-margin uk-margin-remove-bottom">
                                                    <a class="uk-nav-slider-btn prev-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous" style="padding:6px 3px !important;"></a>
                                                    <a class="uk-nav-slider-btn next-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next" style="padding:6px 3px !important;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Destination <span uk-navbar-parent-icon></span></a>
                                        <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;">
                                        <div class=" uk-container">
                                            <div class="mega-border-top">
                                                <div uk-grid class="uk-grid-small">
                                                    <ul class="tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  " data-uk-tab="{connect:'.uk-switcher'}">
                                                        @foreach ($trekking as $trek)
                                                            <li> <a href="">{{$trek->title}}</a> </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="uk-switcher uk-width-expand@m uk-padding-menu ">
                                                        <!-- Annapurna Region -->
                                                        @foreach ($trekking as $key => $value)
                                                            <div>
                                                                <div class="uk-child-width-1-2@m uk-grid">
                                                                    <div>
                                                                        <div class="uk-title-fonts">
                                                                            <h2 class="uk-secondary">{{$value->title}}</h2>
                                                                            <p class="uk-margin-bottom">
                                                                                {{ $value->excerpt }}
                                                                            </p>
                                                                            <a href="{{ route('trekking-list',$value->uri) }}" class="uk-btn uk-btn-secondary uk-margin-top">VIEW ALL PACKAGES</a>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="uk-child-width-1-2 uk-grid-small uk-grid">
                                                                            <div>
                                                                                <img src="{{ !empty($value->thumbnail) ? asset('uploads/icon/'.$value->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')}}" alt="{{$value->title}}" class="border uk-media-140">
                                                                            </div>
                                                                            <div>
                                                                                <img src="{{ !empty($value->banner) ? asset('uploads/banners/'.$value->banner) : asset('theme-assets/img/mountain/mountain4.jpeg')}}" alt="{{$value->title}}" class="border uk-media-140">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-margin-medium-top uk-child-width-1-3 uk-grid">
                                                                    @php
                                                                        $tripList = get_triplist($value->id)->take(9)->toArray();
                                                                        $tripChunks = array_chunk($tripList, 3); 
                                                                    @endphp
                                                                    @foreach ($tripChunks as $chunk)
                                                                        <ul class="uk-list uk-highlight uk-navbar-list">
                                                                            @foreach ($chunk as $item)
                                                                                <li> <a href="{{ url('page/' . tripurl($item['uri'])) }}">{{ $item['trip_title'] }}</a>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Activities <span uk-navbar-parent-icon></span></a>
                                    <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;">
                                        <div class="uk-container">
                                            <div class="mega-border-top">
                                                <div uk-grid class="uk-grid-small">
                                                    <ul class="tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  " data-uk-tab="{connect:'.uk-switcher'}">
                                                        @foreach ($activity as $row)
                                                            <li> <a href="">{{ $row->title }}</a> </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="uk-switcher uk-width-expand@m uk-padding-menu ">
                                                        <!-- biking -->
                                                        @foreach ($activity as $key => $value)
                                                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                                                <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                                    @php
                                                                        $tripList = get_triplist($value->id)->toArray();
                                                                    @endphp
                                                                    @foreach ($tripList as $item)
                                                                        <div>
                                                                            <a href="{{ url('page/' . tripurl($item['uri'])) }}">
                                                                                <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src="{{ $item['thumbnail'] ? asset('uploads/original/'.$item['thumbnail']) : asset('theme-assets/img/mountain/mountain1.jpeg')}} " />
                                                                                    <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                        <h2 class="text-secondary uk-margin-remove">{{$item['trip_title']}}</h2>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                                    <a class="uk-nav-slider-btn prev-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous" style="padding:6px 3px !important;"></a>
                                                                    <a href="{{ route('activity-list', $value->uri) }}" class=" uk-margin-top uk-margin-remove-bottom uk-btn uk-btn-secondary">View All <span uk-icon="icon:  arrow-right"></span></a>
                                                                    <a class="uk-nav-slider-btn next-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next" style="padding:6px 3px !important;"></a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <!-- end of biking-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"> Travelling Style <span uk-navbar-parent-icon></span></a>
                                    <div class="uk-dropbar uk-dropbar-top uk-pattern-bg" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;">
                                        <div class="uk-position-relative uk-visible-toggle uk-light uk-container " tabindex="-1" uk-slider>
                                            <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                                                @foreach ($travels as $travel)
                                                    <div>
                                                        <a href="{{ route('travel-list', $travel->uri) }}">
                                                            <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="{{ $travel->title }}" src="{{ $travel->thumbnail ? asset('uploads/icon/'.$travel->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg') }}" />
                                                                <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                    <h2 class="uk-secondary uk-margin-remove">{{ $travel->title }}</h2>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                                @if ($your_group)
                                                    <div>
                                                        <a href="{{route('page.posttype_detail',$your_group->uri)}}">
                                                            <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="{{ $your_group->post_type }}" src="{{ $your_group->banner ? asset('uploads/original/'.$your_group->banner) : asset('theme-assets/img/mountain/mountain8.jpeg')}} "/>
                                                                <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                    <h2 class="uk-secondary uk-margin-remove">{{ $your_group->post_type }}</h2>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="uk-flex uk-flex-middle uk-flex-center uk-margin uk-margin-remove-bottom">
                                                <a class="uk-nav-slider-btn prev-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous" style="padding:6px 3px !important;"></a>
                                                <a class="uk-nav-slider-btn next-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next" style="padding:6px 3px !important;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Expedition <span uk-navbar-parent-icon></span></a>
                                    <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;">
                                        <div class=" uk-container">
                                            <div class="mega-border-top">
                                                <div uk-grid class="uk-grid-small">
                                                    <ul class="tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  " data-uk-tab="{connect:'.uk-switcher'}">
                                                        @foreach ($expedition as $row)
                                                            <li> <a href="">{{ $row->title }}</a> </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="uk-switcher uk-width-expand@m uk-padding-menu ">
                                                        <!-- Annapurna Region -->
                                                        @foreach ($expedition as $key => $value)
                                                            <div>
                                                                <div class="uk-child-width-1-2@m uk-grid">
                                                                    <div>
                                                                        <div class="uk-title-fonts">
                                                                            <h2 class="uk-secondary">{{$value->title}}</h2>
                                                                            <p class="uk-margin-bottom">{{ $value->excerpt }}</p>
                                                                            <a href="{{ route('expedition-list', $value->uri) }}" class="uk-btn uk-btn-secondary uk-margin-top">VIEW ALL PACKAGES</a>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="uk-child-width-1-2 uk-grid-small uk-grid">
                                                                            <div>
                                                                                <img src="{{!empty($value->thumbnail) ? asset('uploads/icon/'.$value->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')}}" alt="" class="border uk-media-140">
                                                                            </div>
                                                                            <div>
                                                                                <img src="{{!empty($value->banner) ? asset('uploads/banners/'.$value->banner) : asset('theme-assets/img/mountain/mountain4.jpeg')}}" alt="" class="border uk-media-140">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-margin-medium-top uk-child-width-1-3 uk-grid">
                                                                    @php
                                                                        $tripList = get_triplist($value->id)->take(9)->toArray();
                                                                        $tripChunks = array_chunk($tripList, 3); 
                                                                    @endphp
                                                                    
                                                                    @foreach ($tripChunks as $chunk)
                                                                        <ul class="uk-list uk-highlight uk-navbar-list">
                                                                            @foreach ($chunk as $item)
                                                                                <li> <a href="{{ url('page/' . tripurl($item['uri'])) }}">{{ $item['trip_title'] }}</a>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                    <!-- <li><a href="">Advanced Search</a></li> -->
                    <li class="uk-flex uk-flex-middle">
                        <form class="uk-search uk-search-default">
                            <input class="uk-search-input " type="search" placeholder="Search" aria-label="Search">
                            <span class="uk-search-icon-flip" uk-search-icon></span>
                        </form>
                    </li>
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
                            <a href="index.php" class="uk-logo uk-navbar-item"> <img src="assets/img/logo.png" alt="" style="height:56px;"> </a>
                        </div>
                        <div class="uk-navbar-right" style="gap: 10px;">
                            {{-- <a href="contact.php"><i class="fa-solid fa-phone uk-white f-20 uk-margin-small-right"></i></a>
                            <a href="#modal-search" uk-toggle><i class="fa-solid fa-magnifying-glass uk-white f-20 uk-margin-small-right"></i></a> --}}
                            
                            <a href="wishlist.php"><i class="fa-solid fa-heart uk-white f-20 uk-margin-small-right"></i></a>
                            <a href="#modal-form" uk-toggle><i class="fa-solid fa-user uk-white f-20 uk-margin-small-right"></i></a>
                            <div id="modal-search" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                    <form class="uk-search uk-search-default uk-width-1-1">
                                        <input class="uk-search-input " type="search" placeholder="Search" aria-label="Search">
                                        <span class="uk-search-icon-flip" uk-search-icon></span>
                                    </form>
                                </div>
                            </div>
                            <a uk-toggle aria-label="Open Menu" href="#uk-dialog-mobile" class="uk-navbar-toggle uk-navbar-toggle-animate" aria-expanded="false">
                                <div uk-navbar-toggle-icon class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="uk-dialog-mobile" class="uk-dropbar uk-padding-remove" uk-drop="{&quot;clsDrop&quot;:&quot;uk-dropbar&quot;,&quot;flip&quot;:&quot;false&quot;,&quot;container&quot;:&quot;.uk-header-mobile&quot;,&quot;target-y&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;mode&quot;:&quot;click&quot;,&quot;target-x&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;stretch&quot;:true,&quot;bgScroll&quot;:&quot;false&quot;,&quot;animation&quot;:&quot;reveal-top&quot;,&quot;animateOut&quot;:true,&quot;duration&quot;:300,&quot;toggle&quot;:&quot;false&quot;}">
                <div class="uk-height-min-1-1 uk-flex uk-flex-column">
                    <div class="uk-margin-auto-bottom">
                        <div class="uk-grid uk-child-width-1-1 uk-grid-stack" uk-grid="">
                            <div>
                                <div class="uk-panel" id="module-menu-dialog-mobile">
                                    <ul class="uk-nav uk-nav-primary  uk-nav-divider uk-nav-accordion uk-margin-top" uk-nav="targets: > .js-accordion">
                                        <li class="js-accordion uk-parent">
                                            <a href="" aria-expanded="false">
                                                Company <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                @foreach ($navigations as $nav)
                                                    <li><a href="{{route('page.posttype_detail',$nav->uri)}}">{{$nav->post_type}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent">
                                            <a aria-expanded="false"> Destination
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                @foreach ($trekking as $trek)
                                                    <li><a href="{{ route('trekking-list',$trek->uri) }}">{{$trek->title}}</a></li>
                                                @endforeach
                                                <li><a href="{{ route('page.trekkinglist') }}">View All</a></li>
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent">
                                            <a aria-expanded="false">Expedition
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                @foreach ($expedition as $row)
                                                <li><a href="{{ route('expedition-list', $row->uri) }}">{{ $row->title }}</a></li>
                                                @endforeach
                                                <li><a href="{{ route('page.expeditionlist') }}"> View All</a></li>
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent">
                                            <a aria-expanded="false"> Activities
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                @foreach ($activity as $row)
                                                    <li><a href="{{ route('trekking-list',$row->uri) }}">{{ $row->title }}</a></li>
                                                @endforeach
                                                <li><a href="{{ route('page.activitylist') }}">View All</a></li>
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent">
                                            <a aria-expanded="false"> Travelling Style
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                @foreach ($travels as $travel)
                                                    <li><a href="{{ route('travel-list', $travel->uri) }}">{{ $travel->title }}</a></li>
                                                @endforeach
                                                @if ($your_group)
                                                    <li><a href="{{route('page.posttype_detail',$your_group->uri)}}">{{ $your_group->post_type }}</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                        <li><a href="{{route('page.posttype_detail',$news->uri)}}">{{ $news->post_type }}</a></li>
                                        <li class="js-accordion uk-parent">
                                            <a href="" aria-expanded="false">Useful Info
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="{{route('page.posttype_detail',$women->uri)}}">{{ $women->post_type }}</a></li>
                                                <li> <a href="{{route('page.posttype_detail',$tourism->uri)}}">{{ $tourism->post_type }}</a></li>
                                                <li> <a href="{{route('page.posttype_detail',$suggestion->uri)}}">{{ $suggestion->post_type }}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('page.posttype_detail',$contact_us->uri) }}">Contact Us</a></li>
                                        @if($plan_trip)
                                            <li class="uk-margin-bottom uk-margin-top">
                                                <div class="uk-text-center uk-margin-top    ">
                                                    <a href="{{route('page.posttype_detail',$plan_trip->uri)}}" class="inquiry-btn">{{ $plan_trip->post_type }}</a>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                    <div class="uk-padding uk-padding-remove-top uk-text-center">
                                        <a href="" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end mobile menu -->
        </div>
        </div>
    </header>
    <div id="modal-form" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="padding-bottom:60px;">
            
            <ul class="uk-login-tab" uk-tab>
                <li><a href="#"><i class="fa-solid fa-unlock login-logo"></i> Sign In </a></li>
                <li><a href="#"><i class="fa-solid fa-user login-logo"></i>Sign Up</a></li>
            </ul>

            <div class="uk-switcher uk-margin">
                <div> 
                    <form class="uk-contact-form" action="{{route('user.login')}}" method="POST">
                        @csrf
                        <div class=" uk-child-width-1-1@m uk-grid">
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="user_email">Email Address</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="user_email" name="email" required type="email">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="pwd">Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="pwd" name="password" required type="password">
                                </div>
                            </div>
                        </div>
                        <div class="uk-child-width-1-2 uk-grid">
                            <div>
                                <label><input class="uk-checkbox uk-margin-small-right" type="checkbox" > Remember me </label>
                            </div>
                            <div class="uk-flex uk-flex-right">
                                <a href="#" class="uk-primary">Forget Password ?</a>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-text-center">
                            <button type="submit" class="uk-btn uk-btn-secondary">Sign In <span uk-icon="chevron-right"></span></button>
                        </div>
                    </form>
                </div>
                <div> 
                    <form class="uk-contact-form" action="{{route('user-registration')}}" method="POST">
                        @csrf
                        <div class=" uk-child-width-1-1@m uk-grid">
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="full_name">Full Name</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="full_name" name="name" required type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="email">Email Address</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="email" name="email" required type="email">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="password">Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="password" name="password" required type="password">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="c_pwd">Confirm Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="c_pwd" name="password_confirmation" required type="password">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-text-center">
                            <button type="submit" class="uk-btn uk-btn-secondary">Sign Up <span uk-icon="chevron-right"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Header end -->

        