@extends('themes.default.common.master')
@section('content')
<section class=" uk-dark-banner bg-dark uk-cover-container uk-position-relative uk-flex uk-flex-bottom ">
    <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <h5 class="uk-margin-large-top white-center-underline uk-margin-remove-bottom ">TRIP INQUIRY</h5>
        <p class="small-banner-heading uk-margin-remove">{{$data->trip_title}}</p>
    </div>
</section>
<section class="uk-section ">

    <div class="uk-container ">
        <form action="{{route('post-inquiry')}}" method="POST">
        <input type="hidden" name="trip_id" value="{{$data->id}}">
        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
            @csrf
            <div class="uk-box-shadow-large  uk-border-radius">
                <div class="uk-modal-header uk-padding-small border-left">
                    <h2 class="uk-form-title">Your personal detail</h2>
                </div>
                <div class="uk-container form-container">
                    <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="name">Full Name: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="name" type="text" name="name">
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="email">Email Address: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="email" type="email" name="email">
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="country">Country: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <select class="uk-input" name="country" style="-webkit-appearance: listbox;">
                                    @include('themes.default.common.country')
                                 </select>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="contact"> Contact : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="contact" type="text" name="number">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin-top uk-flex uk-flex-middle">
                        <label class="uk-form-label uk-text-bold" for="contact&quot;">Message: </label>
                        <div class="uk-form-controls uk-margin-left uk-width-1-1">
                            <textarea name="message" class="uk-textarea uk-width-expand" rows="5" spellcheck="false"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-text-center uk-margin-top">
                        <button type="submit" class="uk-button uk-button-default">SUBMIT NOW </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
@stop