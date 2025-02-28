@extends('themes.default.common.master')
@section('content')
<section class="uk-section-padding-page pattern">
<div class=" uk-container-small     ">
    <div class="uk-main-title-home uk-margin-bottom">
        <h2>Trip Booking</h2>
        <span></span>
    </div>
    <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-2@m uk-text-left uk-margin-bottom" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <div class="booking">
                    <h3><span>1</span>Select a Trip</h3>
                    <ul class="uk-theme-icon ">
                        <li>Select Trip</li>
                        <li>Select Trip Date</li>
                        <li>Select Number of Traveler</li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <div class="booking">
                    <h3><span>2</span>Submit Traveler's Information</h3>
                    <ul class="uk-theme-icon">
                        <li>Personal Information</li>
                        <!--<li>Flight Details</li>-->
                        <li>Special Requirement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('post-trip')}}" method="POST">
        @csrf
        @include('themes.default.common.flash-message')
    <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                              <legend class="uk-legend uk-text-theme uk-margin-bottom">Select Trip</legend>
                            <select class="uk-select" name="trip_id">
                                @foreach ($trips as $item)
                                  @if($booking != NULL)
                                    <option value="{{$item->id}}" {{$item->id == $booking->id ? 'selected' : ''}}>{{$item->trip_title}}</option>
                                    @else
                                    <option value="{{$item->id}}">{{$item->trip_title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="uk-child-width-1-2@s uk-child-width-1-2m uk-text-left" uk-grid>
                            <div>
                                <div class="uk-inline" style="width: 100%;">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                    <input class="uk-input datepicker" type="text" placeholder="Trip Start Date *" name="trip_start_date">
                                </div>
                            </div>
                            <div>
                                 <input class="uk-input" type="number" placeholder="No. of People" name="number_of_people">
                            </div>
                        </div>
                    </fieldset>
            </div>
        </div>


    </div>

    <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend uk-text-theme uk-margin-bottom">Personal Information</legend>
                        <!--  -->
                    
                        <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                            <div>
                                <input class="uk-input" type="text" placeholder="First Name *" name= "first_name" required>
                            </div>
                            <div>
                                <input class="uk-input" type="text" placeholder="Last Name *" name="last_name" required>
                            </div>
                             <div>
                                <input class="uk-input" type="text" placeholder="Cell Phone" name="phone">
                            </div>
                        </div>
                        <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                             <div>
                                <input class="uk-input" type="text" placeholder="Email *" name="email" required>
                            </div>
                            <div>
                                <div class="uk-inline" style="width: 100%;">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                    <input class="uk-input datepicker " type="text" placeholder="Date of Birth" name="dob">
                                </div>
                            </div>
                            <div>
                                <select class="uk-select" name="country">
                                    @include('themes.default.common.country')
                                </select>
                            </div>
                        </div>
                        <?php /*?>
                        <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                            <div>
                                <input class="uk-input" type="text" placeholder="Passport Number" name="passportNo">
                            </div>
                            <div>
                                <div class="uk-inline" style="width: 100%;">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                    <input class="uk-input datepicker " type="text" placeholder="Expiration Date" name="passportExpire">
                                </div>
                            </div>
                              <div>
                                <input class="uk-input" type="text" placeholder="Occupation" name="occupation">
                            </div>
                        </div>
                       <?php */?>
                    </fieldset>
            
            </div>
        </div>
        <!-- Personal Information -->
        <?php /*?>
        <!-- Flight Details -->
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend uk-text-theme uk-margin-bottom">Flight Details</legend>

                    <!--  -->
                    <div class="uk-child-width-1-4@s uk-child-width-1-4@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                        <div>
                            <div class="uk-inline" style="width: 100%;">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                <input class="uk-input datepicker " type="text" placeholder="Arrival Date" name="arrival_date">
                            </div>
                        </div>
                        <div>
                            <input class="uk-input" type="text" placeholder="HH:MM" name="arrival_time">
                        </div>
                      
                        <div>
                            <input class="uk-input" type="text" placeholder="Arrival Flight No." name="arrival_flight">
                        </div>
                         <div>
                            <label>Pickup</label>&nbsp;
                            <label><input class="uk-radio" type="radio" name="airport_pick" value="YES"> Yes</label>  &nbsp;
                            <label><input class="uk-radio" type="radio" name="airport_pick" value="NO"> No</label>
                        </div>
                    </div>
                    <!--  -->
                  
                    <!--  -->
                    <div class="uk-child-width-1-4@s uk-child-width-1-4@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                        <div>
                            <div class="uk-inline" style="width: 100%;">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                <input class="uk-input datepicker " type="text" placeholder="Depature Date" name="departure_date">
                            </div>
                        </div>
                      <div>
                            <input class="uk-input" type="text" placeholder="HH:MM" name="departure_time">
                        </div>
                        <div>
                            <input class="uk-input" type="text" placeholder="Departure Flight No." name="departure_flight">
                        </div>
                     <div>
                            <label>Dropoff</label>&nbsp;
                            <label><input class="uk-radio" type="radio" name="drop_flight" value="YES"> Yes</label> &nbsp; 
                            <label><input class="uk-radio" type="radio" name="drop_flight" value="NO"> No</label>
                        </div>
                    </div>
                    <!--  -->
                </fieldset>
              
            </div>
        </div>
        <!-- Flight Details -->
        <?php */?>
        <!-- Special Requirement-->
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend uk-text-theme uk-margin-bottom">Special Requirement</legend>
                        <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                            <div>
                                <p>Please tell us more about yourself to help you better.</p>
                                <textarea name="comments" class="uk-textarea" rows="4" placeholder="Write your message here"></textarea>
                            </div>
                        </div>
                       
                        <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                            <div>

                                <label><input class="uk-checkbox" type="checkbox" name="terms_conditions" value="1" required> &nbsp;&nbsp; I accept <a href="{{ route('page.pagedetail',$terms['uri'], $terms['page_key']) }}" target="_blank">Terms and Conditions</a></label>

                            </div>
                        </div>
                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                        <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top  " uk-grid>
                            <div>   
                                <button type="submit" class="uk-button button-primary button-primary-active uk-submit"> Book Now </button>
                            </div>
                        </div>
                    </fieldset>
            </div>
        </div>
        <!-- Special Requirement-->
    </div>
</form>
</div>
</section>
@stop
