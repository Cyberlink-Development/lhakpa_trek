@extends('themes.default.common.master')
@section('content')
    <section class=" uk-dark-banner bg-dark uk-cover-container uk-position-relative uk-flex uk-flex-bottom ">
        <div class="uk-position-center uk-text-center uk-inner-banner" uk-scrollspy="cls: uk-animation-slide-left-small; target:  h5,p;  delay: 50; repeat: false;">
            <h5 class="uk-margin-large-top white-center-underline uk-margin-remove-bottom ">{{ $booking->activities->isNotEmpty() ? strtoupper($booking->activities[0]->activity_parent) : '' }}</h5>
            <p class="small-banner-heading uk-margin-remove">{{ $booking->trip_title }}</p>
        </div>
    </section>
    <section class="uk-section bg-light">
        <div class="uk-container ">
            <form id="multiStepForm" action="{{route('post-trip')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="trip_id" value="{{$booking->id}}" name="trip_id">
                <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                <!-- form step 1 -->
                <div class="uk-box-shadow-large  uk-border-radius step" id="step1">
                    <div class="uk-modal-header uk-padding-small border-left">
                        <h2 class="uk-form-title">Step 1 - Trip Details</h2>
                    </div>
                    
                    <div class="uk-container form-container">
                        <i><span class="uk-text-danger">*</span> All Fields Required</i>
                        <div class=" uk-flex uk-flex-middle">
                            <label class="uk-form-label uk-text-bold uk-margin-remove" for="trip_name">Name of the Trip <span class="uk-text-danger">*</span> : </label>
                            <div class="uk-form-controls uk-width-expand uk-margin-left">
                                <input type="text" name="trip_name" value="{{ $booking->trip_title }}" id="trip_name" readonly="readonly" class="uk-input required" style="cursor:not-allowed" required>
                            </div>
                        </div>
                        <div class=" uk-child-width-1-2@m uk-child-width-1-1  uk-grid">
                            @if(!empty($start_date) && !empty($end_date))
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="trip_start_date">Trip Start Date <span class="uk-text-danger">*</span> : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="trip_start_date" name="trip_start_date" type="date" value="{{$start_date}}" style="cursor:not-allowed" readonly required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="trip_end_date">Trip End Date <span class="uk-text-danger">*</span> : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="trip_end_date" name="trip_end_date" type="date" value="{{$end_date}}" style="cursor:not-allowed" readonly required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="trip_days">No of Days <span class="uk-text-danger">*</span> : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="trip_days" name="trip_days" value="{{calculate_days($start_date,$end_date)}}" style="cursor:not-allowed" type="text" readonly required>
                                    </div>
                                </div>
                            @endif
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="total_travellers">Total Travellers <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="total_travellers" name="total_travellers" type="number" required>
                                </div>
                            </div>
                        </div>
                        <p class="uk-text-justify">For trips in Nepal, you are required to make a minimum <span class="uk-text-bold"> 25% non-refundable advance payment</span> of the trip cost to guarantee your place as it helps us to make pre-arrangement of domestic flights ,hotel ,transportation on your behalf . Your booking will be confirmed by email once we have received the deposit and all the details .Please also send us copy of your Passport or any ID copy. All deposit required are per person per trips.</p>
                        <hr>
                        <div class="uk-text-center uk-margin-remove">
                            <a onclick="validateField(1)" class="uk-button uk-button-default">Next Page</a>
                        </div>
                    </div>
                </div>
                <!-- form step 2 -->
                <div class="uk-box-shadow-large  uk-border-radius step" id="step2">
                    <div class="uk-modal-header uk-padding-small border-left">
                        <h2 class="uk-form-title">Step 2 Personal Information</h2>
                    </div>
                    <div class="uk-container form-container">
                        <!-- personal information -->
                        <h3>Personal Information</h3>
                        <hr>
                        <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="name">Full Name <span class="uk-text-danger">*</span> :</label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" name="full_name" id="name" type="text" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="email">Email <span class="uk-text-danger">*</span> :</label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="email" name="email" type="email" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="number">Contact Number <span class="uk-text-danger">*</span> :</label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="number" name="phone" type="number" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="nationality">Nationality <span class="uk-text-danger">*</span> :</label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="nationality" name="nationality" type="text" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="address">Address <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="address" name="address" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class=" uk-child-width-auto@m uk-child-width-1-1 uk-grid uk-grid-collapse uk-margin-top">
                            <div>
                                <label class="uk-form-label uk-text-bold uk-margin-remove">Address Line 2 <span class="uk-text-danger">*</span> : </label>
                            </div>
                            <div class=" uk-form-controls uk-width-expand uk-margin-small-left">
                                <input class="uk-input required" id="postal" type="text" name="zip" placeholder="ZIP / Postal Code" required>
                            </div>
                            <div class=" uk-form-controls uk-width-expand uk-margin-small-left">
                                <input class="uk-input required" id="country" type="text" name="country" placeholder="Country" required>
                            </div>
                        </div>
                        <!-- other information  -->
                        <h3>Other Information</h3>
                        <hr>
                        <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                            <div class="uk-margin-top uk-flex uk-flex-middle ">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove">Gender: </label>
                                    <label><input class="uk-radio uk-margin-small-left" type="radio" value="male" name="gender"> Male</label>
                                    <label><input class="uk-radio uk-margin-small-left" type="radio" value="female" name="gender"> Female</label>
                                    <label><input class="uk-radio uk-margin-small-left" type="radio" value="other" name="gender"> Other</label>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="tshirt_size">T-shirt size: </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input" name="tshirt_size" id="tshirt_size" type="text">
                                    </div>
                                </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="medication">Any and all food or medication allergies: </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input" id="medication" name="medication" type="text">
                                </div>
                            </div>

                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="restrictions">Any dietary restrictions: </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input" id="restrictions" name="restrictions" type="text">
                                </div>
                            </div>
                            <div class="uk-margin-top">
                                <label class="uk-form-label uk-text-bold uk-margin-small-bottom">How did you hear about Adventure Sherpa Tracks?: </label><br>
                                <label>
                                    <input class="uk-radio" type="radio" value="Google" name="hear"> Google
                                </label>
                                <label>
                                    <input class="uk-radio uk-margin-small-left" value="Facebook" type="radio" name="hear">Facebook
                                </label>
                                <label>
                                    <input class="uk-radio uk-margin-small-left" value="Friend" type="radio" name="hear">Friend
                                </label>
                                <label>
                                    <input class="uk-radio uk-margin-small-left " type="radio" name="hear" id="otherRadio">Other
                                    <input type="text" id="otherInput" class="uk-input uk-width-auto required" required>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="uk-text-center uk-margin-remove">
                            <a onclick="prevStep(0)" class="uk-button uk-button-default">Prev Page</a>
                            <a onclick="validateField(2)" class="uk-button uk-button-default">Next Page</a>
                        </div>

                    </div>
                </div>

                <!-- form step 3-->
                <div class="uk-box-shadow-large  uk-border-radius step" id="step3">
                    <div class="uk-modal-header uk-padding-small border-left">
                        <h2 class="uk-form-title">Step 3 Passport and Flight Information</h2>
                    </div>
                    <div class="uk-container form-container">

                        <!-- passport information -->
                        <h3>Passport Information</h3>
                        <hr>
                        <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="passport_number">Passport number <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="passport_number" name="passport_number" type="text" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="passport_expire">Date of expiry <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="passport_expire" name="passport_expire" type="date" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="dob">Date of birth <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="dob" name="dob" type="date" required>
                                </div>
                            </div>
                        </div>
                        <p>Note: Send us your passport copy through email at <span class="uk-text-bold">{{$setting->email_primary}}</p>
                        <!-- International Flight Arrival Details -->
                        <h3>International Flight Arrival Details</h3>
                        <hr>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" value="1" name="has_arrival_detail" id="flightArrival" checked> I have international flight ticket.</label>
                        </div>
                        <div id="flightArrivalDetails">
                            <div class=" uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="airline_name">Airline Name  : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input type="text" name="airline_name" placeholder="Airline Name" id="airline_namedate_birth" class="uk-input required" required>
                                </div>
                            </div>
                            <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="airline_no">Flight Number   : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="airline_no" name="airline_no" type="text" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="arrival_from">From  : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="arrival_from" name="arrival_from" type="text" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="arrival_date">Arrival Date  : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="arrival_date" name="arrival_date" type="date" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="arrival_time">Arrival Time  : </label>
                                    <div class="uk-form-controls uk-flex uk-margin-left">
                                        <input class="uk-input required" id="arrival_time" name="arrival_time" type="text" placeholder="HH:MM" name="" required>
                                        <select class="uk-select" id="time1" name="time1" style="width: 62px;height: unset;">
                                            <option>AM</option>
                                            <option>PM</option>
                                        </select>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" value="0" name="has_arrival_detail"> I don’t have international flight ticket. I will provide it later.</label>
                        </div>
                        <!-- International Flight Departure Details -->
                        <h3>International Flight Departure Details</h3>
                        <hr>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="has_departure_detail" value="1" id="flightDeparture" checked> I have international flight ticket.</label>
                        </div>
                        <div id="flightDepartureDetails">
                            <div class=" uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="departure_airline_name">Airline Name: </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input type="text" name="departure_airline_name" placeholder="Airline name" id="departure_airline_name" class="uk-input required" required>
                                </div>
                            </div>
                            <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="departure_airline_no">Flight Number: </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="departure_airline_no" name="departure_airline_no" type="text" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="departure_from">From: </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="departure_from" name="departure_from" type="text" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="departure_date">Departure Date : </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="departure_date" name="departure_date" type="date" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="departure_time">Departure Time: </label>
                                    <div class="uk-form-controls uk-flex uk-margin-left">
                                        <input class="uk-input required" id="departure_time" name="departure_time" type="text" placeholder="HH:MM" required>
                                        <select class="uk-select" id="time2" name="time2" style="width: 62px;height: unset;">
                                            <option>AM</option>
                                            <option>PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="has_departure_detail" value="0"> I don’t have international flight ticket. I will provide it later.</label>
                        </div>
                        <hr>
                        <div class="uk-text-center uk-margin-remove">
                            <a onclick="prevStep(1)" class="uk-button uk-button-default">Prev Page</a>
                            <a onclick="validateField(3)" class="uk-button uk-button-default">Next Page</a>
                        </div>

                    </div>
                </div>
                <!-- form step 4-->
                <div class="uk-box-shadow-large  uk-border-radius step" id="step4">
                    <div class="uk-modal-header uk-padding-small border-left">
                        <h2 class="uk-form-title">Step 4 Insurance Information</h2>
                    </div>
                    <div class="uk-container form-container">

                        <!-- Insurance information -->
                        <h3>Insurance Information</h3>
                        <hr>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="has_insurance_detail" value="1" id="insurance" checked> I have insurance.</label>
                        </div>
                        <div id="insuranceDetails">
                            <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="company">Insurance Company: </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="company" name="insurance_company" type="text" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="phone">Phone no: </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="phone" name="insurance_phone" type="number" required>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-flex uk-flex-middle">
                                    <label class="uk-form-label uk-text-bold uk-margin-remove" for="policy_no">Policy no:
                                    </label>
                                    <div class="uk-form-controls uk-width-expand uk-margin-left">
                                        <input class="uk-input required" id="policy_no" name="policy_no" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio uk-margin-small-right" value="0" type="radio" name="has_insurance_detail"> I don’t have insurance. I will provide the insurance later.</label>
                        </div>
                        <!--In Case Of Emergency Please Notifyl Details -->
                        <h3>In Case Of Emergency Please Notify</h3>
                        <hr>

                        <div class=" uk-child-width-1-2@m uk-child-width-1-1 uk-grid">
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="fullname">Full Name <span class="uk-text-danger">*</span> :</label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="fullname" name="emergency_fullname" type="text" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="relation">Relation to you <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="relation" name="emergency_relation" type="text" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="phone_no">Phone <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="phone_no" name="emergency_phone_no" type="number" required>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-flex uk-flex-middle">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="email_id">Email <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="email_id" name="emergency_email" type="email" required>
                                </div>
                            </div>
                        
                        </div>
                        <div class="uk-margin-top uk-flex uk-flex-middle uk-width-1-1">
                                <label class="uk-form-label uk-text-bold uk-margin-remove" for="add">Address <span class="uk-text-danger">*</span> : </label>
                                <div class="uk-form-controls uk-width-expand uk-margin-left">
                                    <input class="uk-input required" id="add" name="emergency_address" type="text" required>
                                </div>
                            </div>
                        <div class=" uk-child-width-auto@m uk-child-width-1-1 uk-grid uk-grid-collapse uk-margin-top">
                            <div>
                                <label class="uk-form-label uk-text-bold uk-margin-remove">Address Line 2 <span class="uk-text-danger">*</span> : </label>
                            </div>
                            <div class=" uk-form-controls uk-width-expand uk-margin-small-left">
                                <input class="uk-input required" id="postal2" name="emergency_zip" type="text" placeholder="ZIP / Postal Code" required>
                            </div>
                            <div class=" uk-form-controls uk-width-expand uk-margin-small-left">
                                <input class="uk-input required" id="country2" name="emergency_country" type="text" placeholder="Country" required>
                            </div>
                        </div>
                        <hr>
                        <div class="uk-text-center uk-margin-remove">
                            <a onclick="prevStep(2)" class="uk-button uk-button-default">Prev Page</a>
                            <a onclick="validateField(4)" class="uk-button uk-button-default">Next Page</a>
                        </div>

                    </div>
                </div>
                <!-- form step 5-->
                <div class="uk-box-shadow-large  uk-border-radius step">
                    <div class="uk-modal-header uk-padding-small border-left">
                        <h2 class="uk-form-title">Step 5 Payment Information</h2>
                    </div>
                    <div class="uk-container form-container">

                        <!-- Insurance information -->
                        <h3>Payment Method</h3>
                        <hr>
                        <div>
                            <label><input class="uk-radio uk-margin-small-right" type="radio" value="hbl-pay" name="payment_type" required>I would like to pay by credit/debit card online. A 4% credit card fee applies (pay now) .</label>
                        </div>
                        <hr>
                        <div class="uk-margin-top">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="payment_type" value="wire" required>I would like to pay by wire transfer (instructions and invoice to follow by email).</label>
                            <!--<ul class="uk-list">-->
                            <!--    <li><strong>Bank Name:</strong> Your Bank Name</li>-->
                            <!--    <li><strong>Account Name:</strong> Your Account Name</li>-->
                            <!--    <li><strong>Account Number:</strong> Your Account Number</li>-->
                            <!--</ul>-->
                        </div>
                        <hr>
                        <div class="uk-margin-top">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="payment_type" value="cheque" required>I would like to send Adventure Sherpa Tracks’s representative a personal cheque (instructions and invoice to follow by email/Applies only for travelers from the USA).</label>
                            <!--<p>(Applies only for travelers from the USA)</p>-->
                            <!--<p>Instructions and the invoice will be sent to you by email.</p>-->
                        </div>
                        <!--<p>You will pay <span class="uk-text-bold">USD 300</span>per person as a booking confirmation. This will be deducted from your total amount.</p>-->
                        <hr>
                        <div class="uk-text-center uk-margin-remove">
                            <a onclick="prevStep(3)" class="uk-button uk-button-default">Prev Page</a>
                            <button type="submit" class="uk-button uk-button-default">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    
    <script>
        function validateField(item){
            let formIsValid = true;
            let requiredFields = document.querySelectorAll(`#step${item} .required`);

            requiredFields.forEach(function(field) {
                if (!field.checkValidity()) {
                    formIsValid = false;
                    field.reportValidity(); // Triggers the browser's validation message
                }
            });
            if (formIsValid) {
                nextStep(item)
            }
        }
        $(document).ready(function() {
            function toggleFlightDetails() {
                const flightArrivalDetails = $('#flightArrivalDetails');
                if ($('#flightArrival').is(':checked')) {
                    flightArrivalDetails.show();
                    flightArrivalDetails.find('input').prop('readonly', false);
                }
                else {
                    flightArrivalDetails.hide();
                    flightArrivalDetails.find('input').prop('readonly', true);
                }
            }

            function toggleFlightDepartureDetails() {
                const flightDepartureDetails = $('#flightDepartureDetails');
                if ($('#flightDeparture').is(':checked')) {
                    flightDepartureDetails.show();
                    flightDepartureDetails.find('input').prop('readonly', false);
                }
                else {
                    flightDepartureDetails.hide();
                    flightDepartureDetails.find('input').prop('readonly', true);
                }
            }
            function toggleOtherRadio() {
                const otherInput = $('#otherInput');
                if ($('#otherRadio').is(':checked')) {
                    otherInput.show();
                    otherInput.prop('readonly', false);
                }
                else {
                    otherInput.hide();
                    otherInput.prop('readonly', true);
                }
            }
            function toggleInsuranceDetails() {
                const insuranceDetails = $('#insuranceDetails');
                if ($('#insurance').is(':checked')) {
                    insuranceDetails.show();
                    insuranceDetails.find('input').prop('readonly', false);
                }
                else {
                    insuranceDetails.hide();
                    insuranceDetails.find('input').prop('readonly', true);
                }
            }

            // Initial check on page load
            toggleFlightDetails();
            toggleFlightDepartureDetails();
            toggleOtherRadio();
            toggleInsuranceDetails();

            // Add event listeners to radio buttons
            $('input[name="has_arrival_detail"]').on('change', toggleFlightDetails);
            $('input[name="has_departure_detail"]').on('change', toggleFlightDepartureDetails);
            $('input[name="hear"]').on('change', toggleOtherRadio);
            $('input[name="has_insurance_detail"]').on('change', toggleInsuranceDetails);

            $('#otherInput').on('input', function() {
                $('#otherRadio').val($(this).val()); // Set the radio button value to the text input value
            });
        });
    </script>
@stop
