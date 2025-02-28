@extends('themes.default.common.master')
@section('content')
<section class=" uk-dark-banner bg-dark uk-cover-container uk-position-relative uk-flex uk-flex-bottom ">
    <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <h5 class="uk-margin-large-top white-center-underline uk-margin-remove-bottom ">CUSTOMIZE YOUR TRIP</h5>
        <p class="small-banner-heading uk-margin-remove">{{$data->trip_title}}</p>
    </div>
</section>
<!-- <section class="uk-section bg-light bottom-pattern">
    <div class="uk-container">
        <p>
            {{$data->sub_title}}
        </p>
    </div>
</section> -->

<section class="uk-section ">
    <div class="uk-container ">
    @include('themes.default.common.flash-message')

    <form action="{{route('customize-trip.post')}}" method="POST">
        <input type="hidden" name="trip_id" value="{{$data->id}}">
        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
            @csrf
            <div class="uk-box-shadow-medium  uk-border-radius">
                <div class="uk-modal-header uk-padding-small border-left">
                    <h2 class="uk-form-title">TRIP DETAILS</h2>
                </div>
                <div class="uk-container form-container">
                    <div class=" uk-flex uk-flex-middle">
                        <label class="uk-form-label uk-text-bold uk-margin-remove" for="trip">Name of the Trip: </label>
                        <div class="uk-form-controls uk-width-expand uk-margin-left">
                            <input type="text"  value="{{$data->trip_title}}" id="trip" readonly="readonly" class="uk-input">
                        </div>
                    </div>
                    <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="email">Trip Start Date: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="date" name="trip_start_date" type="date">
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="number">No of People: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="people" name="no_of_people" type="number">
                            </div>
                        </div>
                
                    </div>

                </div>
            </div>
            <div class="uk-box-shadow-medium  uk-border-radius uk-margin-large-top">
                <div class="uk-modal-header uk-padding-small border-left">
                    <h2 class="uk-form-title">PERSONAL Details</h2>
                </div>
                <div class="uk-container form-container">
                    <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                        <div class="uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="f_name">Full Name: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="name" name="name" type="text">
                            </div>
                        </div>
                 
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="email">Email: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="email" name="email" type="email">
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="country">Country : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                               <select class="uk-input" name="country">
                                    @include('themes.default.common.country')
                                 </select>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="m_number">Mobile Number: </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="m_number" name="phone" type="text">
                            </div>
                        </div>
                       
                    </div>
                    <div class="uk-margin-top uk-flex uk-flex-middle">
                        <label class="uk-form-label uk-text-bold" for="contact&quot;">Message: </label>
                        <div class="uk-form-controls uk-margin-left uk-width-1-1">
                            <textarea name="comments" class="uk-textarea uk-width-expand" rows="5" spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-text-center uk-margin-large-top">
            <button type="submit" class="uk-button uk-button-default">SUBMIT NOW</button>
            </div>
        </form>
    </div>
</section>
@stop