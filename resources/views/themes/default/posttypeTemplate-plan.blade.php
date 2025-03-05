@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain9.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary">{{ $data->post_type }}</span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>{{ $data->sub_title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" uk-light-bg">
    <div>
        <div class="uk-grid-collapse uk-grid" uk-height-match="target: .uk-same-height">
            <div class="uk-width-1-3@m">
                <img src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain8.jpeg') }}" class="cover uk-same-height" alt="{{ $data->post_type }}">
            </div>
            <div class="uk-width-2-3@m uk-same-height">
                <div class="uk-title-font  uk-container uk-section uk-padding-large">
                    <h1 class="uk-secondary">{{$data->associated_title}}</h1>
                    <span class="dotted-line-primary"></span>
                    <p>
                        {!! $data->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <h2 class="uk-primary uk-margin-remove">PLAN YOUR TRIP</h2>
        <span class="dotted-line-black"></span>
        <div class="uk-grid">
            <div class="uk-width-3-4@m">
                <div>
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
            <div class="uk-width-1-4@m">
                <div class="uk-light-bg uk-title-font uk-padding-small border uk-margin-top">
                    <h3 class="uk-primary uk-margin-remove">VISIT US</h3>
                    <div class="uk-flex uk-flex-middle  uk-margin-small-top">
                        <i class="fa-solid fa-location-dot uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">ADDRESS: <br>
                                {{$setting->address}}</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-small-top">
                        <i class="fa-solid fa-envelope uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">EMAIL US: <br>
                                {{$setting->email_primary}}</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle  uk-margin-small-top">
                        <i class="fa-solid fa-phone uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">PHONE: <br>
                            {{$setting->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="uk-secondary-bg uk-book-btn border uk-margin-small-top">
                    <a href="contact.php">Inquiry us</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
