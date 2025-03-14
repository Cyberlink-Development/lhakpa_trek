@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="assets/img/bg/pattern.png" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Your Travel Opinion</h2>
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
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Your review about the travel :
                </p>
                <!--  -->
                <div class="uk-margin-bottom">
                    <div class="uk-light-bg border uk-padding">
                    <a href="trip-detail.php" class="uk-news-title">
                        <h2 class="uk-margin-remove">Mardi Himal Trek</h2>
                    </a>
                    <div class="uk-star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p >“We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. <br><br>
                    We offer visitors with thousands of trekking and tour packages across Nepal, India, Tibet, and Bhutan. We also believe in full customer satisfaction and great trekking experience.We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. “</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-margin-bottom">
                    <div class="uk-light-bg border uk-padding">
                    <a href="trip-detail.php" class="uk-news-title">
                        <h2 class="uk-margin-remove">Annapurna Circuit Trek</h2>
                    </a>
                    <div class="uk-star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p >“We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. <br><br>
                    We offer visitors with thousands of trekking and tour packages across Nepal, India, Tibet, and Bhutan. We also believe in full customer satisfaction and great trekking experience.We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. “</p>
                    </div>
                </div>
                <!--  -->
                @include('themes.default.user.pagination')
            </div>
        </div>
    </div>
</section>
@stop