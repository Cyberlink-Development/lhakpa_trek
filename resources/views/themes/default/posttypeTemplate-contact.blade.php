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

<section class="uk-section uk-section-small uk-pattern-bg uk-grey-bg">
    <div class="uk-container">
        <div class="uk-title-font ">
            <div>
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid uk-flex uk-flex-middle">
                    <div>
                        <p class="uk-white f-20 uk-margin-remove"><i class="fa-solid fa-location-dot uk-secondary uk-margin-small-right"></i>Address: </p>
                        <p class="uk-white uk-margin-remove">{{$setting->address}}</p>
                    </div>
                    <div>
                        <p class="uk-white f-20 uk-margin-remove"><i class="fa-solid fa-phone uk uk-secondary uk-margin-small-right"></i>Phone: </p>
                        <p class="uk-white uk-margin-remove">{{$setting->phone}}</p>
                    </div>
                    <div>
                        <p class="uk-white f-20 uk-margin-remove"><i class="fa-solid fa-envelope uk-secondary uk-margin-small-right"></i>Email: </p>
                        <p class="uk-white uk-margin-remove">{{$setting->email_primary}}</p>
                    </div>
                    <div class="uk-margin-top">
                        <p class="uk-white">FOLLOW US HERE: </p>
                        <div class="uk-footer-icon   uk-margin-bottom">
                            <a href="" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
                            <a href="" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-grid-collapse uk-grid-match uk-margin-top uk-child-width-1-2@m">
            <div class="uk-margin-top">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44668.49294806555!2d85.3261328!3d27.708960349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e1!3m2!1sen!2snp!4v1733741373198!5m2!1sen!2snp" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="uk-primary-bg uk-pattern-bg uk-padding uk-margin-top">
                <form action="" class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="Name">Full Name</label>
                        <input class="uk-input border" type="text" aria-label="Name">
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="Contact">Contact</label>
                        <input class="uk-input border" type="number" aria-label="Contact">
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="Email">Email</label>
                        <input class="uk-input border" type="email" aria-label="Email">
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="country">Country</label>
                        <input class="uk-input border" type="text" aria-label="country">
                    </div>
                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea border" rows="5" placeholder="Message" aria-label="Message"></textarea>
                    </div>
                    <div class="uk-width-1-1 uk-text-center uk-margin-top">
                        <a href="#" class="uk-btn uk-btn-secondary ">SUBMIT</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection