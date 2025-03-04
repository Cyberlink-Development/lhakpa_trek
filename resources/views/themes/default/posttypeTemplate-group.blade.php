@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
                <div class="uk-width-1-1@m">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                        {{-- <li><span class="uk-secondary">Your Group</span></li> --}}
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1>{{$data->post_type}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" uk-light-bg">
        <div>
            <div class="uk-grid-collapse uk-grid" uk-height-match="target: .uk-same-height">
                <div class="uk-width-1-3@m">
                    <img src="{{ $your_group_post->page_thumbnail ? asset('uploads/medium/'.$your_group_post->page_thumbnail ) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" class="cover uk-same-height" alt="{{ $data->post_type }}">
                </div>
                <div class="uk-width-2-3@m uk-same-height">
                    <div class="uk-title-font  uk-container uk-section uk-padding-large">
                        <h1 class="uk-secondary">{{$your_group_post->post_title}}</h1>
                        <span class="dotted-line-primary"></span>
                        <p>{!!$your_group_post->post_content!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section">
        <div class="uk-container">
            <h2 class="uk-primary uk-margin-remove">{{$data->associated_title}}</h3>
            <span class="dotted-line-black"></span>
            <p>{{$data->content}}</p>
            <div class=" border border uk-box-shadow-large">
                <form action="" class="uk-padding">
                    
                    <h3 class="uk-secondary uk-margin-remove">Trip Information</h3>
                    <div class=" uk-child-width-1-2@m uk-grid">
                        <div class="uk-margin-small-top">
                            <label class="uk-form-label uk-text-bold" for="pname">Package Name*</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="pname" name="pname" required type="text">
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <label class="uk-form-label uk-text-bold" for="pname">Travlling Style Type*</label>
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
                            <select class="uk-select" aria-label="Select">
                                <option>Family Trip</option>
                                <option>Guided Trip</option>
                                <option>Self Guided Trip</option>
                            </select>
                        </div>
                        <div class="uk-margin-small-top">
                            <label class="uk-form-label uk-text-bold" for="budget">Budget*</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="budget" name="budget" required type="number">
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
    </section>

@endsection
