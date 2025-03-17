@extends('themes.default.common.master')
@section('content')
<div class="uk-section small-footer uk-pattern-bg">
    <section style="margin-bottom: 38px;"></section>
    <section class="uk-section small-footer uk-pattern-bg uk-padding-remove-bottom">
        <div class="uk-container uk-flex uk-flex-center">
            <div class="uk-card uk-card-default uk-padding uk-margin-auto-vertical border" style="padding-bottom:60px; width: 678px; max-width: 100% !important;">
                <ul class="uk-login-tab uk-flex-center" uk-tab>
                    <li><a href="#"><i class="fa-solid fa-unlock login-logo"></i> Sign In </a></li>
                    <li><a href="#"><i class="fa-solid fa-user login-logo"></i>Sign Up</a></li>
                </ul>

                <div class="uk-switcher uk-margin">
                    <div>
                        <form class="uk-contact-form" action="{{route('user.login')}}" method="post">
                            @csrf
                            <div class=" uk-child-width-1-1@m uk-grid">
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="user_email">Email Address</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="user_email" name="email" required type="email">
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="pwd">Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="pwd" name="password" required type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-child-width-1-2 uk-grid">
                                <div>
                                    <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> Remember me </label>
                                </div>
                                <div class="uk-flex uk-flex-right">
                                    <a href="#" class="uk-primary">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-text-center">
                                <button type="submit" class="uk-btn uk-btn-secondary">Sign In <span uk-icon="chevron-right"></span></button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <form class="uk-contact-form" action="{{route('user-registration')}}" method="POST">
                            @csrf
                            <div class=" uk-child-width-1-1@m uk-grid">
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="users_name">Full Name</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="users_name" name="name" required type="email">
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="users_email">Email Address</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="users_email" name="email" required type="email">
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="r_pwd">Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="r_pwd" name="password" required type="password">
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="c_pwd">Confirm Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="c_pwd" name="password_confirmation" required type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-text-center">
                                <button type="submit" class="uk-btn uk-btn-secondary">Sign Up <span uk-icon="chevron-right"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
