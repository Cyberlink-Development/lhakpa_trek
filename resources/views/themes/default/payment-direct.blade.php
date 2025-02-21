@extends('themes.default.common.master')

@section('content')
<section class=" uk-dark-banner bg-dark uk-cover-container uk-position-relative uk-flex uk-flex-bottom ">
    <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
        <h5 class="uk-margin-large-top white-center-underline uk-margin-remove-bottom ">ADVENTURE SHERPA TRACKS</h5>
        <p class="small-banner-heading uk-margin-remove">Make a Payment</p>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container ">
        <i>Fields marked with * are required</i>
        <form action="{{route('payment.store')}}" method="post">
            @csrf
            <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
            <div class="uk-box-shadow-medium  uk-border-radius uk-margin-top">
                <div class="uk-modal-header uk-padding-small border-left">
                    <h2 class="uk-form-title">Date & Travellers</h2>
                </div>
                <div class="uk-container form-container">
                    <div class=" uk-flex uk-flex-middle">
                        <label class="uk-form-label uk-text-bold uk-margin-remove" for="trip">Name of the Trip <span class="uk-text-danger">*</span> : </label>
                        <div class="uk-form-controls uk-width-expand uk-margin-left">
                            <select class="uk-select" name="trip_id" id="trip" required>
                                <option value="">Select Trip</option>
                                @foreach($trip as $row)
                                    <option value="{{$row->id}}">{{$row->trip_title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="start_date">Trip Start Date <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="start_date" name="start_date" type="date" required>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="end_date">Trip End Date <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="end_date" name="end_date" type="date" required>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="no_of_people">No of People <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="no_of_people" name="no_of_people" type="number"  required>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="amount">Payment Amount <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="amount" name="price" type="number" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-box-shadow-medium  uk-border-radius uk-margin-large-top">
                <div class="uk-modal-header uk-padding-small border-left">
                    <h2 class="uk-form-title">Lead Traveller Details</h2>
                </div>
                <div class="uk-container form-container">
                    <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                        <div class="uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="first_name">First Name <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="first_name" name="first_name" type="text" required>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="last_name">Last Name <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="last_name" name="last_name" type="text" required>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="mobile_number">Mobile Number <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="mobile_number" name="phone" type="number" required>
                            </div>
                        </div>

                        <div class="uk-margin-top uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="country_traveller">Country <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input class="uk-input" id="country_traveller" name="country" type="text" required>
                            </div>
                        </div>

                    </div>
                    <div class="uk-margin-top uk-flex uk-flex-middle">
                        <label class="uk-form-label uk-text-bold uk-margin-remove" for="email_traveller">Email <span class="uk-text-danger">*</span> : </label>
                        <div class="uk-form-controls uk-width-expand uk-margin-left">
                            <input class="uk-input" id="email_traveller" type="email" name="email" required>
                        </div>
                    </div>
                    <div class="uk-margin-top uk-flex uk-flex-middle">
                        <label class="uk-form-label uk-text-bold" for="requirement">Extra Requirements : </label>
                        <div class="uk-form-controls uk-margin-left uk-width-1-1">
                            <textarea name="message" class="uk-textarea uk-width-expand" rows="5" spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-text-center uk-margin-large-top">
                <button type="submit" class="uk-button uk-button-default">PAY NOW</button>
            </div>
        </form>
    </div>
</section>
@endsection