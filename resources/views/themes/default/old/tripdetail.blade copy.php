@extends('themes.default.common.master')
@section('title', $data->meta_title ? $data->meta_title : $data->trip_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->thumbnail)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ asset('uploads/banners/' . $data->banner) }}" alt="{{$data->trip_title}}" uk-img>
    <div class="uk-container uk-width-1-1 pt-150">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid uk-height-match="target: .uk-same-height">
            <div class="uk-width-3-4@m" id="container">
                <!-- original div -->
                <div id="originalDiv">
                    <div class="uk-sub-banner-font">
                        <h1>{{ $data->trip_title }}</h1>
                    </div>
                </div>
                <!-- end of original div -->

                <!-- photo/ video gallery start -->

                <!-- photos section start -->
                <div id="newDiv1" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn1"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-grid" uk-lightbox="animation: slide">
                                @foreach ($photos as $photo)
                                    <div>
                                        <a class="uk-inline uk-media-270" href="{{ asset('/uploads/original/' . $photo->thumbnail) }}">
                                            <img src="{{ asset('/uploads/original/' . $photo->thumbnail) }}" alt="{{ $photo->title }} class="border">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
                <!-- photos section end -->
                <!-- videos section start-->
                <div id="newDiv2" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn2"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        sdfsdf
                    </div>
                </div>
                <!-- videos section end -->

                <!-- photo/ video gallery end -->
            </div>
            <!-- banner side bar start -->
            <div class="uk-width-1-4@m uk-same-height">
                <div class="uk-grey-bg  uk-padding-dicovery  uk-pattern-bg">
                    <div class="uk-flex uk-flex-between uk-flex-middle">
                        <h2 class="uk-white uk-text-uppercase uk-margin-remove">{{ $data->destinations()->first()->title }}</h2>
                        <div class="uk-star-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <hr style="border-color: var(--secondary);">
                    <p class="uk-white uk-text-justify line-five">
                        {{$data->sub_title}}
                    </p>
                    <div class="uk-margin-top uk-flex uk-flex-center">
                        <button id="changeBtn1" class="uk-buttons">
                            <span class="uk-secondary uk-margin-right"><i class="fa-solid fa-photo-film uk-margin-small-right"></i> Photos</span>
                        </button>
                        <button id="changeBtn2" class="uk-buttons">
                            <span class="uk-secondary uk-margin-right"><i class="fa-solid fa-video uk-margin-small-right"></i>Videos</span>
                        </button>
                    </div>
                </div>
                <div class="uk-child-width-1-2 uk-grid-collapse" uk-grid>
                    <div class="uk-secondary-bg uk-book-btn">
                        <a href="book.php">BOOK NOW</a>
                    </div>
                    <div class="uk-primary-bg uk-book-btn">
                        <a href="#modal-inquiry" class="uk-inquiry-btn" uk-toggle>Inquiry Now</a>
                    </div>
                </div>
            </div>
            <!-- banner side bar start -->
        </div>
    </div>
</section>

<div class="uk-position-relative detail-nav">
    <div class=" uk-box-shadow-large" uk-sticky" uk-sticky="offset: 80;  animation: uk-animation-slide-top uk-animation-slow uk-transform-origin-bottom-center " style="z-index:998;">
        <div class="">
            <div class="border uk-light">
                <div class="uk-small-details-nav">
                    <div class="uk-container uk-position-relative uk-flex uk-flex-middle">
                        <ul class="uk-width-2-3 uk-navbar-single uk-flex uk-flex-between uk-flex-middle uk-margin-remove-bottom" id='sidenav'>
                            <li>
                                <a href="#features" uk-scroll>Overview </a>
                            </li>
                            @if($itinerary->count() > 0)
                                <li>
                                    <a href="#itinerary" uk-scroll>Itinerary </a>
                                </li>
                            @endif
                            @if ($cost_includes->count() > 0 || $cost_excludes->count() > 0 )
                                <li>
                                    <a href="#cost" uk-scroll>Cost Includes /Excludes</a>
                                </li>
                            @endif
                            @if ($faqs->count() > 0)
                                <li>
                                    <a href="#faq" uk-scroll>FAQ </a>
                                </li>
                            @endif
                            <li>
                                <a href="#review" uk-scroll>Review </a>
                            </li>
                        </ul>
                        <div class="uk-width-1-3 uk-flex uk-flex-right">
                            <a href="#offcanvas-usage" class="uk-btn uk-btn-secondary" uk-toggle>Dates & Prices</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-3-4@m">
                <div id="features">
                    <!-- overview start -->
                    <div>
                        <div class="uk-text-title">
                            <h1 class="uk-primary">Wellness in the Himalayas</h1>
                        </div>
                        <p>
                            {!!$data->trip_content!!}
                        </p>
                    </div>
                    <!-- overview end -->

                    <!-- hightlight start-->
                    @if (!empty($data->trip_highlight))
                        <div class="uk-font">
                            <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-person-hiking uk-margin-small-right" aria-hidden="true"></i>Trip highlight</span>
                            <ul class="uk-list uk-highlight uk-list-divider uk-light-bg uk-padding border">
                                {!! $data->trip_highlight !!}
                            </ul>
                        </div>
                    @endif
                    <!-- end hightlight -->

                    <!-- notice start-->
                    @if (!empty($data->trip_excerpt))
                        <div class="uk-font">
                            <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-list uk-margin-small-right" aria-hidden="true"></i>Important notice</span>
                            <div class=" uk-light-bg uk-padding border uk-margin-top">
                                <p class="uk-text-justify">
                                    {!! $data->trip_excerpt !!}
                                </p>
                            </div>
                        </div>
                    @endif
                    <!-- end notice -->

                </div>
                <!-- itnerary start-->
                @if($itinerary->count() > 0)
                    <div class="uk-font uk-margin-top uk-margin-bottom" id="itinerary">
                        <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Itinerary</span>
                        <div class=" uk-light-bg uk-padding border uk-margin-top">
                            <ul class="uk-detail-list" uk-accordion>
                                @foreach ($itinerary as $item)
                                    <li class="{{ $loop->first ? 'uk-open' : '' }}">
                                        <a class="uk-accordion-title" href><span class="uk-margin-right"> Day {{ $item->days }}</span> 
                                            {{ $item->title }}
                                        </a>
                                        <div class="uk-accordion-content uk-margin-remove">
                                            <p>{!! $item->content !!}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <!-- itnerary end-->
            </div>
            <div class="uk-width-1-4@m">
                <!-- facilities start -->
                <div uk-sticky="offset: 150; end: #my-id; " style="z-index: 100;">
                    <div class="uk-light-bg border uk-padding-small">
                        <div class="uk-child-width-1-2@m uk-child-width-1-3 uk-grid-match uk-grid uk-flex-left uk-grid-collapse" uk-grid="">
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/score.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong>Trip Grade</strong></p>
                                            <p class="uk-margin-remove">{{ grade_message_trek($data->trip_grade) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/clock.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong>Duration</strong></p>
                                            <p class="uk-margin-remove">{{ $data->duration }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/altitude.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong>Max Elevation</strong></p>
                                            <p class="uk-margin-remove">{{ $data->max_altitude }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/group.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong>Group Size</strong></p>
                                            <p class="uk-margin-remove">{{ $data->group_size }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/bus.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong>Transporation</strong></p>
                                            <p class="uk-margin-remove">{{$data->peak_name}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/point.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            <p class="uk-margin-remove"><strong> Start / End</strong></p>
                                            <p class="uk-margin-remove">{{ $data->best_season }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/hotel.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong>Accommodation</strong></p>
                                            <p class="uk-margin-remove">{{ $data->accommodation }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-secondary-bg uk-book-btn border uk-margin-small-top">
                        <a href="#modal-customize" uk-toggle>Customize Your Trip</a>
                    </div>
                    <div class="uk-primary-bg uk-book-btn border uk-margin-small-top">
                        <a href="#offcanvas-usage" uk-toggle>View Dates and prices</a>
                    </div>
                </div>
                <!-- facilities end -->
            </div>
        </div>
        <div id="my-id"></div>
    </div>
</section>
<!-- cost includes / excludes section start-->
@if ($cost_includes->count()>0 || $cost_excludes->count()>0 )
    <section class="uk-position-relative uk-section  uk-background-norepeat uk-background-cover" uk-parallax="bgx: -100; easing: 1;" data-src="{{asset('theme-assets/img/bg/01.jpg')}}" id="cost" uk-img>
        <div class="uk-overlay-pink uk-position-cover"></div>
        <div class="uk-container uk-position-relative">
            <div class="uk-child-width-1-2@m" uk-grid>
                @if ($cost_includes->count()>0)
                    <div>
                        <h3 class="uk-white uk-text-center">Includes</h3>
                        <ul class="uk-includes uk-light-bg uk-padding border">
                            @foreach ($cost_includes as $item)
                                <li>{{ $item->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($cost_includes->count()>0)
                    <div>
                        <h3 class="uk-white uk-text-center">Excludes</h3>
                        <ul class="uk-excludes uk-light-bg uk-padding border">
                            @foreach ($cost_excludes as $item)
                                <li>{{ $item->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        </div>
    </section>
@endif
<!-- cost includes / excludes section end -->

<!-- faq section -->
<section class="uk-section uk-section-overlap-top-light" id="faq">
    <div class="uk-container">
        @if ($faqs->count()>0)
            <div class="uk-font uk-text-center">
                <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-person-circle-question uk-margin-small-right" aria-hidden="true"></i>FAQs</span>
            </div>
            <ul class="uk-detail-list uk-light-bg uk-padding border" uk-accordion>
                @foreach($faqs as $item)
                    <li class="{{ $loop->first ? 'uk-open' : '' }}">
                        <a class="uk-accordion-title" href><span class="uk-margin-right">{{ $loop->iteration }}</span>
                            {{ $item->title }}
                        </a>
                        <div class="uk-accordion-content uk-margin-remove">
                            <p>{{ $item->content }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</section>
<!-- faq section end -->

<!-- review section start-->
<section class=" uk-primary-bg" id="review">
    <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
        <div class="uk-media-500">
            <img src="{{$data->thumbnail ? asset('uploads/original/'.$data->thumbnail) : asset('theme-assets/img/mountain/mountain4.jpeg')}}" alt="{{$data->trip_title}}">
        </div>
        <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text">
            <div class="uk-container uk-flex uk-flex-middle">
                <div class="uk-title-font">
                    <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                    <h1 class="uk-secondary">Latest from our travellers</h1>
                    <div uk-slider>
                        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                            <div class="uk-slider-items">
                                <!-- client detail -->
                                @foreach ($trip_review as $value)
                                    <div>
                                        <div class="uk-star-rating">
                                            @for($i=0; $i < $value->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
                                        </div>
                                        <p class="uk-white uk-margin-top">{!! $value->message !!}
                                             <br> <br><b>Greeting from Sherpa Family,</b>
                                            <div class="uk-flex">
                                                <img src="{{$value->image ? asset('uploads/reviews/'.$value->image) : asset('theme-assets/img/user.png')}}" class="uk-client-img" alt="">
                                                <div class="uk-title-font">
                                                    <h2 class="uk-secondary">{{ $value->full_name }}</h2>
                                                    <span class="uk-white">{{ $value->country }}</span>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                @endforeach
                                <!-- client detail -->
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex uk-flex-center"></ul>
                        </div>
                    </div>
                    <div class="uk-margin-top uk-text-center">
                        <a href="#offcanvas-review" class="uk-btn uk-btn-secondary" uk-toggle>Add Review</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- review section end -->

<!-- review form modal start -->
<div id="offcanvas-review" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right uk-padding-bottom">
        <div class="uk-padding uk-padding-remove-bottom">
            <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove uk-primary-bg border">write a review</h3>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form class="uk-contact-form" action="" method="">
                <div class=" uk-child-width-1-2@m uk-grid">
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="full_name">Full Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="fullname" name="full_name" required type="text">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="email" name=email" required type="email">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="image">Image</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="image" name="image" required type="file" style="padding: 6px;">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="">Rating</label>
                        <div class="star-rating">
                            <input type="radio" id="5-stars" name="rating" value="5">
                            <label for="5-stars" class="star">&#9733;</label>
                            <input type="radio" id="4-stars" name="rating" value="4">
                            <label for="4-stars" class="star">&#9733;</label>
                            <input type="radio" id="3-stars" name="rating" value="3">
                            <label for="3-stars" class="star">&#9733;</label>
                            <input type="radio" id="2-stars" name="rating" value="2">
                            <label for="2-stars" class="star">&#9733;</label>
                            <input type="radio" id="1-star" name="rating" value="1">
                            <label for="1-star" class="star">&#9733;</label>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="country">Country</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="country" name="country" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="contact">Message</label>
                    <div class="uk-form-controls">
                        <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                    </div>
                </div>
                <div class="uk-margin-top uk-text-center">
                    <a href="" class="uk-btn uk-btn-secondary">Learn More <span uk-icon="chevron-right"></span></a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- review form modal end -->

<!-- dates and prices modal start -->
<div id="offcanvas-usage" style="width:100%" uk-offcanvas>
    <div class="uk-offcanvas-bar uk-padding-remove uk-white-bg">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class=" uk-padding">
            <h3 class="text-secondary uk-margin-remove uk-text-center uk-primary-bg border">
                Dates & Prices
            </h3>
        </div>
        <div class="uk-padding uk-padding-remove-top">
            <h3 class="uk-primary uk-margin-remove">2025</h3>
            <table class="uk-table uk-table-striped uk-table-responsive">
                <thead>
                    <tr>
                        <th>Dates</th>
                        <th>Prices</th>
                        <th>Deposit</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sat 31 May -- Sat 14 Jun</td>
                        <td>US$75</td>
                        <td>US$475</td>
                        <td>Spot Available</td>
                        <td><a href="book.php" class="uk-btn uk-btn-secondary">Book Now</a></td>
                    </tr>
                    <tr>
                        <td>Sat 31 May -- Sat 14 Jun</td>
                        <td>US$75</td>
                        <td>US$475</td>
                        <td>Spot Available</td>
                        <td><a href="book.php" class="uk-btn uk-btn-secondary">Book Now</a></td>
                    </tr>
                    <tr>
                        <td>Sat 31 May -- Sat 14 Jun</td>
                        <td>US$75</td>
                        <td>US$475</td>
                        <td>Spot Available</td>
                        <td><a href="book.php" class="uk-btn uk-btn-secondary">Book Now</a></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <h3 class="uk-primary">LAND ONLY INFORMATION</h3>
                <div class="uk-light-bg uk-padding-small border">
                    <p>Please refer to the 'Joining Arrangements & Transfers' within Holiday Information for further details.
                        Flights and other transport to your destination should not be booked until you have received your booking confirmation and the departure is showing 'Guaranteed to Run' or 'Limited'.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- dates and prices modal end -->

<!-- inquiry form modal start-->
<div id="modal-inquiry" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove  uk-primary-bg border">Have Questions?</h3>
        <h3 class="uk-text-center uk-margin-remove">VVIP MANASLU EXPEDITION (8163M)</h3>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form class="uk-contact-form uk-margin-top" action="" method="">
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="name">Full Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="emailid">Email*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="emailid" name="emailid" required type="email">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="country">Country</label>
                    <select class="uk-select" aria-label="Select">
                        <option>Nepal</option>
                        <option>Option 02</option>
                    </select>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="number">Contact</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="contact" name="contact" required type="number">
                    </div>
                </div>
            </div>
            <div class="uk-margin-small-top">
                <label class="uk-form-label uk-text-bold" for="contact">Message</label>
                <div class="uk-form-controls">
                    <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                </div>
            </div>
            <div class="uk-margin-top uk-text-center">
                <a href="" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></a>
            </div>
        </form>

    </div>
</div>
<!-- inquiry form modal end -->

<!-- inquiry form modal start-->
<div id="modal-customize" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove  uk-primary-bg border">Customize Trip</h3>
        <h3 class="uk-text-center uk-margin-remove">VVIP MANASLU EXPEDITION (8163M)</h3>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form class="uk-contact-form uk-margin-top" action="" method="">
            <h3 class="uk-secondary uk-margin-remove">Trip Information</h3>
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="pname">Package Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="pname" name="pname" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="people">Number of People*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="people" name="people" required type="number">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="days">Duration*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="days" name="days" required type="number">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="date">Trip Start Date*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="date" name="date" required type="date">
                    </div>
                </div>
            </div>
            <hr>
            <h3 class="uk-secondary uk-margin-remove">Personal Information</h3>
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="fname">Full Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="fname" name="fname" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="emails">Email*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="emails" name="emails" required type="email">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="fcountry">Country*</label>
                    <select class="uk-select" aria-label="Select">
                        <option>Nepal</option>
                        <option>Option 02</option>
                    </select>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="phone">Contact*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="phone" name="phone" required type="number">
                    </div>
                </div>
            </div>
            <div class="uk-margin-small-top">
                <label class="uk-form-label uk-text-bold" for="contact">Special Requirement</label>
                <div class="uk-form-controls">
                    <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                </div>
            </div>
            <div class="uk-margin-top uk-text-center">
                <a href="" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></a>
            </div>
        </form>

    </div>
</div>
<!-- inquiry form modal end -->
@stop
