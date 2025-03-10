@extends('themes.default.common.master')
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:400px;" data-src="{{ $booking->banner ? asset('uploads/banners/'.$booking->banner) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" alt="" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary">Book {{ $booking->trip_title }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-3-4@m">
                <form action="">
                    <h3 class="uk-primary">Personal Detail</h3>
                    <hr>
                    <div class="uk-grid">
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="name">Full Name *</label>
                            <input class="uk-input border" type="text" aria-label="name" required>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="email">Email *</label>
                            <input class="uk-input border" type="email" aria-label="email" required>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="contact">Contact *</label>
                            <input class="uk-input border" type="number" aria-label="contact" required>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="country">Country *</label>
                            <select class="uk-select border" id="country" required>
                                @include('themes.default.common.country')
                            </select>
                        </div>
                    </div>
                    <small><em>Fields marked with * are required.</em></small>
                    <h3 class="uk-primary uk-margin-top">trip details</h3>
                    <hr>
                    <div class="uk-grid">
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label " for="activity"> Package Name *</label>
                            <select class="uk-select border" id="activity" required>
                                {{-- <option>Select Package Name</option> --}}
                                <option value="{{ $booking->trip_title }}">{{ $booking->trip_title }}</option>
                            </select>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="start">Trip Start Date *</label>
                            <input class="uk-input border" type="date" aria-label="start" required>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="people">No of People *</label>
                            <input class="uk-input border" type="number" min="1" aria-label="people" required>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label " for="Message">Extra Requirement</label>
                            <textarea class="uk-textarea border" rows="5" placeholder="Message" aria-label="Message"></textarea>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-margin-top">
                        <a href="climbing.php" class="uk-btn uk-btn-secondary">Learn More <span uk-icon="chevron-right"></span></a>
                    </div>
                </form>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-sidebar" uk-sticky="offset: 90; end: !">
                    <div class="uk-media-260 ">
                        <img src="{{$booking->banner ? asset('uploads/banners/'.$booking->banner) : asset('theme-assets/img/mountain/mountain1.jpeg')}}" class="border" alt="">
                    </div>
                    <h3 class="uk-text-center uk-margin-remove">
                        {{ $booking->trip_title }}
                    </h3>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
