@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')
    <section
        class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed"
        uk-height-viewport
        data-src="{{ asset('uploads/original/' . $data->banner) }}"
        alt="{{ $data->post_title }}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-position-center uk-text-center uk-inner-banner"
            uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
            <h5 class="uk-margin-top white-center-underline ">{{ $posts[0]->post_title }}</h5>
            <p class="banner-heading  uk-margin-remove">{{ $data->post_type }}</p>
            <p class="text-white bottom-font">{{ $data->sub_title }}</p>
        </div>
    </section>
    <section class="uk-section bg-light bg-light why-bg bottom-pattern">
        <div class="uk-container">
            <div class="section-title uk-text-center">
                <h5 class="uk-margin-top uk-margin-remove-bottom center-underline"> {{ $posts[0]->sub_title }}
                </h5>
                <h2 class="uk-margin-remove">{{ $posts[0]->post_title }}</h2>
            </div>
            <p>{!! $posts[0]->post_content !!}</p>
        </div>
    </section>
    <section class="uk-section">
        <div class="uk-container">
            <div class=" uk-child-width-1-2@m  uk-grid">
                <div class="uk-contact uk-margin-top">
                    <h2>Nepal</h2>
                    <div class="uk-flex uk-flex-middle uk-margin-top">
                        <div> <img src="{{ asset('assets/images/location.png') }}" alt=""></div>
                        <div class="uk-margin-left">
                            <p class="uk-text-bold uk-margin-remove uk-contact-topic">Location</p>
                            <p class="uk-margin-remove"> {{ $setting->address }} </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-top">
                        <div> <img src="{{ asset('assets/images/phone.png') }}" alt=""></div>
                        <div class="uk-margin-left">
                            <p class="uk-text-bold uk-margin-remove uk-contact-topic">Call Us</p>
                            <p class="uk-margin-remove">{{$setting->phone}}</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-top">
                        <div> <img src="{{ asset('assets/images/phone.png') }}" alt=""></div>
                        <div class="uk-margin-left">
                            <p class="uk-text-bold uk-margin-remove uk-contact-topic">Send a mail to</p>
                            <p class="uk-margin-remove">
                                {{$setting->email_primary}}<br>{{$setting->email_secondary}}</p>
                        </div>
                    </div>
                </div>
                <div class="uk-contact uk-border-left uk-margin-top">
                    <h2>USA</h2>

                    <div class="uk-flex uk-flex-middle uk-margin-top">
                        <div> <img src="assets/images/location.png" alt=""></div>
                        <div class="uk-margin-left">
                            <p class="uk-text-bold uk-margin-remove uk-contact-topic">Location</p>
                            <p class="uk-margin-remove">{{$setting->usa_address}} </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-top">
                        <div> <img src="assets/images/phone.png" alt=""></div>
                        <div class="uk-margin-left">
                            <p class="uk-text-bold uk-margin-remove uk-contact-topic">Call Us</p>
                            <p class="uk-margin-remove">{{$setting->usa_phone}}
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-top">
                        <div> <img src="assets/images/phone.png" alt=""></div>
                        <div class="uk-margin-left">
                            <p class="uk-text-bold uk-margin-remove uk-contact-topic">Send a mail to</p>
                            <p class="uk-margin-remove">
                                {{$setting->usa_email_primary}}<br>{{$setting->usa_email_secondary}}</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="uk-section uk-padding-remove-top">
        <div class="uk-container">
            <iframe src="{{ $setting->google_map2 }}" width="100%" height="400" style="border:0"
                allowfullscreen></iframe>
        </div>
    </section>
    <section class="uk-section uk-cover-container "
        style="background: linear-gradient(0deg, rgba(9,14,32,0.5) 0%, rgba(9,14,32,0.6) 100%), url(assets/images/inner-banner.jpg);">
        <div class="uk-container">  
        @include('themes.default.common.flash-message')

            <form method="POST" action="{{ route('contact') }}">
            <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                @csrf
                <div class="uk-box-shadow-large  uk-border-radius">
                    <div class="uk-modal-header uk-padding-small border-left">
                        <h2 class="uk-form-title">Fill the form to reach us</h2>
                    </div>
                    <div class="uk-container form-container bg-white">
                        <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="name">Full Name:
                                </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input" id="name" name="full_name" type="text">
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="email">Email Address:
                                </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input" id="email" name="email" type="email">
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="country">Country: </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <select class="uk-input" name="country">
                                    @include('themes.default.common.country')
                                 </select>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="contact"> Contact :
                                </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input" id="contact" name="number" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold" for="contact&quot;">Message: </label>
                            <div class="uk-form-controls uk-margin-left uk-width-1-1">
                                <textarea name="comments" class="uk-textarea uk-width-expand" rows="5" spellcheck="false"></textarea>
                            </div>
                        </div>
                        <div class="uk-text-center uk-margin-top">
                            <button type="submit" class="uk-button uk-button-default">SUBMIT NOW</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>



@endsection
