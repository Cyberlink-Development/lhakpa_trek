@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="assets/img/bg/pattern.png" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Recommended Trip</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
            @include('themes.default.user.sidebar')
            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Trip list based on your preference :
                </p>
                <!-- <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                       <h2> Showing 3 Results</h2>
                    </div>
                    <div>
                    <form action="">
                        <div class="uk-margin uk-flex uk-flex-middle uk-flex-right">
                            <label class="uk-form-label" for="form-horizontal-select"> Categories:</label>
                            <div class="uk-form-controls">
                                <select class="uk-select" id="form-horizontal-select">
                                    <option>Select the catgory</option>
                                    <option>Budget-Friendly</option>
                                    <option>Luxury</option>
                                    <option>Family Trip</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    </div>
                </div> -->
                <!--  -->
                <div class="uk-margin-bottom">
                    <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                        <div class="uk-width-2-5@l">
                            <a href="trip-detail.php" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                                <img src="assets/img/mountain/mountain9.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                            </a>
                        </div>
                        <div class="uk-width-3-5@l uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                            <div class="uk-star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="uk-text-title uk-text-title uk-flex uk-flex-between">
                                <a href="trip-detail.php" class="uk-news-title">
                                    <h2>Annapurna Base Camp Trek</h2>
                                </a>
                                <h2>US $4,554</h2>
                            </div>
                            <p class="uk-margin-remove line-three">A customizable road trip for a completely free discovery of the Lycian coast, combining the region's must-see ancient sites and beautiful coves.</p>
                            <hr style="border-color: var(--grey);">
                            <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                                <div class="uk-flex uk-flex-middle uk-trip">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Duration</p>
                                        <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-trip ">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Location</p>
                                        <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-trip ">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                        <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                    </div>
                                </div>
                                <div class="uk-visible@s">
                                    <a href="trip-detail.php" class="uk-btn uk-btn-secondary">Know more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-margin-bottom">
                    <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                        <div class="uk-width-2-5@l">
                            <a href="trip-detail.php" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                                <img src="assets/img/mountain/mountain8.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                            </a>
                        </div>
                        <div class="uk-width-3-5@l uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                            <div class="uk-star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="uk-text-title uk-text-title uk-flex uk-flex-between">
                                <a href="trip-detail.php" class="uk-news-title">
                                    <h2>Mardi Himal Trek</h2>
                                </a>
                                <h2>US $4,554</h2>
                            </div>
                            <p class="uk-margin-remove line-three">A customizable road trip for a completely free discovery of the Lycian coast, combining the region's must-see ancient sites and beautiful coves.</p>
                            <hr style="border-color: var(--grey);">
                            <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                                <div class="uk-flex uk-flex-middle uk-trip">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Duration</p>
                                        <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-trip ">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Location</p>
                                        <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-trip ">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                        <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                    </div>
                                </div>
                                <div class="uk-visible@s">
                                    <a href="trip-detail.php" class="uk-btn uk-btn-secondary">Know more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-margin-bottom">
                    <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                        <div class="uk-width-2-5@l">
                            <a href="trip-detail.php" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-270">
                                <img src="assets/img/mountain/mountain7.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                            </a>
                        </div>
                        <div class="uk-width-3-5@l uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                            <div class="uk-star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="uk-text-title uk-text-title uk-flex uk-flex-between">
                                <a href="trip-detail.php" class="uk-news-title">
                                    <h2>Annapurna Circuit Trek</h2>
                                </a>
                                <h2>US $4,554</h2>
                            </div>
                            <p class="uk-margin-remove line-three">A customizable road trip for a completely free discovery of the Lycian coast, combining the region's must-see ancient sites and beautiful coves.</p>
                            <hr style="border-color: var(--grey);">
                            <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                                <div class="uk-flex uk-flex-middle uk-trip">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Duration</p>
                                        <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-trip ">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Location</p>
                                        <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-trip ">
                                    <i class="fa-solid fa-calendar"></i>
                                    <div>
                                        <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                        <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                    </div>
                                </div>
                                <div class="uk-visible@s">
                                    <a href="trip-detail.php" class="uk-btn uk-btn-secondary">Know more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                @include('themes.default.user.pagination')
            </div>
        </div>
    </div>
</section>
@stop