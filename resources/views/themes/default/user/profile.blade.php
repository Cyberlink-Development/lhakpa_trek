@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="{{ asset('theme-assets/img/bg/pattern.png') }}" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Profile Info</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
                @include('themes.default.user.sidebar')
            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 4rem 0;">Update you profile details below:
                </p>
                <div class="uk-container">
                    <div class="uk-light-bg uk-border-rounded uk-padding">
                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid">
                            <div>
                                <p class="uk-margin-remove uk-primary">Full Name:</p>
                                <p class="uk-margin-remove">{{ Auth::user()->name }}</p>
                            </div>
                            <div>
                                <p class="uk-margin-remove uk-primary">Address:</p>
                                <p class="uk-margin-remove">Kathmandu, Nepal</p>
                            </div>
                            <div>
                                <p class="uk-margin-remove uk-primary">Email Address:</p>
                                <p class="uk-margin-remove">{{ Auth::user()->email }}</p>
                            </div>
                            <div>
                                <p class="uk-margin-remove uk-primary">Phone Number:</p>
                                <p class="uk-margin-remove">+7 (805) 348 95 72</p>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <h3 class="uk-primary uk-margin-top">Update your Profile</h3>
                        <hr>
                        <div class="uk-grid">
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <div class="uk-flex uk-flex-column" uk-form-custom>
                                    <label class="uk-form-label " for="image">Profile Image</label>
                                    <div class="uk-flex uk-flex-middle">
                                        <input type="file" aria-label="Custom controls">
                                        <button class="uk-button uk-button-default uk-margin-small-right" type="button" tabindex="-1">Change Profile</button>
                                        <p class="uk-margin-remove">Upload JPG, JPEG or PNG image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="name">Full Name</label>
                                <input class="uk-input border" type="text" aria-label="name" name="name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="address">Address</label>
                                <input class="uk-input border" type="text" aria-label="address" name="address" placeholder="Kathmandu, Nepal">
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="email">Email </label>
                                <input class="uk-input border" type="email" name="email" aria-label="email" placeholder="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="contact">Contact </label>
                                <input class="uk-input border" type="number" name="phone" aria-label="contact" placeholder="+7 (805) 348 95 72">
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="Category">Category </label>
                                <select class="uk-select border" id="Category">
                                    <option>Select Destination</option>
                                    <option>Budget-Friendly</option>
                                    <option>Luxury</option>
                                    <option>Family Trip</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-medium-top">
                            <button type="submit" class="uk-btn uk-btn-secondary">Update Profile <span uk-icon="chevron-right"></span></button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop