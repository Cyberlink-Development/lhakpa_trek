<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>

    <body>
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
                                <li class="border-right"><a href="news.php">News / Blogs</a></li>
                                <li class="border-right"><a href="">Women Empowerment</a></li>
                                <li class="border-right"><a href="tourism.php">Toursim</a></li>
                            </ul>
                            <ul class="uk-flex uk-flex-right uk-topnavbar-ul">
                                <li class="border-right">
                                    <i class="fa-solid fa-phone uk-margin-small-right"></i> +123 456 7890 , +789 456 6786
                                </li>
                                <!--<li class="border-right">-->
                                <!--    <a href="#">-->
                                <!--        <i class="fa-solid fa-heart uk-margin-small-right"></i>My Favourite-->
                                <!--    </a>-->
                                <!--</li>-->
                                <!--<li class="border-right">-->
                                <!--    <a href="#">-->
                                <!--        <i class="fa-solid fa-user uk-margin-small-right"></i>User Login-->
                                <!--    </a>-->
                                <!--</li>-->
                                <li class="uk-margin-small-left">
                                    <a href="plan.php" class="inquiry-btn">Plan Your Trip</a>
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
                                                        <div>
                                                            <a href="about.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">About Us</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="why-us.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain2.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">Why Us</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="message.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain3.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">Message from us</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="migmar.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain4.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">Migmar Foundation</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="agent.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain5.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">Need an agent</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="team.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain6.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">Team Member</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="safety.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain7.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">SAFETY & SECURITY</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="suggestion.php">
                                                                <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                                    <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain9.jpeg " />
                                                                    <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                                    <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                        <h2 class="uk-secondary uk-margin-remove">Suggestion</h2>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
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
                                                                                    <img src="{{ $value->thumbnail ? asset('uploads/icon/'.$value->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')}}" alt="{{$value->title}}" class="border uk-media-140">
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
                                                        <li> <a href="">Biking</a> </li>
                                                        <li> <a href="">Culture</a> </li>
                                                        <li> <a href="">Cycling</a> </li>
                                                        <li> <a href="">Family</a> </li>
                                                    </ul>
                                                    <div class="uk-switcher uk-width-expand@m uk-padding-menu ">
                                                        <!-- biking -->
                                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                                            <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                                <a class="uk-nav-slider-btn prev-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous" style="padding:6px 3px !important;"></a>
                                                                <a href="list.php" class=" uk-margin-top uk-margin-remove-bottom uk-btn uk-btn-secondary">View
                                                                    All <span uk-icon="icon:  arrow-right"></span></a>
                                                                <a class="uk-nav-slider-btn next-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next" style="padding:6px 3px !important;"></a>
                                                            </div>
                                                        </div>
                                                        <!-- end of biking-->
                                                        <!-- culture -->
                                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                                            <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="trip-detail.php">
                                                                        <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block uk-transition-toggle uk-link-toggle " href="detail.php">
                                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                                            <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                                <h2 class="text-secondary uk-margin-remove">MUSTANG ROYALE ENFIELD TOUR</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                                <a class="uk-nav-slider-btn prev-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous" style="padding:6px 3px !important;"></a>
                                                                <a href="list.php" class=" uk-margin-top uk-margin-remove-bottom uk-btn uk-btn-secondary">View
                                                                    All <span uk-icon="icon:  arrow-right"></span></a>
                                                                <a class="uk-nav-slider-btn next-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next" style="padding:6px 3px !important;"></a>
                                                            </div>
                                                        </div>
                                                        <!-- end of culture-->
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
                                                <div>
                                                    <a href="list.php">
                                                        <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain3.jpeg " />
                                                            <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                <h2 class="uk-secondary uk-margin-remove">Family Trip</h2>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="list.php">
                                                        <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain2.jpeg " />
                                                            <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                <h2 class="uk-secondary uk-margin-remove">Guided Trip</h2>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain1.jpeg " />
                                                            <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                <h2 class="uk-secondary uk-margin-remove">Self Guieded TRip</h2>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="group.php">
                                                        <div class="uk-media-205 uk-cover-container border  uk-display-block uk-transition-toggle uk-link-toggle" href="detail.php">
                                                            <img class="uk-image uk-cover uk-transition-scale-up uk-transition-opaque" alt="" src=" assets/img/mountain/mountain8.jpeg " />
                                                            <div class="uk-overlay-banner uk-overlay uk-position-cover"></div>
                                                            <div class="uk-position-bottom-center  uk-activities uk-text-center uk-title-font">
                                                                <h2 class="uk-secondary uk-margin-remove">Your Group</h2>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
                                                    <li> <a href="">6000</a> </li>
                                                    <li> <a href="">7000</a> </li>
                                                    <li> <a href="">8000</a> </li>
                                                </ul>
                                                <div class="uk-switcher uk-width-expand@m uk-padding-menu ">
                                                    <!-- Annapurna Region -->
                                                    <div>
                                                        <div class="uk-child-width-1-2@m uk-grid">
                                                            <div>
                                                                <div class="uk-title-fonts">
                                                                    <h2 class="uk-secondary">6000</h2>
                                                                    <p class="uk-margin-bottom">The 6000 Region is one of Nepal’s most famous trekking destinations, known for its breathtaking mountain landscapes, diverse ecosystems, and rich cultural heritage.</p>
                                                                    <a href="list.php" class="uk-btn uk-btn-secondary uk-margin-top">VIEW ALL PACKAGES</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-child-width-1-2 uk-grid-small uk-grid">
                                                                    <div>
                                                                        <img src="assets/img/mountain/mountain3.jpeg" alt="" class="border uk-media-140">
                                                                    </div>
                                                                    <div>
                                                                        <img src="assets/img/mountain/mountain4.jpeg" alt="" class="border uk-media-140">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-medium-top uk-child-width-1-3 uk-grid">
                                                                    <ul class="uk-list uk-highlight uk-navbar-list">
                                                                        <li> <a href="trip-detail.php">Annapurna Base Camp (ABC) Trek</a>
                                                                        <li> <a href="trip-detail.php">Annapurna Circuit Trek</a>
                                                                        <li> <a href="trip-detail.php">Mardi Himal Trek</a>
                                                                    </ul>
                                                                    <ul class="uk-list uk-highlight uk-navbar-list">
                                                                        <li> <a href="trip-detail.php">Ghorepani Poon Hill Trek</a>
                                                                        <li> <a href="trip-detail.php">Tilicho Lake Trek</a>
                                                                        <li> <a href="trip-detail.php">Upper Mustang Trek</a>
                                                                        </ul>
                                                                    <ul class=" uk-list uk-highlight uk-navbar-list">
                                                                        <li> <a href="trip-detail.php">Khopra Danda Trek</a>
                                                                        <li> <a href="trip-detail.php"> Annapurna Short Trek (Ideal for beginners)</a>
                                                                        <li> <a href="trip-detail.php">Annapurna Base Camp Trek</a>
                                                                    </ul>
                                                                </div>
                                                    </div>
                                                    <!-- Dhaulagiri Region -->
                                                    <div>
                                                        <div class="uk-child-width-1-2@m uk-grid">
                                                            <div>
                                                                <div class="uk-title-fonts">
                                                                    <h2 class="uk-secondary">7000</h2>
                                                                    <p class="uk-margin-bottom">The 7000 is one of Nepal’s most famous trekking destinations, known for its breathtaking mountain landscapes, diverse ecosystems, and rich cultural heritage.</p>
                                                                    <a href="list.php" class="uk-btn uk-btn-secondary uk-margin-top">VIEW ALL PACKAGES</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-child-width-1-2 uk-grid-small uk-grid">
                                                                    <div>
                                                                        <img src="assets/img/mountain/mountain6.jpeg" alt="" class="border uk-media-140">
                                                                    </div>
                                                                    <div>
                                                                        <img src="assets/img/mountain/mountain9.jpeg" alt="" class="border uk-media-140">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-medium-top uk-child-width-1-3 uk-grid">
                                                            <ul class="uk-list uk-highlight uk-navbar-list">
                                                                <li> <a href="">Annapurna Base Camp (ABC) Trek</a>
                                                                <li> <a href="">Annapurna Circuit Trek</a>
                                                                <li> <a href="">Mardi Himal Trek</a>
                                                            </ul>
                                                            <ul class="uk-list uk-highlight uk-navbar-list">
                                                                <li> <a href="">Ghorepani Poon Hill Trek</a>
                                                                <li> <a href="">Tilicho Lake Trek</a>
                                                                <li> <a href="">Upper Mustang Trek</a>
                                                                </ul>
                                                                <ul class=" uk-list uk-highlight uk-navbar-list">
                                                                <li> <a href="">Khopra Danda Trek</a>
                                                                <li> <a href=""> Annapurna Short Trek (Ideal for beginners)</a>
                                                                <li> <a href="">Annapurna Base Camp Trek</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Everest Region -->
                                                    <div>
                                                        <div class="uk-child-width-1-2@m uk-grid">
                                                            <div>
                                                                <div class="uk-title-fonts">
                                                                    <h2 class="uk-secondary">8000</h2>
                                                                    <p class="uk-margin-bottom">The 8000 is one of Nepal’s most famous trekking destinations, known for its breathtaking mountain landscapes, diverse ecosystems, and rich cultural heritage.</p>
                                                                    <a href="list.php" class="uk-btn uk-btn-secondary uk-margin-top">VIEW ALL PACKAGES</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-child-width-1-2 uk-grid-small uk-grid">
                                                                    <div>
                                                                        <img src="assets/img/mountain/mountain7.jpeg" alt="" class="border uk-media-140">
                                                                    </div>
                                                                    <div>
                                                                        <img src="assets/img/mountain/mountain2.jpeg" alt="" class="border uk-media-140">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <div class="uk-margin-medium-top uk-child-width-1-3 uk-grid">
                                                                    <ul class="uk-list uk-highlight uk-navbar-list">
                                                                        <li> <a href="trip-detail.php">Annapurna Base Camp (ABC) Trek</a>
                                                                        <li> <a href="trip-detail.php">Annapurna Circuit Trek</a>
                                                                        <li> <a href="trip-detail.php">Mardi Himal Trek</a>
                                                                    </ul>
                                                                    <ul class="uk-list uk-highlight uk-navbar-list">
                                                                        <li> <a href="trip-detail.php">Ghorepani Poon Hill Trek</a>
                                                                        <li> <a href="trip-detail.php">Tilicho Lake Trek</a>
                                                                        <li> <a href="trip-detail.php">Upper Mustang Trek</a>
                                                                        </ul>
                                                                    <ul class=" uk-list uk-highlight uk-navbar-list">
                                                                        <li> <a href="trip-detail.php">Khopra Danda Trek</a>
                                                                        <li> <a href="trip-detail.php"> Annapurna Short Trek (Ideal for beginners)</a>
                                                                        <li> <a href="trip-detail.php">Annapurna Base Camp Trek</a>
                                                                    </ul>
                                                                </div>
                                                    </div>
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
                            <div class="uk-navbar-right">
                                <a href="contact.php"><i class="fa-solid fa-phone uk-white f-20 uk-margin-small-right"></i></a>
                                <a href="#modal-search" uk-toggle><i class="fa-solid fa-magnifying-glass uk-white f-20 uk-margin-small-right"></i></a>
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
                                                    <li><a href="about.php">About Us</a></li>
                                                    <li><a href="why-us.php">Why US</a></li>
                                                    <li><a href="message.php">Messafe from us</a></li>
                                                    <li><a href="migmar.php">Migmar Foundation</a></li>
                                                    <li><a href="agent.php">Need an Agent</a></li>
                                                    <li><a href="team.php">Team Member</a></li>
                                                    <li><a href="safety.php">Safety & Security</a></li>
                                                    <li><a href="suggestion.php">Suggestion</a></li>
                                                </ul>
                                            </li>
                                            <li class="js-accordion uk-parent">
                                                <a href="activities.php" aria-expanded="false"> Destination
                                                    <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                <li><a href="list.php">Everest Region</a></li>
                                                    <li><a href="list.php">Manasulu Region</a></li>
                                                    <li><a href="list.php">Annapurna Region</a></li>
                                                    <li><a href="list.php">Langtang Region</a></li>
                                                    <li><a href="list.php">Makalu Region</a></li>
                                                </ul>
                                            </li>
                                            <li class="js-accordion uk-parent">
                                                <a href="region-list.php" aria-expanded="false">Expedition
                                                    <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="list.php">8000ers</a></li>
                                                    <li><a href="list.php">7000ers</a></li>
                                                    <li><a href="list.php">6000ers</a></li>
                                                    <li><a href="list.php">5000ers</a></li>
                                                    <li><a href="list.php">All</a></li>
                                                </ul>
                                            </li>
                                            <li class="js-accordion uk-parent">
                                                <a href="region-list.php" aria-expanded="false"> Activities
                                                    <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="list.php">Biking</a></li>
                                                    <li><a href="list.php">Culture</a></li>
                                                    <li><a href="list.php">Cycling</a></li>
                                                    <li><a href="list.php">Family</a></li>
                                                </ul>
                                            </li>
                                            <li class="js-accordion uk-parent">
                                                <a href="region-list.php" aria-expanded="false"> Travelling Style
                                                    <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="list.php">Family Trip</a></li>
                                                    <li><a href="list.php">Guided Trip</a></li>
                                                    <li><a href="list.php">Self Guided Group</a></li>
                                                    <li><a href="group.php">Your Group</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="news.php">News / Blogs</a></li>
                                            <li class="js-accordion uk-parent">
                                                <a href="" aria-expanded="false">Useful Info
                                                    <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                                </a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="women.php">Women Empowerment</a></li>
                                                    <li> <a href="tourism.php">Toursim</a></li>
                                                    <li> <a href="suggestion.php">Journey & Suggestion</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li class="uk-margin-bottom uk-margin-top">
                                                <div class="uk-text-center uk-margin-top    ">
                                                    <a href="plan.php" class="inquiry-btn">Plan Your Trip</a>
                                                </div>
                                            </li>
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

        <!-- Header end -->

        